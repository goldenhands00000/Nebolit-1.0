<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@extends('layouts.app')

@section('content')
    <div class="container">
        @if($department)
        {!!  $department->full_name !!}
            {!!  $department->description !!}

        @endif
    </div>

@endsection
































