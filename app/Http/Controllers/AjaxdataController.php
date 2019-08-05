<?php

namespace App\Http\Controllers;

use App\Models\Student;
use DataTables;

class AjaxdataController extends Controller
{
    public function index()
    {
        return view('student.ajaxdata');
    }
    public function getdata()
    {
        $students = Student::select('first_name', 'last_name');

        if (request()->ajax()) {
            return DataTables::of($students)
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button name="delete" type="button" id="' . $data->id . '" class="delete btn btn-danger btn-sm">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        // return DataTables::of($students)->make(true);

    }
}
