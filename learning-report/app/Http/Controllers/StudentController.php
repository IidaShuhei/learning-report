<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StudentController extends Controller
{
    /**
     * 生徒詳細を表示する.
     *
     * @param Request $request
     * @return view
     */
    public function detail(Request $request)
    {
        $id = $request->id ?? 3;
        $student = User::find($id);

        // $student = DB::table('users')
        //     ->join('student', 'student.user_id', 'users.id')
        //     ->where('users.id', '=', $id)
        //     ->get();

        return view('student.detail', ["student" => $student]);
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
        return redirect('/home')->with('success', '編集が完了しました');
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
        return redirect('/home')->with('success', '編集が完了しました');
        // return view('admin.student_edit', ["student" => $student]);
    }

    /**
     * 生徒プロフィール画面を表示する.
     *
     * @param Request $request
     * @return view
     */
    public function profile(Request $request)
    {
        $id = $request->id ?? 3;
        $student = User::find($id);

        // $student = DB::table('users')
        //     ->join('student', 'student.user_id', 'users.id')
        //     ->where('users.id', '=', $id)
        //     ->get();

        return view('student.profile', ["student" => $student]);
    }

    /**
     * 学習チェックシートを表示する.
     *
     * @param Request $request
     * @return view
     */
    public function reportIndex(Request $request)
    {
        $id = $request->id ?? 3;
        $student = User::find($id);

        return view('student.report_index', ["student" => $student]);
    }

    /**
     * 学習チェックシート詳細画面を表示する.
     *
     * @param Request $request
     * @return view
     */
    public function reportDetail(Request $request)
    {
        $id = $request->id ?? 3;
        $student = User::find($id);

        // $report = Report::where('student.id','=',$request->id);

        return view('student.report_detail', ["student" => $student]);
    }

    /**
     * 学習チェックシート入力画面を表示する.
     *
     * @param Request $request
     * @return view
     */
    public function questionnaireClass(Request $request)
    {
        $id = $request->id ?? 3;
        $student = User::find($id);

        // $report = Report::where('student.id','=',$request->id);

        return view('student.report_create', ["student" => $student]);
    }

    /**
     * 学習チェックシート情報を登録する.
     *
     * @param Request $request
     * @return view
     */
    public function questionnaireClassStore(Request $request)
    {
        $id = $request->id ?? 3;
        $user = User::find($id);

        // $report = Report::where('student.id','=',$request->id);

        return view('home', ["user" => $user])->with('success', '登録が完了しました');
    }

    /**
     * 授業アンケート入力画面を表示する.
     *
     * @param Request $request
     * @return view
     */
    public function questionnaireTest(Request $request)
    {
        $id = $request->id ?? 3;
        $student = User::find($id);

        // $report = Report::where('student.id','=',$request->id);

        return view('student.questionnaire_test', ["student" => $student]);
    }

    /**
     * 授業アンケート情報を登録する.
     *
     * @param Request $request
     * @return view
     */
    public function questionnaireTestStore(Request $request)
    {
        $id = $request->id ?? 3;
        $user = User::find($id);

        // $report = Report::where('student.id','=',$request->id);

        return  view('home', ["user" => $user])->with('success', '登録が完了しました');
    }

    /**
     * 中間考査入力画面を表示する.
     *
     * @param Request $request
     * @return view
     */
    public function questionnaireExpress(Request $request)
    {
        $id = $request->id ?? 3;
        $student = User::find($id);

        // $report = Report::where('student.id','=',$request->id);

        return view('student.questionnaire_express', ["student" => $student]);
    }

    /**
     * 中間考査情報を登録する.
     *
     * @param Request $request
     * @return view
     */
    public function questionnaireExpressStore(Request $request)
    {
        $id = $request->id ?? 3;
        $user = User::find($id);

        // $report = Report::where('student.id','=',$request->id);

        return  redirect()->action('HomeController@index')->with('success', '登録が完了しました');
    }

    /**
     * メッセージを表示する.
     *
     * @param Request $request
     * @return view
     */

    public function message(Request $request)
    {
        $message = "各クラスのクラス委員はノートを11/20の放課後までに集めて飯田の机に置いておいてください。当日忘れた人は家に取りに行ってください。よろしくお願いします。";

        return   view('student.message', ["message" => $message]);
    }
}