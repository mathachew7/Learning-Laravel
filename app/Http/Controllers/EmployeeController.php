<?php

namespace App\Http\Controllers;
use App\Models\employee;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EmployeeImport;
use App\Exports\EmployeeExport;
use PDF;

class EmployeeController extends Controller
{
    public function registerEmployee(Request $request) {

        $this->validate(request(),[
            //put fields to be validated here
            ]); 
        
       $a = employee::create($request->all());
        if($a != NULL){
            return redirect('/main');
        }
        else{
            return "There might be some problem inserting data into database";
        }
    }

    public function fetchEmployee(Request $request){
        $employee = employee::all();
        return view('employeefetch', compact('employee'));
    }
    // //exporting function for CSV file
    // public function exportCsv(Request $request)
    // {
       
    // $fileName = 'Records.csv';
    // $employee = employee::all();
       

    //         $headers = array(
    //             "Content-type"        => "text/csv",
    //             "Content-Disposition" => "attachment; filename=$fileName",
    //             "Pragma"              => "no-cache",
    //             "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
    //             "Expires"             => "0"
    //         );
            

    //         $columns = array('Id', 'Name', 'Email', 'Gender','DOB','Phone','Salary','Address','Start Date');
            
    //         $callback = function() use($employee, $columns) {
    //             $file = fopen('php://output', 'w');
    //             fputcsv($file, $columns);

    //             foreach ($employee as $emp) {
    //                 $row['Id']  = $emp->id;
    //                 $row['Name']    = $emp->assign->name;
    //                 $row['Gender']    = $emp->gender;
    //                 $row['Phone']  = $emp->phone;
    //                 $row['DOB']  = $emp->dob;
    //                 $row['Email'] = $emp->email;
    //                 $row['Salary'] = $emp->salary;
    //                 $row['Address'] = $emp->address;
    //                 $row['Start Date'] = $emp->created_at;

    //                 fputcsv($file, array($row['Id'], $row['Name'], $row['Gender'], $row['Email'], $row['Phone'],$row['DOB'],$row['Salary'],$row['Address'],$row['Start Date']));
    //             }

    //             fclose($file);
    //         };

    // //         return response()->stream($callback, 200, $headers);
    // }


    public function fileImportExport()
    {
       return view('file-import');
    }

    public function fileImport(Request $request) 
    {
        Excel::import(new EmployeeImport, $request->file('file')->store('temp'));
        return back();
    }

    public function fileExport() 
    {
        return Excel::download(new EmployeeExport, 'documents-collection.xlsx');
    }    

    public function exportToPDF()
    {
       $data = employee::all();
       view()->share('employee',$data);
       $pdf = PDF::loadview('employeefetch', $data)->setOptions(['defaultFont'=>'sans-serif']);
       return $pdf->download('employee_list.pdf');
    }


}
