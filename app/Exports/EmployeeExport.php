<?php

namespace App\Exports;

use App\Models\employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection, WithHeadings
{
    public function headings():array{
        return ["Id", "Name", "Email","DOB","Gender","Address","Phone","Salary","Created_At","Updated_At"];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return employee::all();
    }
}
