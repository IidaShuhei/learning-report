<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * 教科を編集する.
     *
     * @param Request $request
     * @return view
     */
    public function edit(Request $request)
    {
        return view('subject.edit');
    }
}
