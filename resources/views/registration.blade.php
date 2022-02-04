@extends('layouts.main')

@section('title-block')
    Регистрация
@endsection

@section('content')
    <div class="container">
        <div class="row text-center mt-5 regCss">


{{--            @if(Session::has('message'))--}}
{{--                <div class="alert alert-danger" role="alert">--}}
{{--                    {{Session::get('message')}}--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            @if($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach($errors-> all() as $errors)--}}
{{--                            <li>{{ $errors }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}

                <div class="col-12">
                    <h1>Регистрация</h1>
                </div>

            <div class="col-12 justify-content-center d-flex">

                {{--                                название для route--}}
                <form action="{{ route('savetodb') }}" method="get">


                    <div class="col-12 justify-content-center  inputTextCss">
                        <label class="mb-2" for="login">Введите логин</label>
                        <input  type="text" name="loginreg" placeholder="Придумайте логин" class="form-control">
                    </div>

                    <div class="col-12 inputTextCss">
                        <label class="mb-2" for="password">Введите пароль</label>
                        <input type="text" name="passwordreg" placeholder="придумайте пароль" class="form-control">
                    </div>

                    <button name="addToDB"  class="btn btn-success">Завершить</button>
                </form>

            </div>
        </div>
    </div>
    </container>
@endsection
