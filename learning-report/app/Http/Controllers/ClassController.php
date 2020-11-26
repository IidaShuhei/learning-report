<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * クラス詳細を表示する.
     *
     * @param int $id
     * @return view
     */
    public function detail(Request $request)
    {
        // $class = Class::find($id)
        return view('class.detail');
        // return view('admin.class_detail', ["class" => $class]);
    }

}
