@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <h4>飯田周平先生</h4>
                  <table class="table table-hover">
                    <tbody>
                      <tr>
                        <th scope="row">ふりがな</a></th>
                        <td><input type="text" class="form-control" placeholder="いいだしゅうへい"></td>
                      </tr>
                      <tr>
                        <th scope="row">性別</th>
                        <td><input type="text" class="form-control" placeholder="男性"></td>
                      </tr>
                      <tr>
                        <th scope="row">住所</th>
                        <td><input type="text" class="form-control" placeholder="東京都港区"></td>
                      </tr>
                      <tr>
                        <th scope="row">年齢</th>
                        <td><input type="text" class="form-control" placeholder="28"></td>
                      </tr>
                      <tr>
                        <th scope="row">今年度担任クラス</th>
                        <td><input type="text" class="form-control" placeholder="3年2組"></td>
                      </tr>
                      <tr>
                        <th scope="row">今年度校務分掌</th>
                        <td><input type="text" class="form-control" placeholder="広報"></td>
                      </tr>
                      <tr>
                        <th scope="row">担当教科</th>
                        <td><input type="text" class="form-control" placeholder="英語"></td>
                      </tr>
                      <tr>
                        <th scope="row">今年度担当クラス</th>
                        <td><input type="text" class="form-control" placeholder="1年2組、3年4組"></td>
                      </tr>
                      <tr>
                        <th scope="row">今年度担当部活</th>
                        <td><input type="text" class="form-control" placeholder="テニス部"></td>
                      </tr>
                    </tbody>
                  </table>
                      <div class="pb-3">
                        <button type="button" class="btn btn-primary btn-block">更新</button>
                      </div>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection