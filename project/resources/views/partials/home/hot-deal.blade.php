<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section d-block" style="background-image: url({{asset($showcase->banner)}})">
    <input id="hot-deal-date-{{$key}}" type="hidden" value="{{$showcase->expire}}">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3 id="days-{{$key}}"></h3>
                                <span>Days</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3 id="hours-{{$key}}"></h3>
                                <span>Hours</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3 id="minutes-{{$key}}"></h3>
                                <span>Mins</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3 id="seconds-{{$key}}"></h3>
                                <span>Secs</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">{{$showcase->title}}</h2>
                    <p>{{$showcase->subtitle}}</p>
                    <a class="primary-btn cta-btn" href="{{route('hotDeal-shop',['id' => $showcase->id])}}">Shop now</a>

                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->
