<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
<link href="{{ asset('css/service_effects.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="container text-center">
            <h1 class="h1 mt-5 mb-1">Наши отделения</h1></div><br/><br/>




    <div class="row mx-auto"><div class="col-md-1"></div>
        @foreach($departments as $department)
            &nbsp;&nbsp;&nbsp;&nbsp;

            <a  href="{{ route('one_service',['id'=>$department->id]) }}" >
        <div align="center">



                <div class="style_prevu_kit">{!! $department->name !!}
                <?php
                switch($department->id){
                    case 1: echo '<img  src="img/терапевтия.jpg"  >';break;
                    case 2: echo '<img  src="img/педиатрия.jpg" >';break;
                    case 3: echo '<img  src="img/офтальмология.jpg" >';break;
                    case 4: echo '<img  src="img/рентген.jpg" >';break;
                    case 5: echo '<img  src="img/стоматология.jpg" >';break;
                }
                ?>

                </div>

        </div>

            </a>
        @endforeach

        </div>

</div>

@endsection
































