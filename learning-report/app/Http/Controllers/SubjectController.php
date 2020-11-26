<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    
    /**
     * 教科を表示する.
     *
     * @return view
     */
    public function index()
    {
        return view('teacher.subject.index');
    }

    /**
     * 教科を編集する.
     *
     * @param Request $request
     * @return view
     */
    public function edit(Request $request)
    {
        return redirect('/home')->with('success','編集が完了しました');
    }

    /**
     * 教科を追加する.
     *
     * @param Request $request
     * @return view
     */
    public function add(Request $request)
    {
        return redirect('/home')->with('success','追加が完了しました');
    }

    /**
     * 教科を削除する.
     *
     * @param Request $request
     * @return view
     */
    public function delete(Request $request)
    {
        return redirect('/home')->with('success','削除が完了しました');
    }

}
