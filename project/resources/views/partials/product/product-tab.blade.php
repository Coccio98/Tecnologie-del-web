<!-- Product tab -->
<div class="col-md-12">
    <div id="product-tab">
        <!-- product tab nav -->
        <ul class="tab-nav">
            <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
            <li><a data-toggle="tab" href="#tab2">Details</a></li>
            <li><a data-toggle="tab" href="#tab3">Reviews</a></li>
            <li><a data-toggle="tab" href="#tab4">Questions</a></li>
        </ul>
        <!-- /product tab nav -->

        <!-- product tab content -->
        <div class="tab-content">
            <!-- tab1  -->
            <div id="tab1" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-md-12">
                        <p>{{$product->description}}</p>
                    </div>
                </div>
            </div>
            <!-- /tab1  -->

            <!-- tab2  -->
            <div id="tab2" class="tab-pane fade in">
                <div class="row">
                    <div class="col-md-12">
                        <p>{{$product->details}}</p>
                    </div>
                </div>
            </div>
            <!-- /tab2  -->

            <!-- tab3  -->
            <div id="tab3" class="tab-pane fade in">
                <div class="row">
                    <!-- Rating -->
                    <div class="col-md-3">
                        <div id="rating">
                            <div class="rating-avg">
                                <span>{{$product->score}}</span>
                                @component('partials.reusable.stars')
                                    @slot('s')
                                        {{$product->score}}
                                    @endslot
                                @endcomponent
                            </div>
                            <ul class="rating">
                                <li>
                                    @component('partials.reusable.stars')
                                        @slot('s')
                                            5
                                        @endslot
                                    @endcomponent
                                    <div class="rating-progress">
                                        <div style="width: @if(sizeof($reviews)!=0){{$n[4]*100/sizeof($reviews)}}%@endif;"></div>
                                    </div>
                                    <span class="sum">{{$n[4]}}</span>
                                </li>
                                <li>
                                    @component('partials.reusable.stars')
                                        @slot('s')
                                            4
                                        @endslot
                                    @endcomponent
                                    <div class="rating-progress">
                                        <div style="width: @if(sizeof($reviews)!=0){{$n[3]*100/sizeof($reviews)}}%@endif;"></div>
                                    </div>
                                    <span class="sum">{{$n[3]}}</span>
                                </li>
                                <li>
                                    @component('partials.reusable.stars')
                                        @slot('s')
                                            3
                                        @endslot
                                    @endcomponent
                                    <div class="rating-progress">
                                        <div style="width: @if(sizeof($reviews)!=0){{$n[2]*100/sizeof($reviews)}}%@endif;"></div>
                                    </div>
                                    <span class="sum">{{$n[2]}}</span>
                                </li>
                                <li>
                                    @component('partials.reusable.stars')
                                        @slot('s')
                                            2
                                        @endslot
                                    @endcomponent
                                    <div class="rating-progress">
                                        <div style="width: @if(sizeof($reviews)!=0){{$n[1]*100/sizeof($reviews)}}%@endif;"></div>
                                    </div>
                                    <span class="sum">{{$n[1]}}</span>
                                </li>
                                <li>
                                    @component('partials.reusable.stars')
                                        @slot('s')
                                            1
                                        @endslot
                                    @endcomponent
                                    <div class="rating-progress">
                                        <div style="width: @if(sizeof($reviews)!=0){{$n[0]*100/sizeof($reviews)}}%@endif;"></div>
                                    </div>
                                    <span class="sum">{{$n[0]}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Rating -->

                    <!-- Reviews -->
                    <div class="col-md-6">
                        <div id="reviews">
                            <ul class="reviews">
                                @foreach($reviews as $review)
                                    <li>
                                        <div class="review-heading">
                                            <h5 class="name">{{$review->name}}</h5>
                                            <p class="date">{{$review->timestamp}}</p>
                                            @component('partials.reusable.stars')
                                                @slot('s')
                                                    {{$review->rating}}
                                                @endslot
                                            @endcomponent
                                        </div>
                                        <div class="review-body">
                                            <p>{{$review->text}}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <!--TODO paginazione-->
                            <ul class="reviews-pagination">
                                <li class="active">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Review Form -->
                    <div class="col-md-3">
                        <div id="review-form">
                            <form class="review-form">
                                <!--TODO recensione-->
                                <input class="input" type="text" placeholder="Your Name">
                                <input class="input" type="email" placeholder="Your Email">
                                <textarea class="input" placeholder="Your Review"></textarea>
                                <div class="input-rating">
                                    <span>Your Rating: </span>
                                    <div class="stars">
                                        <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                                        <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                                        <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                                        <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                                        <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                                    </div>
                                </div>
                                <button class="primary-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- /Review Form -->
                </div>
            </div>
            <!-- /tab3  -->
            <!-- tab4  -->
            <!--TODO answer-->
            <div id="tab4" class="tab-pane fade in">
                <div class="row">
                    <div class="col-md-11 col-md-push-2">
                        <div id="reviews">
                            <ul class="reviews">
                                @for($i=0; $i<sizeof($questions);$i++)
                                    <li>
                                        <div class="review-heading">
                                            <h5 class="name">{{$questions[$i]->name}}</h5>
                                            <p class="date">{{$questions[$i]->timestamp}}</p>
                                        </div>
                                        <div class="review-body">
                                            <p>{{$questions[$i]->text}}</p>
                                            <br/>
                                            <ul>
                                                @foreach($answers[$i] as $answer)
                                                    <li>
                                                        <div class="review-heading">
                                                            <h5 class="name">{{$answer->name}}</h5>
                                                            <p class="date">{{$answer->timestamp}}</p>
                                                        </div>
                                                        <div class="review-body">
                                                            <p>{{$answer->text}}</p>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /tab4  -->
        </div>
        <!-- /product tab content  -->
    </div>
</div>
<!-- /product tab -->
