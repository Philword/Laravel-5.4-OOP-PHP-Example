

            <article class="uk-comment acr-class">
                <header class="uk-flex-middle" >
                    <div >
                        <span class="uk-comment-title uk-margin-remove">
                            <img class="uk-comment-avatar " src="/img/avatar.png" width="40" height="40" alt="">

                            <a class="uk-link-reset" href="#"> {{ $comment->user->name }}</a>

                            <span class="uk-margin-right uk-text-small uk-text-muted" href="#">
                                {{ $comment->created_at->format(' M d (h:i A)')}}
                            </span>
                        </span>
                    </div>
                </header>
                <div class="uk-margin-top uk-margin-small-left uk-text-small">
                    <p>{{ $comment->body }}</p>
                </div>
            </article>





