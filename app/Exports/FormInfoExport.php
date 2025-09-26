<?php

namespace App\Exports;

use App\Models\FormInfo;

class FormInfoExport implements \Maatwebsite\Excel\Concerns\FromCollection, \Maatwebsite\Excel\Concerns\WithHeadings
{
    public function collection()
    {
        return FormInfo::all(['name', 'email', 'occupation', 'company', 'phone', 'created_at']);
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Occupation',
            'Company',
            'Phone',
            'Submitted At',
        ];
    }
}
