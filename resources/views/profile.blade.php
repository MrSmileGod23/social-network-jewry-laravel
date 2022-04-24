@extends('layouts.app')

@section('title')
   {{$user->first_name}}
@endsection

@section('content')

<div class="container " >
    <div class="card row mb-3 mt-3  flex-row shadowmy border-0"  >

        <div class="col-12 col-xl-3 d-flex p-0">
            <div class="col-12">
                <img src="../storage/img/users/avatars/{{$user->img}}" alt="Картинка аватара" class="profile_img"/>
            </div>
        </div>
        <div class="col-12 col-xl-3 p-2 d-flex fs-4 flex-column justify-content-between align-items-center">
            <div class="col-12 mb-3 ">
                <div class="fs-3 fw-bold">
                    {{ $user->first_name }}  {{ $user->last_name }}
                </div>

                @isset($user->cities->name)
                    <div>
                        {{ $user->cities->name }}
                    </div>
                @endisset
            </div>
            <div class="col-12 mb-3 ">
                @isset($user->gender)
                <div>
                    {{ $user->gender }}
                </div>
                @endisset
                @isset($user->birth_date)
                <div>
                    {{ $user->birth_date }}
                </div>
                    @endisset
            </div>
            <div class="col-12 mb-3 ">
                @isset( $user->email )
                <div>
                    {{ $user->email }}
                </div>
                @endisset
                    @isset($user->telephone)
                <div>
                    {{ $user->telephone }}
                </div>
                @endisset
            </div>
            @if($user->is($current_user))
                <div class="col-12 mb-3 ">
                    <div>

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
            @isset( $user->info)
            <div class="col-12 mb-3 fs-5 ">
                {{ $user->info }}
            </div>
            @endisset
        </div>
    </div>

    <div class="row m-0 mb-3 mt-5 shadowmy border-0 d-flex justify-content-between" style="max-width: 100%;border-radius:20px;" >
        @if($user->is($current_user))
            <div class="col-12 col-xl-4 p-0 mb-2" >
                    <a href="{{route('editing',$user)}}" class="btn btn-front-two w-100 ">Изменить профиль</a>
            </div>
            <div class="col-12 col-xl-3 p-0 mb-2">
                <a href="{{route('createArticle')}}" class="btn btn-front-two w-100">Создать статью</a>
            </div>
            <div class="col-12 col-xl-3 p-0 mb-2">
                <a href="{{route('createHike')}}" class="btn btn-front-two w-100 ">Создать поход</a>
            </div>


        @endif
    </div>
    @if($user->is($current_user))
<div class="text-center fs-1 fw-bold">
    Мои походы
</div>
@foreach($hike as $el)
        <div class="card card-show-hike  mb-3 mt-5  shadowmy border-0 h-auto" style="max-width: 100%;border-radius:20px;" >
            <div class="col-12 col-xl-4 p-0">
                <div class="col-12 h-100">
                    <img src="../storage/img/hikes/{{$el->hike->img}}" alt="Картинка из похода" class="  hike_img"/>
                </div>
            </div>
            <div class="col-12 p-2 col-xl-3 justify-content-between d-flex flex-column fs-4">
                <div class="col-12  mb-3">
                    {{ $el->hike->hike_type->name }}
                </div>
                <div class="col-12  mb-3">
                    Сложность: {{ $el->hike->difficulty }} к.с.
                </div>
                <div class="col-12 mb-3">
                    Участников
                </div>
                <div class="col-12 mb-1 flex-row  d-flex flex-wrap  hike_date">
                    <div>
                        C {{ $el->hike->startDate }} &nbsp;
                    </div>
                    <div>
                        по &nbsp;{{ $el->hike->endDate }}
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-5 p-2 d-flex flex-column  align-items-center">
                <div class="col-12 mb-3 fs-1 fw-bold ">
                    {{ Str::limit($el->hike->name, 44) }}
                </div>
                <div class="col-12 mb-3">
                    {{ Str::limit($el->hike->info, 200) }}
                </div>
                <div class="col-12 mb-3">
                    <a href="{{route('getHike',[$el->hike->id])}}" class="btn btn-front-two w-100 fs-1">Подробней</a>
                </div>
            </div>
        </div>

    @endforeach
    <div class="text-center justify-content-center w-100 d-flex"> {{$hike->links('vendor.pagination.bootstrap-4')}}</div>
    @endif
</div>

@endsection
