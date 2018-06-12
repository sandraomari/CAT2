<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Fees;
use App\Student;
 


class FeesController extends Controller
{
	public function Save(Request $req)
	{
		$validatedData = $req->validate([
        'Admission_Number'=>'required|unique:fees|max:255',
        'Name'=>'required',
        'Payment_date'=>'required',
        'Amount'=>'required',

		]);

         

		$Admission_Number = $req->input('Admission_Number');
		$Name=$req->input('Name');
		$Payment_date=$req->input('Payment_date');
		$Amount=$req->input('Amount');

		$data = array('Admission_Number' =>$Admission_Number,'Name'=>$Name,'Payment_date'=>$Payment_date,'Amount'=>$Amount);
		
		DB::table('fees')->insert($data);

		echo "<script>alert('Fees Paid Sucessfully')</script>";
		return view('Sandra_Omari.fees');

		//echo "<script>alert('No such record')</script>";
		//return view('Sandra_Omari.fees');

	}
	
	public function Search(Request $req)
	{
		$Admission_Number =$req->input('Admission_Number');

		$fee = Fees::where('Admission_Number',$Admission_Number)->get();

		$sum = $fee->sum('Amount');

		return view('Sandra_Omari.viewfees',compact('fee'),compact('sum'));



	}
	public function ViewAll()
	{
		$fee = Fees::all();
		$sum = $fee->sum('Amount');

		return view('Sandra_Omari.ViewAll',compact('fee'),compact('sum'));
	}
    //
}