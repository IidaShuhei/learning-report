<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * メッセージ一覧を表示する.
     *
     * @return view
     */
    public function index()
    {
        return view('show_message_list');
    }

    /**
     * メッセージ詳細を表示する.
     *
     * @param Request
     * @return view
     */
    public function detail(Request $request)
    {
        return view('message_detail');
    }

    /**
     * メッセージを新規に作成する画面.
     *
     * @param Request
     * @return view
     */
    public function toCreateMessage(Request $request)
    {
        return view('to_create_message');
    }
}
