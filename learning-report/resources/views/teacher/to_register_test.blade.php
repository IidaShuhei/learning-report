@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <h5 class="card-header">中間期末考査登録</h5>
                <div class="card-body">

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
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file">
                        <label class="custom-file-label" for="file">CSVファイルを選択</label>
                      </div>
                    </div>
                    <div class="pb-3" >
                      <a href="{{ url('/charge_subject/register') }}" class="btn btn-primary btn-block">登録</a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection