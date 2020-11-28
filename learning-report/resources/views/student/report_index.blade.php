@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">学習チェックシート履歴</h5>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col">日付</th>
                                <th scope="col">勉強したこと</th>
                                <th scope="col">勉強時間</th>
                                <th scope="col">勉強方法</th>
                                <th scope="col">得たこと</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="{{ url('/student/report_detail') }}">2020/11/18</a></th>
                                <td>英語</td>
                                <td>7時間</td>
                                <td>音読</td>
                                <td>仮定法</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="{{ url('/student/report_detail') }}">2020/11/18</a></th>
                                <td>英語</td>
                                <td>7時間</td>
                                <td>音読</td>
                                <td>仮定法</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="{{ url('/student/report_detail') }}">2020/11/18</a></th>
                                <td>英語</td>
                                <td>7時間</td>
                                <td>音読</td>
                                <td>仮定法</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="{{ url('/student/report_detail') }}">2020/11/18</a></th>
                                <td>英語</td>
                                <td>7時間</td>
                                <td>音読</td>
                                <td>仮定法</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="{{ url('/student/report_detail') }}">2020/11/18</a></th>
                                <td>英語</td>
                                <td>7時間</td>
                                <td>音読</td>
                                <td>仮定法</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="{{ url('/student/report_detail') }}">2020/11/18</a></th>
                                <td>英語</td>
                                <td>7時間</td>
                                <td>音読</td>
                                <td>仮定法</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="{{ url('/student/report_detail') }}">2020/11/18</a></th>
                                <td>英語</td>
                                <td>7時間</td>
                                <td>音読</td>
                                <td>仮定法</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="{{ url('/student/report_detail') }}">2020/11/18</a></th>
                                <td>英語</td>
                                <td>7時間</td>
                                <td>音読</td>
                                <td>仮定法</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="{{ url('/student/report_detail') }}">2020/11/18</a></th>
                                <td>英語</td>
                                <td>7時間</td>
                                <td>音読</td>
                                <td>仮定法</td>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection