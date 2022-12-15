@extends('layouts.app')


@section('content')
    <section class="jumbo">
    </section>


    <section class="products">
        <div id="current" class="btn btn-primary text-white text-uppercase ">current series</div>
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($comic as $item)
                    <div class="col">
                        <a href="#"><img src="{{ asset("$item[thumb]") }}" alt="{{ $item['title'] }}"></a>
                        <p>{{ $item['series'] }}</p>
                    </div>
                @endforeach
            </div>
            <button class="btn btn-primary text-uppercase ">load more</button>
        </div>
    </section>

    <section class="shop">
        <div class="container">
            <nav>
                <ul>
                    @foreach ($shop as $item)
                        <li>
                            <a href="{{ $item['url'] }}">
                                <img src="{{ asset("img/$item[imageName]") }}" alt="{{ $item['text'] }}"
                                    alt="{{ $item['text'] }}">
                                {{ $item['text'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>

    </section>
@endsection
