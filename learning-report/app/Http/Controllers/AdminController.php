<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * 教員一覧を表示する.
     *
     * @return view
     */
    public function teacherIndex()
    {
        return view('admin.teacher_index');
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
        return view('admin.teacher_detail');
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
        return view('admin.teacher_edit');
        // return view('admin.teacher_edit', ["teacher" => $teacher]);
    }

    /**
     * クラス詳細を表示する.
     *
     * @param int $id
     * @return view
     */
    public function classDetail()
    {
        // $class = Class::find($id)
        return view('admin.class_detail');
        // return view('admin.class_detail', ["class" => $class]);
    }

    /**
     * 生徒詳細を表示する.
     *
     * @param int $id
     * @return view
     */
    public function studentDetail()
    {
        // $student = Student::find($id)
        return view('admin.student_detail');
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
        return view('admin.student_edit');
        // return view('admin.student_edit', ["student" => $student]);
    }
}
