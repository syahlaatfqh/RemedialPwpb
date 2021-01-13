<?php

namespace App\Imports;

use App\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Imports\ImportStudent;

class ImportStudent implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $data) {
        	if ($key > 0) {
        	$student = new Student();
        	$student->name  = $data[0];
        	$student->class = $data[1];
        	$student->major = $data[2];
        	$student->save();

        	}
        }
    }
}
