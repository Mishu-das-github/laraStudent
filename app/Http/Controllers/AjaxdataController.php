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
        $students = Student::latest()->get();
        /**
         * Or
         * $students = Student::select('*');
         */

        if (request()->ajax()) {
            return DataTables::of($students)
                ->addColumn('action', function ($data) {
                    $button = '<a class="btn btn-primary" href="http://localhost/laraStudent/public/edit/' . $data->id . '">Edit</a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<a class="btn btn-danger" href="http://localhost/laraStudent/public/delete/' . $data->id . '">Delete</a>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        // return DataTables::of($students)->make(true);

    }
    public function edit($id)
    {
        dd("This is " . $id);
    }

    public function delete($id)
    {
        dd("This is " . $id);
    }
}
