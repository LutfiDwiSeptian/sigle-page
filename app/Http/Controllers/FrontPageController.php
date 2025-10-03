<?php

namespace App\Http\Controllers;

use App\Models\FormInfo;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class FrontPageController extends Controller
{
    public function index()
    {
        $agent = new Agent();

        return view('guest.view', [
            'isMobile' => $agent->isMobile(),
            'isTablet' => $agent->isTablet(),
            'isDesktop' => $agent->isDesktop(),
        ]);

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'occupation' => 'required|string|max:100',
            'company' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
        ]);

        $form = FormInfo::create($validated);

    return redirect()->back()->with('success', 'Thank You for Your Submission' );
    }

    public function download($filename)
    {
        $path = public_path('file/' . $filename);

        if(file_exists($path)) {
            return response()->download($path);
        } else {
            abort(404, 'Files not Found');
        }
    }
}
