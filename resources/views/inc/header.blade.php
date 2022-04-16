@section('header')
    <div id="header" class="">
        <nav class="navbar navbar-expand-xxl navbar-light  pt-1 pb-1 shadowmy">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto align-items-start  align-items-xxl-center">
                        <a class="navbar-brand fs-4 text-white" href="{{ route('allData') }}">
                            <img src="/img/logo.png" alt="" width="50">
                           Jewry
                        </a>
                        <a class="btn text-white fs-4" href="{{ route('allHikes') }}" role="button">Походы</a>
                        <a class="btn text-white fs-4" href="{{ route('getAllArticle') }}" role="button">База знаний</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto align-items-start  align-items-xxl-center d-inline-flex flex-column-reverse d-xxl-inline-flex flex-xxl-row ">

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="btn-auth btn  fs-4  " href="{{ route('login') }}" role="button">Войти</a>
                                </li>
                            @endif

                            {{--                        @if (Route::has('register'))--}}
                            {{--                            <li class="nav-item">--}}
                            {{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--                            </li>--}}
                            {{--                        @endif--}}
                        @else

                            <li class="nav-item">
                                <a class="btn-auth btn fs-4" href="{{ route('user',Auth::user()->id)}}" role="button">Профиль</a>
                    </ul>
                </div>

                @endguest

            </div>
        </nav>
    </div>


