<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowMessageListController extends Controller
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
}
