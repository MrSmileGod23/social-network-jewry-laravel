@extends('layouts.app')

@section('title')
   {{$data->first_name}}
@endsection

@section('content')

<div class="container">
    <div class="card row mb-3 mt-3 flex-row shadowmy border-0" style="max-width: 100%;border-radius:20px;min-height:210px" >

        <div class="col-12 col-xl-3 d-flex p-0">
            <div class="col-12">
                <img src="../img/users/{{$data->img}}" alt="Картинка аватара" class="  hike_img"/>
            </div>
        </div>
        <div class="col-12 col-xl-3 p-2 d-flex fs-4 flex-column justify-content-between align-items-center">
            <div class="col-12 mb-3 ">
                <div class="fs-3 fw-bold">
                    {{ $data->first_name }}  {{ $data->last_name }}
                </div>

                @isset($data->cities->name)
                    <div>
                        {{ $data->cities->name }}
                    </div>
                @endisset
            </div>
            <div class="col-12 mb-3 ">
                @isset($data->gender)
                <div>
                    {{ $data->gender }}
                </div>
                @endisset
                @isset($data->birth_date)
                <div>
                    {{ $data->birth_date }}
                </div>
                    @endisset
            </div>
            <div class="col-12 mb-3 ">
                @isset( $data->email )
                <div>
                    {{ $data->email }}
                </div>
                @endisset
                    @isset($data->telephone)
                <div>
                    {{ $data->telephone }}
                </div>
                @endisset
            </div>
            @if($data->is($current_user))
                <div class="col-12 mb-3 ">
                    <div>
                        <a href="{{route('editing',[$data->id])}}" class="btn btn-front ">Изменить</a>
                        <a class="btn btn-front " role="button" href="{{ route('logout') }}"   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> Выйти</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                            @csrf
                        </form>
                    </div>
                </div>
            @endif

        </div>
        <div class="col-12 col-xl-6 p-2 d-flex flex-column  align-items-center">
            @isset( $data->info)
            <div class="col-12 mb-3 fs-5 ">
                {{ $data->info }}
            </div>
            @endisset
        </div>
    </div>

<div class="text-center fs-1 fw-bold">
    Мои походы
</div>
@foreach($hike as $el)
        <div class="card row mb-3 mt-3 flex-row shadowmy border-0" style="max-width: 100%;border-radius:20px;min-height:210px" >
            <div class="col-12 col-xl-4 p-0">
                <div class="col-12 h-100">
                    <img src="../img/hikes/{{ $el->hikefind->img }}" alt="Картинка из похода" class="  hike_img"/>
                </div>
            </div>
            <div class="col-12 p-4 col-xl-3 justify-content-between d-flex flex-column fs-4">
                <div class="col-12  mb-3">
                    {{ $el->hikefind->hike_type->name }}
                </div>
                <div class="col-12  mb-3">
                    Сложность: {{ $el->hikefind->difficulty }} к.с.
                </div>
                <div class="col-12 mb-3">
                    Участников
                </div>
                <div class="col-12 mb-3 flex-row  d-flex flex-wrap  hike_date">
                    <div>
                        C {{ $el->hikefind->startDate }} &nbsp;
                    </div>
                    <div>
                        по &nbsp;{{ $el->hikefind->endDate }}
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-5 p-4 d-flex flex-column  align-items-center">
                <div class="col-12 mb-3 fs-1 fw-bold ">
                    {{ Str::limit($el->hikefind->name, 44) }}
                </div>
                <div class="col-12 mb-3">
                    {{ Str::limit($el->hikefind->info, 500) }}
                </div>
                <div class="col-12 mb-3">
                    <a href="{{route('getHike',[$el->hikefind->id])}}" class="btn btn-front-two w-100 fs-1">Подробней</a>
                </div>
            </div>
        </div>

    @endforeach
    <div class="text-center justify-content-center w-100 d-flex"> {{$hike->links('vendor.pagination.bootstrap-4')}}</div>
</div>

@endsection
