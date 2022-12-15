<footer>
    <div class="logo">
        <div class="cols container">
            <div class="footer-links">
                <h4>DC comics</h4>
                <nav>
                    <ul>
                        @foreach ($dcComic as $item)
                            <li>
                                <a href="{{ $item['url'] }}" class="">{{ $item['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="footer-links">
                <h4>Shop</h4>
                <nav>
                    <ul>
                        @foreach ($dcShop as $item)
                            <li>
                                <a href="{{ $item['url'] }}" class="">{{ $item['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="footer-links">
                <h4>DC</h4>
                <nav>
                    <ul>
                        @foreach ($dc as $item)
                            <li>
                                <a href="{{ $item['url'] }}" class="">{{ $item['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="footer-links">
                <h4>Sites</h4>
                <nav>
                    <ul>
                        @foreach ($site as $item)
                            <li>
                                <a href="{{ $item['url'] }}" class="">{{ $item['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>

    </div>
    <section class="bg-social">
        <div class="container social">
            <button type="button">sign-up now!</button>
            <div>
                <ul>
                    <a href="">Follow us</a>
                    @foreach ($social as $item)
                        <li>
                            <a href="{{ $item['url'] }}" :class="">
                                <img src="{{ asset("img/$item[imageName]") }}" alt="{{ $item['text'] }}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </section>
</footer>
