@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">新規メッセージ作成</h5>
        <div class="card-body">
          <div class="form-group">
            <select class="form-control">
              <option>送る先を選択</option>
              <option>１年３組全員</option>
              <option>１年３組</option>
              <option>２年３組全員</option>
              <option>２年３組</option>
              <option>３年１組全員</option>
              <option>３年１組</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control">
              <option>高橋光一</option>
              <option>山田太郎</option>
              <option>西田敏行</option>
            </select>
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" placeholder="内容" style="height: 400px"></textarea>
          </div>
          <div class="pb-3" >
            <a href="{{ url('/teacher/submit_message') }}" class="btn btn-success btn-block">送信</a>
          </div>
        </div>            
      </div>
    </div>
  </div>
</div>
@endsection