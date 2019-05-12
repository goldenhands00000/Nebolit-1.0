

@extends('layouts.app')

@section('content')



    <div class="container">
        <!-- Example row of columns -->


<h1 >Регистрация на прием</h1>
        <h4>После оставления заявки с вами свяжутся для согласования приема</h4><br/>
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




            <form method='POST' action='{{url('personal_acoount/send')}}'>
                {{  csrf_field()  }}
                <div class="form-row col-md-12">
                    <div class="form-group col-md-3">
                        <label for="inputAddress">Введите имя</label>
                        <input type="text" class="form-control " name="name" id="inputName" placeholder="Имя">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputAddress">Введите фамилию</label>
                        <input type="text" class="form-control " name="surname" id="inputSurname" placeholder="Фамилия">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputAddress">Введите отчество</label>
                        <input type="text" class="form-control " name="patronymic" id="inputPatronymic" placeholder="Отчество">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-9">
                    <label for="exampleFormControlSelect1 ">Выберете отделение</label>
                    <select class="form-control " name="select" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="example-tel-input"  class=" col-form-label">Введите телефон</label>
                    <div class="col-9">
                        <input class="form-control" name="phone" type="tel" value="" id="example-tel-input">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="example-datetime-local-input" class=" col-form-label">Введите дату и время</label>
                    <div class="col-9">
                        <input class="form-control" type="datetime-local" name="date" id="example-datetime-local-input">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Зарегестрироваться предварительно</button>
            </form>






        </div>
    </div>
@endsection
