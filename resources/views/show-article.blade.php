@extends('layouts.app')

@section('title')
    {{$article->name}}
@endsection

@section('content')

    <div class="container mt-3">
        <div class="col-12 fw-bold fs-1 text-center">
            {{$article->name}}
        </div>
        <div class="col-12  mb-3 fw-bold fs-2 text-center">
            Тема : {{ $article->article_theme->name }}
        </div>
        <div class="col-12 mb-3 fs-4 ">
            {{$article->info}}
        </div>
    </div>

@endsection
