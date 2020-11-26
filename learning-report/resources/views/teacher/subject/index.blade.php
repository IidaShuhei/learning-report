@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">科目の設定</h5>
          <div class="card-body">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="addRadio" value="add" checked>
              <label class="form-check-label" for="addRadio">科目の追加</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="editRadio" value="edit">
              <label class="form-check-label" for="editRadio">科目の編集</label>
            </div>

            {{--  追加  --}}
            <div id="add">
              <br>
              <div class="form-group">
                <select class="form-control">
                  <option>１年生</option>
                  <option>２年生</option>
                  <option>３年生</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="英語コミュニケーション">
              </div>
              <div class="pb-3" >
                <a href="{{ url('/subject/add') }}" class="btn btn-primary btn-block">追加</a>
              </div>
            </div>

            {{--  編集  --}}
              <div id="edit">
                <br>
                <div class="form-group">
                  <select class="form-control">
                    <option>１年生</option>
                    <option>２年生</option>
                    <option>３年生</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option>数学</option>
                    <option>英語コミュニケーション</option>
                    <option>日本史</option>
                  </select>
                </div>
                ↓
                <div class="form-group">
                  <select class="form-control">
                    <option>１年生</option>
                    <option>２年生</option>
                    <option>３年生</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option>数学</option>
                    <option>英語コミュニケーション</option>
                    <option>日本史</option>
                  </select>
                </div>
                <div class="pb-3" >
                  <a href="{{ url('/subject/edit') }}" class="btn btn-primary btn-block">更新</a>
                </div>
                <div class="pb-3" >
                  <a href="{{ url('/subject/delete') }}" class="btn btn-danger btn-block">削除</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="{{ mix('js/subject.js') }}"></script>
@endsection