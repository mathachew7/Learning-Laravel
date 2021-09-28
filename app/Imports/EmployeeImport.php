<?php

namespace App\Imports;

use App\Models\employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class EmployeeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new employee([
            //
            'name' => $row['name'],
            'email' => $row['email'],
            'dob' => $row['dob'],
            'gender' => $row['gender'],
            'address' => $row['address'],
            'phone' => $row['phone'],
            'salary' => $row['salary'],
            'created_at' => $row['created_at'],
            'updated_at' => $row['updated_at']
        ]);
    }
}
