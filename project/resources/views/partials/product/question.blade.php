<ul class="reviews">
    @for($i=0; $i<sizeof($questions);$i++)
        <li>
            <div class="review-heading">
                <h5 class="name">{{$questions[$i]->name}}</h5>
                <p class="date">{{$questions[$i]->timestamp}}</p>
            </div>
            <div class="review-body">
                <p>{{$questions[$i]->text}}</p>
                @if(!empty(Auth::user()))
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseText{{$i}}" aria-expanded="false" aria-controls="collapseText{{$i}}">
                    Answer
                </button>
                @endif
                @if(sizeof($answers[$i])!=0)
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseAnswer{{$i}}" aria-expanded="false" aria-controls="collapseAnswer{{$i}}">
                        Show All Answers
                    </button>
                    <div class="collapse" id="collapseAnswer{{$i}}">
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
                @endif
                <div id="collapseText{{$i}}" class="collapse">
                    <br/>
                    @if(!empty(Auth::user()))
                        <form class="answer-form" method="POST" action="{{ route('addAnswer')}}">
                            @csrf
                            <input name="questionId" type="hidden" value="{{$questions[$i]->id}}">
                            <textarea class="input @error('answer') is-invalid @enderror" placeholder="Your Answer" id="answer" name="answer" required></textarea>
                            @error('answer')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br/>
                            <button class="primary-btn">Submit</button>
                        </form>
                    @endif
                </div>
            </div>
        </li>
    @endfor
</ul>
{!!  $questions->render('pagination.reviews-pagination')  !!}
