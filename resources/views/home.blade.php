@extends('layouts.app')

@section('title')
Главная
@endsection


@section('content')
<div>
    <div  id="block_one">
        <div class="container d-flex justify-content-center flex-column text-center">
            <div>
                <h1>Найти поход</h1>
            </div>
            <div>
                <form>
                    <div class="row">
                        <div class="col-3 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Дата начала</label>
                            <input type="date"  class="form-control" id="datePickerId" aria-describedby="emailHelp">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Дата конца</label>
                            <input type="date" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Город</label>
                            <select  id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                @foreach($city as $el)
                                    <option value={{$el->name}}>{{$el->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Тип похода</label>
                            <select  id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                @foreach($type as $el)
                                    <option value={{$el->name}}>{{$el->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Сложность</label>
                            <select  id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                <option value="1 к.с.">1 к.с.</option>
                                <option value="2 к.с.">2 к.с.</option>
                                <option value="3 к.с.">3 к.с.</option>
                                <option value="4 к.с.">4 к.с.</option>
                                <option value="5 к.с.">5 к.с.</option>
                                <option value="6 к.с.">6 к.с.</option>
                            </select>
                        </div>
                    </div>


                    <div>
                        <input type="submit" class="btn btn-front fs-2 w-25" value="Найти">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div  id="block_two">
        <div class="container">

        </div>
    </div>
    <div  id="block_three">
        <div class="container">

        </div>
    </div>
</div>

@endsection
