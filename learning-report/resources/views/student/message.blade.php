@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">教員からの連絡</h5>
                <div class="card-body">
                    <div>
                        2020/11/18 16:40　　英語表現II　　飯田先生 11/20までの提出物について
                    </div>
                    <hr>
                    <div class="form-group">
                        <textarea type="text" class="form-control" placeholder="内容"
                            style="height: 400px">{{$message}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection