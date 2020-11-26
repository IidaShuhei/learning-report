<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChargeSubjectController extends Controller
{

    /**
     * 担当教科、担当クラスを表示する.
     *
     * @return view
     */
    public function index()
    {
        return view('teacher.charge_subject_index');
    }

    /**
     * 担当教科、担当クラスを登録する.
     * 
     * @param Request
     * @return view
     */
    public function register(Request $request)
    {
        return redirect('/home')->with('success','登録が完了しました');
    }

    /**
     * 担当教科、担当クラスを編集する.
     * 
     * @param Request
     * @return view
     */
    public function edit(Request $request)
    {
        return redirect('/home')->with('success','編集が完了しました');
    }

    /**
     * 担当教科、担当クラスを削除する.
     * 
     * @param Request
     * @return view
     */
    public function delete(Request $request)
    {
        return redirect('/home')->with('success','削除が完了しました');
    }

}
