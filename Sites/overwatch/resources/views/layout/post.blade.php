<div class="uk-margin-top uk-margin-medium uk-card uk-card-default uk-width-1-1@m">
    <div class="uk-card-body">
        <div class="uk-nav-center">
             <img src="{{ asset( 'img/post/' . $post->image)}}">
         </div>
             <p class="post-padding">{{$post->description}}</p>
         </div>

         <div class="uk-card-footer">
        <a class="uk-button uk-button-default uk-margin-small-right"  href="/posts/{{$post->id}}">
            Comments ({{ $post->comments->count()}})
        </a>
            <div id="modal-example" uk-modal>
                <div class="uk-modal-dialog">
                     <div class="uk-modal-body uk-padding-large" uk-overflow-auto>
                       @foreach ($post->comments->sortByDesc('created_at') as $comment)
                            @include ('layout.comments')
                        @endforeach
                </div>
         <div class="uk-modal-footer uk-text-right">
            @guest
            <div class="uk-float-left">
                 <a class="uk-link-text" href="{{route('login')}}"> Login</a> <span class="uk-text-muted"> or</span> <a class="uk-link-text" href="{{route('register')}}"> Register</a> <span class="uk-text-muted">to add your comment</span>
            </div>

            @else
            <form method="POST" action="{{ $post->id }}/comments">
                {{ csrf_field() }}
                <div class="uk-form-controls">
                <input class="uk-input" type="text" name="body" placeholder="Add your comment"  required>
                <input type="submit" style="display: none;" hidefocus="true" >
                 </div>
             </form>
             @endguest
        </div>
    </div>

    </div>
        <div class="uk-align-right ">
             <img class="uk-comment-avatar " src="/img/avatar.png" width="30" height="30" alt="">
          <span class="uk-margin-small-right">{{ $post->user->name}}</span>
            <time class="post-date" datetime="2016-04-01T19:00">{{ $post->created_at->format('l, M d (h:i A)')}}</time>
        </div>
    </div>

</div>
