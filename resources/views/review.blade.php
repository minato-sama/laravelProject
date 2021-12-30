@extends('layout')

@section('title')Отзывы
@endsection

@section('main_content')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-black">
<h1>Оставьте ваш отзыв!</h1>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

<form method="post" action="/review/check">
    @csrf
    <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
    <input type="text" name="heading" id="heading" placeholder="Заголовок для отзыва" class="form-control"><br>
    <textarea name="message" id="message" class="form-control" placeholder="Форма для ввода отзыва" class="form=control"></textarea><br>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>

  <h2>Все отзывы</h2>
  @foreach($data as $element)
    <div class="alert alert-warning">
      <h3>{{ $element->heading }}
      <b>{{ $element->email }}</b>
      <p>{{ $element->message }}</p>
  @endforeach
</div>
@endsection
