<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * 教員一覧を表示する.
     *
     * @return view
     */
    public function teacherIndex()
    {
        return view('teacher.index');
    }

    /**
     * 教員詳細を表示する.
     *
     * @param int $id
     * @return view
     */
    public function teacherDetail()
    {
        // $teacher = Teacher::find($id)
        return view('teacher.detail');
        // return view('admin.teacher_detail', ["teacher" => $teacher]);
    }

    /**
     * 教員を編集する.
     *
     * @param int $id
     * @return view
     */
    public function teacherEdit()
    {
        // $teacher = Teacher::find($id)
        return view('teacher.edit');
        // return view('admin.teacher_edit', ["teacher" => $teacher]);
    }
}
