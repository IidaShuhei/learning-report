@extends('layouts.app')

@section('content')
<!-- 管理者 -->
@if($user->status === 1)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <!-- componentにわけてここにのせれば、一枚ですむかも -->
                    <div class="pb-3">
                        <a href="{{ url('/teacher/index') }}" class="btn btn-primary btn-lg btn-block">教員</a>
                    </div>
                    <div class="pb-3">
                        <a href="{{ url('/class/detail') }}" class="btn btn-primary btn-lg btn-block">生徒</a>
                    </div>
                    <div class="pb-3">
                        <button type="button" class="btn btn-primary btn-lg btn-block">科目の設定</button>
                    </div>
                    <div class="pb-3">
                        <button type="button" class="btn btn-primary btn-lg btn-block">担当教科・担当クラスの登録</button>
                    </div>
                    <div class="news">
                        <h3>新着情報</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex flex-wrap">
                                <div class="d-flex col-12 col-md-auto">
                                    <div class="news-date">7月14日</div>
                                    <div class="news-category">お知らせ</div>
                                </div>
                                <div class="news-subject col-12 col-md-9">〇〇〇</div>
                            </li>
                            <li class="list-group-item d-flex flex-wrap">
                                <div class="d-flex col-12 col-md-auto">
                                    <div class="news-date ">7月14日</div>
                                    <div class="news-category">イベント情報</div>
                                </div>
                                <div class="news-subject col-12 col-md-9">
                                    本日のイベントは雨天のため、中止いたします。本日のイベントは雨天のため、中止いたします。本日のイベントは雨天のため、中止いたします。本日のイベントは雨天のため、中止いたします。
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- 教員 -->
@if($user->status === 2)
@endif
<!-- 学生 -->
@if($user->status === 3)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="pb-3">
                        <a href="{{ url('/student/report_index') }}">
                            <button type="button" class="btn btn-primary btn-lg btn-block">学習チェックシート入力</button></a>
                    </div>
                    <div class="pb-3">
                        <a href="{{ url('/student/report_index') }}">
                            <button type="button" class="btn btn-primary btn-lg btn-block">学習チェックシート履歴</button></a>
                    </div>
                    <div class="pb-3">
                        <a href="{{ url('/student/questionnaire_class') }}">
                            <button type="button" class="btn btn-primary btn-lg btn-block">授業アンケート入力</button></a>
                    </div>
                    <div class="pb-5">
                        <a href="{{ url('/student/questionnaire_express') }}">
                            <button type="button"
                                class="btn btn-primary btn-lg btn-block">中間期末考査のよかったところ・反省点入力</button></a>
                    </div>
                    <div class="news">
                        <h3>教員からの連絡</h3>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">2020/11/18 16:40</th>
                                    <td>英語表現II</td>
                                    <td>飯田先生</td>
                                    <td><a href="#">11/20までの提出物について</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2020/11/16 18:00</th>
                                    <td>現代文</td>
                                    <td>高橋先生</td>
                                    <td><a href="#">中間テストのテスト範囲について</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2020/11/15 16:00</th>
                                    <td>数学II</td>
                                    <td>井上先生</td>
                                    <td><a href="#">今日の宿題について</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2020/11/10 15:00</th>
                                    <td>物理</td>
                                    <td>山口先生</td>
                                    <td><a href="#">明日の実験で使うものについて</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- 担当なし -->
@if($user->status === 4)
@endif
@endsection