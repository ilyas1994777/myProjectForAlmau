@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="row">

            @if(Session::has('message'))
                @if(Session::get('message') == "Yes")
                    <div class="alert alert-success" role="alert">
                        Ваш запрос отправлен!
                    </div>
                 @elseif((Session::get('message') == "No"))
                    <div class="alert alert-danger" role="alert">
                        Больше одно раза в день нельзя отправлять!
                    </div>

                @endif
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

            <div class="col-12 text-center mt-5 mb-5">
                <h3>Добро пожаловать, Клиент</h3>
            </div>

                <p>
                    <a class="btn btn-primary d-block" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Отправить новую заявку
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <div class="col-12 ms-2 text-center">
                            <h3>Обратная связь</h3>

                            <form action="{{ route("sendMsg") }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input name="user_id" value="{{ $response[0]->user_id }}" style="display: none">

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Тема сообщения</label>
                                    <input type="text" name="submit"  class="form-control" id="exampleFormControlInput1" placeholder="тема сообщения">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Ваш текст</label>
                                    <textarea class="form-control" name="description"  id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button  class="btn-success mt-3">Отправить</button>

                                    <input type="file" name="userfile">




                            </form>
                        </div>
                    </div>
                </div>



                        <div class="col-12 text-center mt-3">
                            <h3>Мои запросы</h3>

                        </div>
                <div class="col-12  justify-content-center w-100 d-flex">



                    @for ($i = 0; $i < count($response['app']); $i++)
{{--                        <h4>{{ json_encode($response['app'][$i]) }}</h4>--}}


                                <div class="col-12 brdd22 mt-2">

                                    {{--                                        @foreach($response['app'][$i] as $val)--}}

{{--                                                <p> sad {{ $val }}</p>--}}
                                    <p> ID пользователя : {{ $response['app'][$i]->user_id }}</p>
                                    <p> Ваше сообщение : {{ $response['app'][$i]->message }}</p>
                                    <p> Тема сообщения : {{ $response['app'][$i]->theme }}</p>
                                    <p> Ответ от менеджера : <br> {{  $response['app'][$i]->send_request }}</p>
                                    <p> Дата : {{ $response['app'][$i]->data_time }}</p>



                                    {{--                                        @endforeach--}}
                                </div>
{{--                            </div>--}}
{{--                        </div>--}}
                    @endfor
                </div>
            </div>

        </div>
    </div>
{{--    @foreach($response as $bbb)--}}
{{--    <h1>Salam brat {{ $bbb->login }}</h1>--}}
{{--    @endforeach--}}
@endsection
