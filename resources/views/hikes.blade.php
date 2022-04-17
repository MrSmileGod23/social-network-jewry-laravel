@extends('layouts.app')

@section('title')
    Все походы
@endsection

@section('content')
    <div class="container d-flex justify-content-center flex-column text-center mt-5 bg-white shadow-lg rounded-3 py-2">
        <div>
            <form>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label text-black fs-1">Фильтр поиска</label>
                        <div class="btn-group  d-flex justify-content-around w-100 flex-wrap">

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <div class="container d-flex justify-content-center flex-column">
        <div class="row ">
            @foreach($hike as $el)
                <div class="col p-0 d-flex justify-content-around flex-column">
                    <div class="col justify-content-center  d-flex">
                        <div class="card row mb-3 mt-5 flex-row shadowmy border-0" style="max-width: 100%;border-radius:20px;min-height:210px" >
                            <div class="col-12 col-xl-4 p-0">
                                <div class="col-12 h-100">
                                    <img src="../img/hikes/{{ $el->img }}" alt="Картинка из похода" class="  hike_img"/>
                                </div>
                            </div>
                            <div class="col-12 p-4 col-xl-3 justify-content-between d-flex flex-column fs-4">
                                <div class="col-12  mb-3">
                                    {{ $el->hike_type->name }}
                                </div>
                                <div class="col-12  mb-3">
                                   Сложность: {{ $el->difficulty }} к.с.
                                </div>
                                <div class="col-12 mb-3">
                                    Участников
                                </div>
                                <div class="col-12 mb-3 flex-row  d-flex flex-wrap  hike_date">
                                    <div>
                                       C {{ $el->startDate }} &nbsp;
                                    </div>
                                    <div>
                                         по &nbsp;{{ $el->endDate }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-5 p-4 d-flex flex-column  align-items-center">
                                <div class="col-12 mb-3 fs-1 fw-bold ">
                                    {{ Str::limit($el->name, 44) }}
                                </div>
                                <div class="col-12 mb-3">
                                    {{ Str::limit($el->info, 500) }}
                                </div>
                                <div class="col-12 mb-3">
                                    <a href="{{route('getHike',[$el->id])}}" class="btn btn-front-two w-100 fs-1">Подробней</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
        <div class="text-center justify-content-center w-100 d-flex"> {{$hike->links('vendor.pagination.bootstrap-4')}}</div>
    </div>
@endsection
