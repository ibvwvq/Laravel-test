@extends('layout')

@section('title')
    Отзывы
@endsection

@section('content')
    <form class="" method="post" action="/review/check">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf
        <input type="email" name="email"  id="email" placeholder="Введите эл.почту"
             class="form-control"><br>
        <input type="text" name="subject"  id="subject" placeholder="Введите тему"
               class="form-control"><br>
        <textarea name="message" id="message" placeholder="Введите сообщение"
        class="form-control"></textarea>
        <button class="btn btn-success m-2" type="submit">Отправить</button>

    </form>

    @foreach($reviews as $el)
        <div class="alert alert-light">
            {{$el->subject}}
        </div>
    @endforeach

@endsection
