@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <div class="dropdown">
                    クラス一覧
                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      クラスを選択
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">3年1組</a>
                      <a class="dropdown-item" href="#">3年2組</a>
                      <a class="dropdown-item" href="#">3年3組</a>
                    </div>
                  </div>
                  <br>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">出席番号</th>
                        <th scope="col">名前</th>
                        <th scope="col">性別</th>
                        <th scope="col">部活</th>
                        <th scope="col">編集</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td><a href="{{ url('/student/detail') }}">平岡ゆり</a></td>
                        <td>女性</td>
                        <td>サッカー</td>
                        <td><a href="{{ url('/student/edit') }}">編集</a></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>山田太郎</td>
                        <td>男性</td>
                        <td>テニス</td>
                        <td>編集</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>佐藤小次郎</td>
                        <td>男性</td>
                        <td>卓球</td>
                        <td>編集</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>葉加瀬りな</td>
                        <td>女性</td>
                        <td>テニス</td>
                        <td>編集</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>山岡さやか</td>
                        <td>女性</td>
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