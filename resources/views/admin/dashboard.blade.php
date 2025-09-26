@extends('layouts.admin.admindsahboard')

@section('title', 'Admin Dashboard')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-2xl font-bold text-blue-700">Guest Form Submissions</h2>
    <a href="{{ route('admin.exportexcel') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded shadow font-semibold transition">Download Excel</a>
</div>
<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
        <thead class="bg-blue-100">
            <tr>
                <th class="py-2 px-4 border-b text-left">#</th>
                <th class="py-2 px-4 border-b text-left">Name</th>
                <th class="py-2 px-4 border-b text-left">Email</th>
                <th class="py-2 px-4 border-b text-left">Occupation</th>
                <th class="py-2 px-4 border-b text-left">Company</th>
                <th class="py-2 px-4 border-b text-left">Phone</th>
                <th class="py-2 px-4 border-b text-left">Submitted At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataall as $row)
            <tr class="hover:bg-blue-50">
                <td class="py-2 px-4 border-b">{{ $loop->iteration + (($dataall->currentPage()-1) * $dataall->perPage()) }}</td>
                <td class="py-2 px-4 border-b">{{ $row->name }}</td>
                <td class="py-2 px-4 border-b">{{ $row->email }}</td>
                <td class="py-2 px-4 border-b">{{ $row->occupation }}</td>
                <td class="py-2 px-4 border-b">{{ $row->company }}</td>
                <td class="py-2 px-4 border-b">{{ $row->phone }}</td>
                <td class="py-2 px-4 border-b">{{ $row->created_at->format('Y-m-d H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="py-4 px-4 text-center text-gray-500">No data found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4">
        {{ $dataall->links() }}
    </div>
</div>
@endsection
