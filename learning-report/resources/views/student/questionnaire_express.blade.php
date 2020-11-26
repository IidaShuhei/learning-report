@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>中間期末考査のよかったところ・反省点入力</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/student/questionnaire_express') }}">
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
                        <table class="table table-hover">
                            <thead class="bg-primary text-light">
                                <tr>
                                    <th scope="col">よかったところ</th>
                                    <th scope="col">取り入れて欲しいところ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <textarea class="form-control" id="studyMethod" name="studyMethod[]"
                                            rows="3"></textarea>
                                    </td>
                                    <td> <textarea class="form-control" id="studyMethod" name="studyMethod[]"
                                            rows="3"></textarea>
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