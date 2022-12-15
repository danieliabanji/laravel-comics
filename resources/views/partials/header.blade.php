<header class="container">
    <a href="{{ route('home') }}">
        <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo">
    </a>
    <nav>
        <ul class="">
            @foreach ($link as $links)
                <li>
                    <a href="{{ $links['url'] }}" class="">{{ $links['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
