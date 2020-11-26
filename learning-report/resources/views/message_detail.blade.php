@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="height:650px">
              <h5 class="card-header">高橋光一</h5>
                <div class="card-body body">

                  <div class="row">
                    <div class="col">
                      <div class="row no-gutters">
                      <div class="col-md-2">
                        <img src="https://www.silhouette-illust.com/wp-content/uploads/2019/10/person_46477-300x300.jpg" style="width: 170px; height:140px;">
                      </div>
                      <div class="col-md-9 box">
                        <span style="font-size: 15px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat praesentium harum illo, dolorem voluptatibus alias expedita animi fugit suscipit nulla nisi ipsam id, qui est veritatis, natus labore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis molestias magnam distinctio placeat totam nam illo, recusandae harum facilis quis praesentium quas veniam, deleniti velit, explicabo tenetur nesciunt impedit ip.</span>
                      </div>
                      <div class="col-md-1">
                        <small class="time">3:40</small>
                      </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col">
                      <div class="row no-gutters">
                        <div class="col-md-2"></div>
                          <div class="col-md-1">
                            <small class="mytime">3:40</small>
                          </div>
                        <div class="col-md-9 box text">
                          <span style="font-size: 15px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat praesentium harum illo, dolorem voluptatibus alias expedita animi fugit suscipit nulla nisi ipsam id, qui est veritatis, natus labore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis molestias magnam distinctio placeat totam nam illo, recusandae harum facilis quis praesentium quas veniam, deleniti velit, explicabo tenetur nesciunt impedit ip.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  
                  <div class="row">
                    <div class="col">
                      <div class="row no-gutters">
                      <div class="col-md-2">
                        <img src="https://www.silhouette-illust.com/wp-content/uploads/2019/10/person_46477-300x300.jpg" style="width: 170px; height:140px;">
                      </div>
                      <div class="col-md-9 box">
                        <span style="font-size: 15px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat praesentium harum illo, dolorem voluptatibus alias expedita animi fugit suscipit nulla nisi ipsam id, qui est veritatis, natus labore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis molestias magnam distinctio placeat totam nam illo, recusandae harum facilis quis praesentium quas veniam, deleniti velit, explicabo tenetur nesciunt impedit ip.</span>
                      </div>
                      <div class="col-md-1">
                        <small class="time">3:40</small>
                      </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col">
                      <div class="row no-gutters">
                      <div class="col-md-2"></div>
                      <div class="col-md-1">
                        <small class="mytime">3:40</small>
                      </div>
                      <div class="col-md-9 box text">
                        <span style="font-size: 15px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat praesentium harum illo, dolorem voluptatibus alias expedita animi fugit suscipit nulla nisi ipsam id, qui est veritatis, natus labore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis molestias magnam distinctio placeat totam nam illo, recusandae harum facilis quis praesentium quas veniam, deleniti velit, explicabo tenetur nesciunt impedit ip.</span>
                      </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  
                  <div class="row">
                    <div class="col">
                      <div class="row no-gutters">
                      <div class="col-md-2">
                        <img src="https://www.silhouette-illust.com/wp-content/uploads/2019/10/person_46477-300x300.jpg" style="width: 170px; height:140px;">
                      </div>
                      <div class="col-md-9 box">
                        <span style="font-size: 15px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat praesentium harum illo, dolorem voluptatibus alias expedita animi fugit suscipit nulla nisi ipsam id, qui est veritatis, natus labore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis molestias magnam distinctio placeat totam nam illo, recusandae harum facilis quis praesentium quas veniam, deleniti velit, explicabo tenetur nesciunt impedit ip.</span>
                      </div>
                      <div class="col-md-1">
                        <small class="time">3:40</small>
                      </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col">
                      <div class="row no-gutters">
                      <div class="col-md-2"></div>
                      <div class="col-md-1">
                        <small class="mytime">3:40</small>
                      </div>
                      <div class="col-md-9 box text">
                        <span style="font-size: 15px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat praesentium harum illo, dolorem voluptatibus alias expedita animi fugit suscipit nulla nisi ipsam id, qui est veritatis, natus labore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis molestias magnam distinctio placeat totam nam illo, recusandae harum facilis quis praesentium quas veniam, deleniti velit, explicabo tenetur nesciunt impedit ip.</span>
                      </div>
                      </div>
                    </div>
                  </div>
                  <br>

                </div>
              </div>
              <div class="row">
                  <div class="col-md-10 input">
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-md-2 submit">
                    <a href="{{ url('/teacher/submit_message') }}" class="btn btn-success" style="width: 100%">送信</a>
                  </div>
              </div>
          </div>
        </div>
      </div>
    <link rel="stylesheet" href="{{ 'css/style.css' }}">
</div>
@endsection