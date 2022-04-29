@extends('layouts.app')

@section('title')
    Создание похода
@endsection

@section('content')

    <div class="container">
        <form class="form-control mt-5" action="{{route('hikes.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="img">Фотография похода</label>
                <input type="file" name="img" value="" id="img" class="form-control" >
            </div>
            <div class="form-group">
                <label for="name">Название похода</label>
                <input type="text" name="name"  class="form-control" id="name" aria-describedby="nameHelp" required>
            </div>
            <div class="form-group mt-3">
                <label for="info">Информация о походе</label>
                <textarea  class="form-control" id="info"  name="info" required ></textarea>
            </div>
            <div class="form-group mt-3">
                <select name="city_id" class="form-control" required >
                    @foreach($city as $el)
                        <option value={{$el->id}} >{{$el->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-3">
                <select name="type_id" class="form-control" required  >
                    @foreach($type as $el)
                        <option value={{$el->id}} >{{$el->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-3">
                <select name="difficulty" class="form-control" required  >
                    <option value="1">1 к.с.</option>
                    <option value="2">2 к.с.</option>
                    <option value="3">3 к.с.</option>
                    <option value="4">4 к.с.</option>
                    <option value="5">5 к.с.</option>
                    <option value="6">6 к.с.</option>
                </select>
            </div>
            <div class="form-group mt-3">
                <label for="startDate">Дата старта</label>
                <input type="date"  name="startDate"  class="form-control" id="datePickerId" required>
            </div>
            <div class="form-group mt-3">
                <label for="endDate">Дата окончания</label>
                <input type="date" name="endDate" class="form-control" id="datePickerId2" required>
            </div>
            <div class="form-group mt-3">
                <label for="food">Еда</label>
                <textarea  class="form-control" id="food"  name="food" ></textarea>
            </div>
            <div class="form-group mt-3">
                <label for="equipment">Снаряжение</label>
                <textarea  class="form-control" id="equipment"  name="equipment" ></textarea>
            </div>
            <div class="form-group mt-3">
                <label for="route">Нить маршрута</label>
                <textarea  class="form-control" id="route"  name="route" required ></textarea>
            </div>
            <div class="form-group mt-3">
                <label for="mileage">Километраж</label>
                <input type="number"  name="mileage" min="0" class="form-control" id="mileage">
            </div>
            <button type="submit" class="btn btn-front mt-3">Создать</button>
        </form>
    </div>
@endsection
