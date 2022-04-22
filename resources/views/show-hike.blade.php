@extends('layouts.app')

@section('title')
{{$hike->name}}
@endsection

@section('content')
    <div class="container">
        <div class="card flex-xl-row flex-column   mb-3 mt-5  shadowmy border-0 h-auto" style="max-width: 100%;border-radius:20px;" >
            <div class="col-12 col-xl-6 p-0">
                <div class="col-12 h-50">
                    <img src="../../storage/img/hikes/{{$hike->img}}" alt="Картинка из похода" class="hike_img" style="min-height: 530px"/>
                </div>
                <div class="p-4 fw-bold fs-3">
                    <div class="col-12  mb-3">
                        @if($ldate>$hike->endDate)
                            Статус: Закончено
                        @endif
                        @if($ldate<$hike->endDate)
                            Статус: Запланирован
                        @endif
                    </div>
                    <div class="col-12  mb-3">
                        Тип похода: {{ $hike->hike_type->name }}
                    </div>
                    <div class="col-12  mb-3">
                        Город: {{ $hike->city->name }}
                    </div>
                    <div class="col-12  mb-3">
                        Сложность: {{ $hike->difficulty }} к.с.
                    </div>
                    <div class="col-12 mb-3">
                        Километраж: {{ $hike->mileage }} км
                    </div>
                    <div class="col-12 mb-3 flex-row  d-flex flex-wrap  hike_date">
                        Дата: &nbsp;
                        <div>
                            C {{ $hike->startDate }} &nbsp;
                        </div>
                        <div>
                            по &nbsp;{{ $hike->endDate }}
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <a href="{{route('getHike',[$hike->id])}}" class="btn btn-front-two w-100 fs-1">Присоединиться</a>
                           @else
                                Для участия нужно авторизироваться
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-12 col-xl-6 p-2 d-flex flex-column  align-items-center ">
                <div class="col-12 mb-3 fs-1 fw-bold text-center ">
                    {{ $hike->name }}
                </div>
                <div class="col-12 mb-3 fs-5">
                    {{$hike->info}}
                </div>
                <div class="col-12 mb-3">
                    <div class="text-center fw-bold fs-1 mb-3">
                        Маршрут
                    </div>
                    <div class="fs-5">
                        {{$hike->route }}
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center fs-1 fw-bold">
            Участники
        </div>
        @foreach($users as $el)
        <div class="card flex-xl-row flex-column mb-3 mt-3 flex-row shadowmy border-0 " style="max-width: 100%;border-radius:20px;min-height:210px" >

            <div class="col-12 col-xl-3 d-flex p-0">
                <div class="col-12">
                    <img src="../../storage/img/users/avatars/{{$el->User->img}}" alt="Картинка аватара" class="profile_hike_img"/>
                </div>
            </div>
                <div class="col-12 col-xl-3 p-2 d-flex flex-column justify-content-center align-items-center">
                    <div class="col-12 mb-3 fs-1 fw-bold text-center ">
                       <a href="{{ route('user',$el->User->id)}}" class="text-decoration-none text-black"> {{ $el->User->first_name }}</a>
                    </div>
                    <div class="col-12 mb-3 fs-1 fw-bold text-center ">
                        <a href="{{ route('user',$el->User->id)}}" class="text-decoration-none text-black"> {{ $el->User->last_name }}</a>
                    </div>
                </div>
            <div class="col-12 col-xl-6 p-2 d-flex flex-column justify-content-center  align-items-center">
                <div class="col-12 mb-3 fs-1 fw-bold  text-center ">
                   Роль
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
