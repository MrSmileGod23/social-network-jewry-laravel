@extends('layouts.app')

@section('title')
    Создание статьи
@endsection

@section('content')

    <div class="container">
        <form class="form-control mt-5" action="{{route('articles.create')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название статьи</label>
                <input type="text" name="name"  class="form-control" id="name" aria-describedby="nameHelp">
            </div>
            <div class="form-group mt-3">
                <label for="info">Текст статьи</label>
                <textarea  class="form-control" id="info"  name="info" ></textarea>
            </div>
            <div class="form-group mt-3">
                <select name="theme_id" class="form-control"  >
                    @foreach($themes as $el)
                            <option value={{$el->id}} >{{$el->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-front mt-3">Создать</button>
        </form>
    </div>
@endsection
