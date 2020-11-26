@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <h5 class="card-header">クラス一覧</h5>
                <div class="card-body">
                  <div class="dropdown">
                    <div class="form-group">
                      <select class="form-control">
                        <option>クラスを選択してください</option>
                        <option>１年２組</option>
                        <option>２年４組</option>
                        <option>３年１組</option>
                      </select>
                    </div>
                  </div>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">出席番号</th>
                        <th scope="col">名前</th>
                        <th scope="col">性別</th>
                        <th scope="col">部活</th>
                        <th scope="col">削除</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td><a href="{{ url('/student/detail') }}">平岡ゆり</a></td>
                        <td>女性</td>
                        <td>サッカー</td>
                        <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#deleteStudent">削除</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>山田太郎</td>
                        <td>男性</td>
                        <td>テニス</td>
                        <td>削除</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>佐藤小次郎</td>
                        <td>男性</td>
                        <td>卓球</td>
                        <td>削除</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>葉加瀬りな</td>
                        <td>女性</td>
                        <td>テニス</td>
                        <td>削除</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>山岡さやか</td>
                        <td>女性</td>
                        <td>テニス</td>
                        <td>削除</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              {{--  Modal  --}}
              @component('component.modal')
                @slot('modal_id', 'deleteStudent')
                @slot('modal_title', '平岡ゆりさんを削除しますか')
                @slot('modal_body_class', '')
                @slot('modal_body','削除する前に間違っていないかもう一度確認してください')
                @slot('modal_btn1_class','btn-secondary')
                @slot('modal_btn2_class','btn-danger')
                @slot('modal_url','/student/delete')
                @slot('modal_btn1','閉じる')
                @slot('modal_btn2','削除')
              @endcomponent

            </div>
          </div>
        </div>
      </div>
</div>
@endsection