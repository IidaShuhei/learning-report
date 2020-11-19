<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * 生徒詳細を表示する.
     *
     * @param int $id
     * @return view
     */
    public function studentDetail()
    {
        // $student = Student::find($id)
        return view('student.detail');
        // return view('admin.student_detail', ["student" => $student]);
    }

    /**
     * 生徒編集画面を表示する.
     *
     * @param int $id
     * @return view
     */
    public function studentEdit()
    {
        // $student = Student::find($id)
        return view('student.edit');
        // return view('admin.student_edit', ["student" => $student]);
    }
}
