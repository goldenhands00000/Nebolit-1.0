<?php

namespace App\Http\Controllers;

use App\Clinic;


class ClinicController extends Controller
{
    public function getAll(){
		$all=Clinic::all();
		return view('clinics',compact('all'));
	}
	
	public function getOne($id=NULL){
		$obj=clinic::find($id);
		return view('clinic',compact('obj'));
	}
	
	
	
}
