<?php

namespace App\Http\Controllers;

use App\Models\FormInfo;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function loginpage()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required', 'email'],
            'password' =>['required'],
        ]);

        if(Auth::attempt($credential, $request->has('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('/admindashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regeneratetoken();

        return redirect('/paneladmin/login');
    }

    public function dashboard()
    {
        $data = FormInfo::all();

        $dataall = FormInfo::paginate(10);
        return view('admin.dashboard', compact('data', 'dataall'));
    }

    public function exportExcel()
    {
        $filename = 'form_infos_' . date('Ymd_His') . '.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];
        $callback = function() {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['Name', 'Email', 'Occupation', 'Company', 'Phone', 'Submitted At']);
            foreach (FormInfo::all() as $row) {
                fputcsv($handle, [
                    $row->name,
                    $row->email,
                    $row->occupation,
                    $row->company,
                    $row->phone,
                    $row->created_at,
                ]);
            }
            fclose($handle);
        };
        return Response::stream($callback, 200, $headers);
    }
}
