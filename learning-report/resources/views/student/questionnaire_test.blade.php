@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>授業アンケート入力</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/student/report_create') }}">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <div class="col-3">
                                <select class="form-control" id="period" 　name="period">
                                    <option>1年1学期中間考査</option>
                                    <option>1年2学期中間考査</option>
                                    <option>1年3学期中間考査</option>
                                </select>
                            </div>
                        </div>
                        <table class="table table-hover table-bordered">
                            <thead class="bg-light ">
                                <tr>
                                    <th style="text-align:center;" scope="col">科目</th>
                                    <th style="text-align: center" scope="col">よかったところ</th>
                                    <th style="text-align: center" scope="col">取り入れて欲しいところ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <select class="form-control" id="subject" 　name="subject[]">
                                            <option>英語</option>
                                            <option>国語</option>
                                            <option>体育</option>
                                            <option>数学</option>
                                            <option>化学</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="time" name="express[]">
                                    </td>
                                    <td> <input type="text" class="form-control" id="time" name="want[]">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <select class="form-control" id="subject" 　name="subject[]">
                                            <option>英語</option>
                                            <option>国語</option>
                                            <option>体育</option>
                                            <option>数学</option>
                                            <option>化学</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="time" name="express[]">
                                    </td>
                                    <td> <input type="text" class="form-control" id="time" name="want[]">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <select class="form-control" id="subject" 　name="subject[]">
                                            <option>英語</option>
                                            <option>国語</option>
                                            <option>体育</option>
                                            <option>数学</option>
                                            <option>化学</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="time" name="express[]">
                                    </td>
                                    <td> <input type="text" class="form-control" id="time" name="want[]">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <select class="form-control" id="subject" 　name="subject[]">
                                            <option>英語</option>
                                            <option>国語</option>
                                            <option>体育</option>
                                            <option>数学</option>
                                            <option>化学</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="time" name="express[]">
                                    </td>
                                    <td> <input type="text" class="form-control" id="time" name="want[]">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <select class="form-control" id="subject" 　name="subject[]">
                                            <option>英語</option>
                                            <option>国語</option>
                                            <option>体育</option>
                                            <option>数学</option>
                                            <option>化学</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="time" name="express[]">
                                    </td>
                                    <td> <input type="text" class="form-control" id="time" name="want[]">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submmit" class="btn btn-primary btn-lg btn-block">提出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection