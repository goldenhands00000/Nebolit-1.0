


<?php
use App\Comment;
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('css/stars.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container">
        @guest
            <h1>Чтобы оставить комментарий, войдите в аккаунт</h1>
        @endguest
    @auth
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                    <?php $name_user=Auth::user()->name; ?>

        <form name="comment" action='{{url('reviews/send_comment')}}' method="POST">
            {{csrf_field()}}
            <h1><input style="background-color: #E9ECEF; border: none;" class="name" id="name-user" type="text" name="name" value='{{$name_user}}' readonly></h1>
            <div class="star-rating">
                <div class="star-rating__wrap">
                    <input class="star-rating__input" id="star-rating-52" type="radio" name="rating" value="5"  >
                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-52" title="5 out of 5 stars"></label>

                    <input class="star-rating__input" id="star-rating-42" type="radio" name="rating" value="4"  >
                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-42" title="4 out of 5 stars"></label>

                    <input class="star-rating__input" id="star-rating-32" type="radio" name="rating" value="3"  >
                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-32" title="3 out of 5 stars"></label>

                    <input class="star-rating__input" id="star-rating-22" type="radio" name="rating" value="2" >
                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-22" title="2 out of 5 stars"></label>

                    <input class="star-rating__input" id="star-rating-12" type="radio" name="rating" value="1" >
                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-12" title="1 out of 5 stars"></label>
                </div>
            </div>

        <div class="form-group">
            <label for="comment">Ваш комментарий:</label>
            <textarea class="form-control" rows="5" name="message" id="comment"></textarea><br>
            <button type="submit" name = "send" class="btn btn-primary">Отправить</button>
        </div>
        </form>
        @endauth
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->

        <?php foreach ($comments as $comment){
        ?>

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
            <p>{{$comment->text}}</p>
            <p><a class="btn btn-secondary" href="{{ route('commentShow',['id'=>$comment->id]) }}" role="button">Подробнее &raquo;</a></p>
    </br><hr>

<?php
if($comment->id==9){
    break;
}
}
?>
</div>
@endsection
