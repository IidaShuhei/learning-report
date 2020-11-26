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
    public function detail()
    {
        // $student = Student::find($id)
        return view('student.detail');
        // return view('admin.student_detail', ["student" => $student]);
    }

    /**
     * 生徒を編集する.
     *
     * @param Request $request
     * @return view
     */
    public function edit(Request $request)
    {
        // $student = Student::find($id)
        return redirect('/home')->with('success','編集が完了しました');
        // return view('admin.student_edit', ["student" => $student]);
    }

    /**
     * 生徒を削除する.
     *
     * @param Request $request
     * @return view
     */
    public function delete(Request $request)
    {
        // $student = Student::find($id)
        return redirect('/home')->with('success','編集が完了しました');
        // return view('admin.student_edit', ["student" => $student]);
    }
}
