@extends('layouts.app')

@section('content')
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
                        <a href="{{ url('/subject/edit') }}" class="btn btn-primary btn-lg btn-block">科目の設定</a>
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

@if($user->status === 2)
@endif

@if($user->status === 3)
@endif

@if($user->status === 4)
@endif
@endsection
