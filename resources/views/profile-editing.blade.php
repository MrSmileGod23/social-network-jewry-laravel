@extends('layouts.app')

@section('title')
    Редактирование профиля  {{$data->first_name}}
@endsection

@section('content')

<div class="container">
    <form class="form-control mt-5" action="/profile/{{ $data->id }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">Имя</label>
            <input type="text" name="first_name" value={{$data->first_name}} class="form-control" id="first_name" aria-describedby="nameHelp" placeholder="Введите имя">
        </div>
        <div class="form-group mt-3">
            <label for="last_name">Фамилия</label>
            <input type="text" name="last_name" value={{$data->last_name}} class="form-control" id="last_name" placeholder="Введите фамилию">
        </div>
        <div class="form-group mt-3">
            <select name="city" class="form-control"  >
                @foreach($city as $el)
                    @if( $el->id==$data->city_id )
                        <option value={{$el->id}} selected>{{$el->name}}</option>
                        @endif
                        <option value={{$el->id}}>{{$el->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="birth_date">Дата рождения</label>
            <input type="date" name="birth_date" value={{$data->birth_date}} class="form-control" id="birth_date" >
        </div>
        <div class="form-group mt-3">
            <label for="info">О себе</label>
            <textarea  class="form-control" id="last_name"  name="info" >{{$data->info}}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="telephone">Телефон</label>
            <input type="telephone" name="telephone" min="11" max="11" value={{$data->telephone}} class="form-control" id="telephone" >
        </div>
        <button type="submit" class="btn btn-front mt-3">Submit</button>
    </form>
</div>
@endsection
