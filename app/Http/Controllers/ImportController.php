<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportStudent;
use App\Student;

class ImportController extends Controller
{
    public function index()
    {
    	$students = Student::all();
    	return view ('import', compact('students'));
    }

    public function upload(Request $request)
    {
    	Excel::import(new ImportStudent(), $request->file('student'));
    	return back();
    }
}
