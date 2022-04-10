@extends('layouts.app')
@section('title')
    База знаний
@endsection

@section('content')

        <div class="container d-flex justify-content-center flex-column text-center mt-5 bg-white shadow-lg rounded-3 py-2">
            <div>
                <form>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-4 mb-3">
                            <label for="exampleInputPassword1" class="form-label text-black fs-1">Фильтр поиска</label>
                            <ul class="ms-3">
                                @foreach($themes as $el)
                                    <li>
                                        <a href="{{route('getArticleTheme',[$el->id])}}" class="text-decoration-none btn-link text-start">{{$el->name}}</a>
                                    </li>

                                @endforeach
                            </ul>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="container d-flex justify-content-center flex-column">
            <div class="row p-3 ">
                @foreach($article as $el)
                    <div class="col d-flex justify-content-around flex-column">
                        <div class="col">
                            <div class="card row mb-3 mt-5 flex-row shadowmy border-0" style="max-width: 100%;border-radius:20px;min-height:210px" >
                                <div class="col-8 p-4">
                                    <div class="col-12  mb-3">
                                    {{$el->name}}
                                    </div>
                                    <div class="col-12  mb-3">
                                        Тема
                                    </div>
                                    <div class="col-12 mb-3">
                                    {{ Str::limit($el->info, 500) }}
                                    </div>
                                </div>
                                <div class="col-4 p-4 d-flex btn btn-front align-items-center">
                                    <a href="{{route('getArticle',[$el->id])}}" class="btn btn-front w-100 fs-1">Подробней</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
            <div class="text-center justify-content-center w-100 d-flex"> {{$article->links('vendor.pagination.bootstrap-4')}}</div>
        </div>
@endsection
