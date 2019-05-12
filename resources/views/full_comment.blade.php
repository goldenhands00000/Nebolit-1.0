<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Неболит</h1>
            <p>Tractata Sunt!</p>
            <p><a class="btn btn-primary btn-lg" href="{{route('about_us')}}" role="button">Узнать больше&raquo;</a></p>
        </div>
    </div>


    <div class="container">
    <!-- Example row of columns -->
    <div class="row">


        @if($comment)


            <div >

                <h2>{{$comment->name}}</h2>

                <?php
                switch($comment->rating){
                    case 1:echo'
                            <span style="color: #ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#cccccc;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#cccccc;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#cccccc;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#cccccc;font-size: 50px" class="fa fa-star"></span>';break;
                    case 2:echo'
                            <span style="color: #ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#cccccc;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#cccccc;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#cccccc;font-size: 50px" class="fa fa-star"></span>';break;
                    case 3:echo'
                            <span style="color: #ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#cccccc;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#cccccc;font-size: 50px" class="fa fa-star"></span>';break;
                    case 4:echo'
                            <span style="color: #ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#cccccc;font-size: 50px" class="fa fa-star"></span>';break;
                    case 5:echo'
                            <span style="color: #ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#ffa500;font-size: 50px" class="fa fa-star "></span>
                            <span style="color:#ffa500;font-size: 50px" class="fa fa-star"></span>';break;
               }
                ?>
                <p>{!!$comment->description!!}</p>

            </div>

            @endif

    </div>

    <hr>


</div>
@endsection

