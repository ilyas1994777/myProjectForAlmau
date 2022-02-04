@extends('layouts.main')



@section('content')
    <div class="container">
    <div class="row text-center mt-5">


                @if(Session::has('message'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('message')}}
            </div>
                @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors-> all() as $errors)
                                    <li>{{ $errors }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

        <div class="col-12 justify-content-center d-flex">

{{--                                название для route--}}
                <form action="{{ route('authorization') }}" method="get">
                    @csrf
                            <div class="col-12 justify-content-center  inputTextCss">
                                <label class="mb-2" for="login">Введите логин</label>
                                <input  type="text" name="login" placeholder="login" class="form-control">
                            </div>

                        <div class="col-12 inputTextCss">
                            <label class="mb-2" for="password">Введите пароль</label>
                            <input type="text" name="password" placeholder="password" class="form-control justify-content-center">
                        </div>

                        <div class="col-12 mt-3">
                            <button name="getAllData" class="btn btn-success">Войти</button>
                        </div>

                </form>

                    </div>

            <form action="{{ route("registration") }}" method="get" class="mt-3">
                @csrf

                    <button  class="btn btn-success">Регистрация</button>

            </form>

            <form action="{{ route("sbrospass") }}" method="get">
                <button>qwe</button>
            </form>

    </div>
        </div>
    </container>
@endsection
