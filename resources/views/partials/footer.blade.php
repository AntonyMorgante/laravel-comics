<footer>
    <div>
        <section class="fst-foot-section">
            <div class="container">
                <div class="space-around">
                    @foreach ($datas['feats'] as $feats)
                        <a href="#" class="ft-flex-start">
                            <img src="{{asset($feats['image'])}}">
                            <span>{{$feats['name']}}</span>
                        </a>
                    @endforeach
                </div>            
            </div>
        </section>
        <section class="snd-foot-section">
        <div class ="container">
            <div class="flex-column">
            <div class="column-wrap">
                @foreach ($datas['footerlists'] as $footerlists)
                    <ul> 
                        @foreach ($footerlists as $list)
                        <li>
                            {{$list['name']}}
                        </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>                
            </div>
        </div>

        </section>
        <section class="trd-foot-section">
        <div class="space-between container">
            <a href="#" class="footer-blue-button">Sign-up Now!</a>
            <div>
            <div class="space-between">
                <span>Follow us</span>
                <div> 
                    <ul class="socials">
                        @foreach ($datas["socials"] as $index=>$social)
                            <li>
                              <a href="{{$social['url']}}">
                                  <img src="{{asset($social['image'])}}" alt="">
                              </a>
                            </li>    
                        @endforeach            
                    </ul>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>
</footer>