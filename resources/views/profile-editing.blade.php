@extends('layouts.app')

@section('title')
    Редактирование профиля  {{$user->first_name}}
@endsection

@section('content')

<div class="container">
    <form class="form-control mt-5" action="{{route('updateUser',[$user->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="img">Фотография профиля</label>
            <input type="file" name="img" value="{{ $user->img }}" id="img" class="form-control" >
        </div>
        <div class="form-group">
            <label for="first_name">Имя</label>
            <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control @error('first_name') is-invalid @enderror" id="first_name" aria-describedby="nameHelp" placeholder="Введите имя" >
            @error('first_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="last_name">Фамилия</label>
            <input type="text" name="last_name"  value="{{$user->last_name}}"  class="form-control @error('last_name') is-invalid @enderror" id="last_name" placeholder="Введите фамилию">
            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group mt-3">
            <select name="city" class="form-control"  >
                @foreach($city as $el)
                    @if( $el->id==$user->city_id )
                        <option value={{$el->id}} selected>{{$el->name}}</option>
                        @endif
                        <option value={{$el->id}}>{{$el->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="birth_date">Дата рождения</label>
            <input type="date" name="birth_date" value="{{$user->birth_date}}" class="form-control" id="birth_date" >
        </div>
        <div class="form-group mt-3">
            <label for="info">О себе</label>
            <textarea  class="form-control" id="last_name"  name="info" >{{$user->info}}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="telephone">Телефон</label>
            <input type="telephone" name="telephone" min="11" max="11" value="{{$user->telephone}}" class="form-control @error('telephone') is-invalid @enderror" id="telephone" >
            @error('telephone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-front mt-3">Обновить</button>
    </form>
</div>
@endsection
