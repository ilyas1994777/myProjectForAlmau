@extends('layouts.main')


@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors-> all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(Session::has('message'))
        @if(Session::get('message'))
            <div class="alert alert-success" role="alert">
                Данные отправлены!
            </div>
        @endif
    @endif


    <div class="container">
        <div class="row">
           <div class="col-12 text-center mt-5">
{{--               @foreach($response[0] as $data => $login)--}}
{{--                <h3>{{ $login  }}</h3>--}}
{{--               @endforeach--}}
                <h3>Привет, {{ $response[0]->role. " " .$response[0]->login }}</h3>

               <div class="col-12">
{{--                    <h2>{{ json_encode($response['files']) }}</h2>--}}

                   @for ($i = 0; $i < count($response['app']); $i++)
{{--                        <h4>{{ json_encode($response['app'][$i]) }}</h4>--}}


                       <div class="col-12 justify-content-center brdd w-auto mt-5">
                           <div class="row">
{{--                              @foreach($response['app'][$i] as $val)--}}
{{--                                   <div class="col-12">--}}
{{--                                       <p>{{ $val }}</p>--}}
{{--                                   </div>--}}
{{--                              @endforeach--}}
                               <div class="col-12">

                                   <p> ID пользователя : {{ $response['app'][$i]->user_id }}</p>
                                   <p> Тема сообщения : {{ $response['app'][$i]->theme }}</p>
                                   <p> Сообщение от пользователя : {{ $response['app'][$i]->message }}</p>
                                   <p> Дата отправки : {{ $response['app'][$i]->data_time }}</p>
                                   <p> номер сообщения : {{ $response['app'][$i]->track_number }}</p>
{{--                                   <p> Сообщение для клиента от (Админа) : {{ $response['app'][$i]->send_request }}</p>--}}
                                   @if($response['app'][$i]->path_file == "")
                                        <p>пусто</p>
                                   @else
{{--                                       <buttom type="button" onclick="qwe()"  >скачать файл</buttom>--}}
                                    <p>Файл</p>

                                   <form action="{{ route("downloadFile") }}">
{{--                                       <h4>{{ json_encode( $response) }}</h4>--}}

{{--                                       <form action="{{ $response['files'][$i] }}">--}}

                                       <button>File</button>
{{--                                     <a href="{{ \Illuminate\Support\Facades\Storage::download("\\"."public\\storage\\filename1228.txt") }}">sdfsdf</a>--}}
{{--                                       href="{{ $response['public_path'].$response['app'][$i]->path_file }}"--}}
{{--                                       <p></p>--}}
                                   </form>

                                   @endif

                               </div>
                           </div>
                       </div>
               <div class="col-12">
                       <form  action="{{ route("send_request")}}" method="get">
                         <input name="user_id" value="{{$response['app'][$i]->user_id}}" style="display: none">
                         <input name="track_number" value="{{$response['app'][$i]->track_number}}" style="display:none">
                          <textarea name="answeronmess" placeholder="ответить" class="inpsize mt-3"></textarea>
                          <button class="bbtn">Primary</button>
                       </form>
                   </div>
               @endfor

               </div>
          </div>
        </div>
    </div>



@endsection
