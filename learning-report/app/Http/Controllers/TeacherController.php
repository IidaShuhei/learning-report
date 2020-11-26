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
    public function index()
    {
        return view('teacher.index');
    }

    /**
     * 教員詳細を表示する.
     *
     * @param Request $request
     * @return view
     */
    public function detail(Request $request)
    {
        // $teacher = Teacher::find($id)
        return view('teacher.detail');
        // return view('admin.teacher_detail', ["teacher" => $teacher]);
    }

    /**
     * 教員を編集する.
     *
     * @param Request $request
     * @return view
     */
    public function edit(Request $request)
    {
        // $teacher = Teacher::find($id)
        return redirect('/home')->with('success','編集が完了しました');
        // return view('admin.teacher_edit', ["teacher" => $teacher]);
    }

    /**
     * 教員を削除する.
     *
     * @param Request $request
     * @return view
     */
    public function delete(Request $request)
    {
        // $teacher = Teacher::find($id)
        return redirect('/home')->with('success','編集が完了しました');
        // return view('admin.teacher_edit', ["teacher" => $teacher]);
    }

    /**
     * 連絡作成画面を表示する.
     *
     * @return view
     */
    public function toInfoView()
    {
        return view('teacher.to_info_view');
    }

    /**
     * 連絡を作成する.
     *
     * @param Request
     * @return view
     */
    public function createInfo(Request $request)
    {
        return redirect('/home')->with('success','作成が完了しました');
    }

    /**
     * メッセージを送信する.
     *
     * @param Request
     * @return view
     */
    public function submitMessage(Request $request)
    {
        return redirect('/home')->with('success','送信が完了しました');
    }

}
