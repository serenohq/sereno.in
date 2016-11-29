@extends('base')

@section('body')
    <div class="container my-1">
        <div class="embed-responsive mb-1" style="padding-bottom: 59%;">
            <iframe class="py-1 youtube"
                    src="https://www.youtube.com/embed/xHxEPQNM4R8?rel=0&showinfo=0&theme=light" frameborder="0"
                    allowfullscreen></iframe>
        </div>

        <div class="row">
            <div class="col-xs-12 col-lg-7">
                @yield('content')
            </div>
            <div class="col-xs-12 col-lg-4 offset-lg-1">
                @include('sidebar')
            </div>
        </div>
    </div>
@stop
