<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function showServices(){ //страница с отделениями
        $departments=Department::select(['id','name'])->get();
        return view('services_of_clinic')->with(['departments'=>$departments]);
    }

    public function showOneService($id)
    {
        $department=Department::select(['id','full_name','description','price_list'])->where('id',$id)->first();
        return view('one_service')->with(['department'=>$department]);
    }


}
