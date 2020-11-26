@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <h5 class="card-header">担当教科の設定</h5>
                <div class="card-body">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="registerRadio" value="add" checked>
                    <label class="form-check-label" for="registerRadio">担当教科の登録</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="editRadio" value="edit">
                    <label class="form-check-label" for="editRadio">担当教科の編集</label>
                  </div>

                  {{--  登録  --}}
                  <div id="register">
                    <br>
                    <div class="form-group">
                      <select class="form-control">
                        <option>１年２組</option>
                        <option>２年３組</option>
                        <option>３年１組</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control">
                        <option>数学</option>
                        <option>英語コミュニケーション</option>
                        <option>化学</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control">
                        <option>飯田先生</option>
                        <option>田中先生</option>
                        <option>井上先生</option>
                      </select>
                    </div>
                    <div class="pb-3" >
                      <a href="{{ url('/charge_subject/register') }}" class="btn btn-primary btn-block">登録</a>
                    </div>
                  </div>

                  {{--  編集  --}}
                  <div id="edit">
                    <br>
                    <div class="form-group">
                      <select class="form-control">
                        <option>１年２組</option>
                        <option>２年３組</option>
                        <option>３年４組</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control">
                        <option>数学</option>
                        <option>英語コミュニケーション</option>
                        <option>日本史</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control">
                        <option>飯田先生</option>
                        <option>田中先生</option>
                        <option>井上先生</option>
                      </select>
                    </div>
                    ↓
                    <div class="form-group">
                      <select class="form-control">
                        <option>１年２組</option>
                        <option>２年３組</option>
                        <option>３年４組</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control">
                        <option>数学</option>
                        <option>英語コミュニケーション</option>
                        <option>日本史</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control">
                        <option>飯田先生</option>
                        <option>田中先生</option>
                        <option>井上先生</option>
                      </select>
                    </div>
                    <div class="pb-3" >
                      <a href="{{ url('/charge_subject/edit') }}" class="btn btn-primary btn-block">更新</a>
                    </div>
                    <div class="pb-3" >
                      <a href="{{ url('/charge_subject/delete') }}" class="btn btn-danger btn-block">削除</a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
<script src="{{ mix('js/charge_subject.js') }}"></script>
@endsection