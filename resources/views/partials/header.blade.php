<header>
    <div class="container">
        <div class="space-between">
            <img src="{{asset('/dc-logo.png')}}" alt="">
            <nav>
                <ul>
                    @foreach ($datas["navbar"] as $index=>$link)
                        <li>
                            <a href="{{$link['url']}}">{{$link['name']}}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>