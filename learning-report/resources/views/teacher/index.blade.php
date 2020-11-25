@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <h5 class="card-header">教員一覧</h5>
                <div class="card-body">
                  <div class="dropdown">
                    <div class="form-group">
                      <select class="form-control">
                        <option>教科を選択してください</option>
                        <option>英語</option>
                        <option>日本史</option>
                        <option>数学</option>
                      </select>
                    </div>
                  </div>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">教員名</th>
                        <th scope="col">担任</th>
                        <th scope="col">担当教科</th>
                        <th scope="col">校務分掌</th>
                        <th scope="col">部活</th>
                        <th scope="col">削除</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="{{ url('/teacher/edit') }}">飯田</a></th>
                        <td><a href="{{ url('/class/detail') }}">3年1組</a></td>
                        <td>英語</td>
                        <td>広報</td>
                        <td>テニス</td>
                        <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#deleteTeacher">削除</button></td>
                      </tr>
                      <tr>
                        <th scope="row">山田</th>
                        <td>3年2組</td>
                        <td>数学</td>
                        <td>広報</td>
                        <td>テニス</td>
                        <td>削除</td>
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
                        <td>削除</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
                {{--  Modal  --}}
              @component('component.modal')
              @slot('modal_id', 'deleteTeacher')
              @slot('modal_title', '飯田周平先生を削除しますか')
              @slot('modal_body_class', '')
              @slot('modal_body','削除する前に間違っていないかもう一度確認してください')
              @slot('modal_btn1_class','btn-secondary')
              @slot('modal_btn2_class','btn-danger')
              @slot('modal_btn1','閉じる')
              @slot('modal_btn2','削除')
            @endcomponent

            </div>
          </div>
        </div>
      </div>
</div>
@endsection