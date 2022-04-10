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
                        <div class="col-12  col-sm-6  col-xl-3 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Дата начала</label>
                            <input type="date"  class="form-control" id="datePickerId" aria-describedby="emailHelp">
                        </div>
                        <div class="col-12  col-sm-6 col-xl-3 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Дата конца</label>
                            <input type="date" class="form-control" id="datePickerId2">
                        </div>
                        <div class="col-12 col-xl-6 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Город</label>
                            <select  id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                @foreach($city as $el)
                                    <option value={{$el->name}}>{{$el->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Тип похода</label>
                            <select  id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                @foreach($type as $el)
                                    <option value={{$el->name}}>{{$el->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
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
                        <input type="submit" class="btn btn-front" value="Найти">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div  id="block_two">
        <div class="container d-flex justify-content-start flex-column align-self-center ">
            <p>Типы походов</p>
            <ul>
                @foreach($type as $el)
                    <li value={{$el->name}}>{{$el->name}}</li>
                @endforeach
            </ul>
          <a href="#block_one" class="btn btn-front"><input type="submit" class="btn btn-front " value="Искать поход"></a>
        </div>
    </div>
    <div  id="block_three">
        <div class="container d-flex justify-content-start flex-column align-self-center">
            <ul class="list-unstyled">
                <li class="block_three_text">Создавай поход</li>
                <li class="block_three_text">Приглашай людей</li>
                <li class="block_three_text">Делись мнением</li>
                <li class="block_three_text">Путешествуй</li>
            </ul>
            <a href="#block_one" class="btn btn-front block_three_text"><input type="submit" class="btn btn-front " value="Искать поход"></a>
        </div>
    </div>
</div>

@endsection
