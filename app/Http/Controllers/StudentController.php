<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student; 

class StudentController extends Controller
{
	public function Save(Request $req)
	{
		$validatedData = $req->validate([
        'Admission_Number'=>'required|unique:student|max:255',
        'Name'=>'required',
        'Address'=>'required',
        'DOB'=>'required',

		]);

		$Admission_Number = $req->input('Admission_Number');
		$Name=$req->input('Name');
		$Address=$req->input('Address');
		$DOB=$req->input('DOB');

		$data = array('Admission_Number' =>$Admission_Number,'Name'=>$Name,'Address'=>$Address,'DOB'=>$DOB );

		DB::table('student')->insert($data);

		echo "<script>alert('Student Registered Successfully')</script>";
		return view('Sandra_Omari.student');
	}
    //
}
