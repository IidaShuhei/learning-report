@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>学習チェックシート</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/student/report_create') }}">
                        {{csrf_field()}}
                    <div class="col-3">
                        <select class="form-control" id="period" 　name="period">
                            <option>11月19日</option>
                            <option>11月20日</option>
                            <option>11月21日</option>
                        </select>
                    </div>
                    <br>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">勉強したこと</th>
                        <th scope="col">勉強時間</th>
                        <th scope="col">勉強方法</th>
                        <th scope="col">得たこと</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <select class="form-control">
                            <option>英語</option>
                            <option>数学</option>
                            <option>現代文</option>
                          </select>
                        </td>
                        <td>
                          <select class="form-control">
                            <option>30分</option>
                            <option>1時間</option>
                            <option>1時間半</option>
                            <option>2時間</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" placeholder="音読"></td>
                        <td><input type="text" class="form-control" placeholder="英語のリズムをつかめました"></td>
                      </tr>
                      <tr>
                        <td>
                          <select class="form-control">
                            <option>英語</option>
                            <option>数学</option>
                            <option>現代文</option>
                          </select>
                        </td>
                        <td>
                          <select class="form-control">
                            <option>30分</option>
                            <option>1時間</option>
                            <option>1時間半</option>
                            <option>2時間</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" placeholder="音読"></td>
                        <td><input type="text" class="form-control" placeholder="英語のリズムをつかめました"></td>
                      </tr>
                      <tr>
                        <td>
                          <select class="form-control">
                            <option>英語</option>
                            <option>数学</option>
                            <option>現代文</option>
                          </select>
                        </td>
                        <td>
                          <select class="form-control">
                            <option>30分</option>
                            <option>1時間</option>
                            <option>1時間半</option>
                            <option>2時間</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" placeholder="音読"></td>
                        <td><input type="text" class="form-control" placeholder="英語のリズムをつかめました"></td>
                      </tr>
                      <tr>
                        <td>
                          <select class="form-control">
                            <option>英語</option>
                            <option>数学</option>
                            <option>現代文</option>
                          </select>
                        </td>
                        <td>
                          <select class="form-control">
                            <option>30分</option>
                            <option>1時間</option>
                            <option>1時間半</option>
                            <option>2時間</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" placeholder="音読"></td>
                        <td><input type="text" class="form-control" placeholder="英語のリズムをつかめました"></td>
                      </tr>
                    </tbody>
                  </table>
                    <button type="submmit" class="btn btn-primary btn-lg btn-block">提出</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection