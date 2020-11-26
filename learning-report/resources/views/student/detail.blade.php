@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">平岡ゆり</h5>
                <div class="card-body">
                  <h4>平岡ゆり</h4>
                  <table class="table table-hover">
                    <tbody>
                      <tr>
                        <th scope="row">ふりがな</a></th>
                        <td><input type="text" class="form-control" placeholder="ひらおかゆり"></td>
                      </tr>
                      <tr>
                        <th scope="row">性別</th>
                        <td><input type="text" class="form-control" placeholder="女性"></td>
                      </tr>
                      <tr>
                        <th scope="row">住所</th>
                        <td><input type="text" class="form-control" placeholder="東京都港区"></td>
                      </tr>
                      <tr>
                        <th scope="row">年齢</th>
                        <td><input type="text" class="form-control" placeholder="18"></td>
                      </tr>
                      <tr>
                        <th scope="row">1年次クラス</th>
                        <td><input type="text" class="form-control" placeholder="1年2組"></td>
                      </tr>
                      <tr>
                        <th scope="row">2年次クラス</th>
                        <td><input type="text" class="form-control" placeholder="2年2組"></td>
                      </tr>
                      <tr>
                        <th scope="row">3年次クラス</th>
                        <td><input type="text" class="form-control" placeholder="3年2組"></td>
                      </tr>
                      <tr>
                        <th scope="row">部活動</th>
                        <td><input type="text" class="form-control" placeholder="テニス部"></td>
                      </tr>
                    </tbody>
                  </table>
                    <div class="pb-3">
                      <a href="{{ url('/student/edit') }}" class="btn btn-primary btn-block">更新</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection