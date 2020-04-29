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
                                        <div style="width: @if($totRating!=0){{$n[4]*100/$totRating}}%@endif;"></div>
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
                                        <div style="width: @if($totRating!=0){{$n[3]*100/$totRating}}%@endif;"></div>
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
                                        <div style="width: @if($totRating!=0){{$n[2]*100/$totRating}}%@endif;"></div>
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
                                        <div style="width: @if($totRating!=0){{$n[1]*100/$totRating}}%@endif;"></div>
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
                                        <div style="width: @if($totRating!=0){{$n[0]*100/$totRating}}%@endif;"></div>
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
                            <section class="review-section">
                                @include('partials.product.review')
                            </section>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Review Form -->
                    <div class="col-md-3">
                        <div id="review-form">
                            @if(!empty(Auth::user()))
                                <form class="review-form" method="POST" action="{{ route('addReview')}}">
                                    @csrf
                                    <input name="productId" type="hidden" value="{{$product->id}}">
                                    <textarea class="input @error('review') is-invalid @enderror" placeholder="Your Review" id="review" name="review" required></textarea>
                                    @error('review')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="input-rating">
                                        <span>Your Rating: </span>
                                        <div class="stars">
                                            <input id="star5" name="rating" value="5" type="radio" required class="@error('rating') is-invalid @enderror"><label for="star5"></label>
                                            <input id="star4" name="rating" value="4" type="radio" required class="@error('rating') is-invalid @enderror"><label for="star4"></label>
                                            <input id="star3" name="rating" value="3" type="radio" required class="@error('rating') is-invalid @enderror"><label for="star3"></label>
                                            <input id="star2" name="rating" value="2" type="radio" required class="@error('rating') is-invalid @enderror"><label for="star2"></label>
                                            <input id="star1" name="rating" value="1" type="radio" required class="@error('rating') is-invalid @enderror"><label for="star1"></label>
                                        </div>
                                        @error('rating')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button class="primary-btn">Submit</button>
                                </form>
                            @endif
                        </div>
                    </div>
                    <!-- /Review Form -->
                </div>
            </div>
            <!-- /tab3  -->
            <!-- tab4  -->
            <div id="tab4" class="tab-pane fade in">
                <div class="row">
                    <div class="col-md-8 col-md-push-1">
                        <div id="reviews">
                            <section class="question-section">
                                @include('partials.product.question')
                            </section>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="question-form">
                            @if(!empty(Auth::user()))
                                <form class="question-form" method="POST" action="{{ route('addQuestion')}}">
                                    @csrf
                                    <input name="productId" type="hidden" value="{{$product->id}}">
                                    <textarea class="input @error('question') is-invalid @enderror" placeholder="Your Question" id="question" name="question" required></textarea>
                                    @error('question')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <button class="primary-btn">Submit</button>
                                </form>
                            @endif
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
