@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>学習チェックシート</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/student/report_create') }}">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <div class="col-3">
                                <input type="calender" class="form-control" id="year" name="year">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">科目</label>
                            <select class="form-control" id="subject" 　name="subject[]">
                                <option>英語</option>
                                <option>国語</option>
                                <option>体育</option>
                                <option>数学</option>
                                <option>化学</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="time">時間</label>
                            <input type="number" class="form-control" id="time" name="time[]">
                        </div>
                        <div class="form-group">
                            <label for="studyMethod">勉強方法</label>
                            <textarea class="form-control" id="studyMethod" name="studyMethod[]" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="experience">得たこと</label>
                            <textarea class="form-control" id="experience" name="experience[]" rows="3"></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="subject">科目</label>
                            <select class="form-control" id="subject" 　name="subject[]">
                                <option>英語</option>
                                <option>国語</option>
                                <option>体育</option>
                                <option>数学</option>
                                <option>化学</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="time">時間</label>
                            <input type="number" class="form-control" id="time" name="time[]">
                        </div>
                        <div class="form-group">
                            <label for="studyMethod">勉強方法</label>
                            <textarea class="form-control" id="studyMethod" name="studyMethod[]" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="experience">得たこと</label>
                            <textarea class="form-control" id="experience" name="experience[]" rows="3"></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="subject">科目</label>
                            <select class="form-control" id="subject" 　name="subject[]">
                                <option>英語</option>
                                <option>国語</option>
                                <option>体育</option>
                                <option>数学</option>
                                <option>化学</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="time">時間</label>
                            <input type="number" class="form-control" id="time" name="time[]">
                        </div>
                        <div class="form-group">
                            <label for="studyMethod">勉強方法</label>
                            <textarea class="form-control" id="studyMethod" name="studyMethod[]" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="experience">得たこと</label>
                            <textarea class="form-control" id="experience" name="experience[]" rows="3"></textarea>
                        </div>
                        <button type="submmit" class="btn btn-primary btn-lg btn-block">提出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection