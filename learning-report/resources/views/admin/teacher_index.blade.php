@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <div class="dropdown">
                    教員一覧
                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      教科を選択
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">英語</a>
                      <a class="dropdown-item" href="#">現代文</a>
                      <a class="dropdown-item" href="#">数学</a>
                    </div>
                  </div>
                  <br>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">教員名</th>
                        <th scope="col">担任</th>
                        <th scope="col">担当教科</th>
                        <th scope="col">校務分掌</th>
                        <th scope="col">部活</th>
                        <th scope="col">編集</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="{{ route('teacherDetail') }}">飯田</a></th>
                        <td><a href="{{ route('classDetail') }}">3年1組</a></td>
                        <td>英語</td>
                        <td>広報</td>
                        <td>テニス</td>
                        <td><a href="{{ route('teacherEdit') }}">編集</a></td>
                      </tr>
                      <tr>
                        <th scope="row">山田</th>
                        <td>3年2組</td>
                        <td>数学</td>
                        <td>広報</td>
                        <td>テニス</td>
                        <td>編集</td>
                      </tr>
                      <tr>
                        <th scope="row">藤井</th>
                        <td>3年3組</td>
                        <td>化学</td>
                        <td>広報</td>
                        <td>テニス</td>
                        <td>編集</td>
                      </tr>
                      <tr>
                        <th scope="row">新内</th>
                        <td>3年4組</td>
                        <td>物理</td>
                        <td>広報</td>
                        <td>テニス</td>
                        <td>編集</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection