@extends("layouts.app");

@section("page-title","Home Page")

@section("content")
<section id="comics">
        <div class="container">
            <div class="blue-banner">Current series</div>
            <div class="flex-start">
                @foreach ($comics as $indice=>$album)
                    <div class="comic">
                        <img src="{{$album['thumb']}}" alt="">
                        <p>{{$album["series"]}}</p>
                    </div>
                @endforeach
            </div>
            <div>
                <div class="blue-button">Load more</div>
            </div>
        </div>
    </section>
@endsection