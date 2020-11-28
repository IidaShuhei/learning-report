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
                        <div class="form-group pb-3">
                            <label>よかったところ</label>
                            <textarea class="form-control" id="studyMethod" name="studyMethod[]" rows="3"></textarea>
                        </div>
                        <div class="form-group pb-3">
                            <label>反省点</label>
                            <textarea class="form-control " id="studyMethod" name="studyMethod[]" rows="3"></textarea>
                        </div>
                        <button type="submmit" class="btn btn-primary btn-lg btn-block">提出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection