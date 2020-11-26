@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">新規連絡作成</h5>
        <div class="card-body">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="題名">
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" placeholder="内容" style="height: 400px"></textarea>
          </div>
          <div class="pb-3" >
            <a href="{{ url('/teacher/create_info') }}" class="btn btn-success btn-block">作成</a>
          </div>
        </div>            
      </div>
    </div>
  </div>
</div>
@endsection