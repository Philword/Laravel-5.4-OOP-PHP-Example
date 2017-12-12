@extends ('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <h1>Create new post</h1>
                <div class="uk-margin-top uk-margin-large-top panel-body">
                    <form class="form-horizontal" method="POST" action="/posts" enctype="multipart/form-data">
                        {{ csrf_field() }}
                         <div class="uk-form-controls row">
                            <div class="col-md-3">
                            <span class="uk-heading-bullet uk-text-lead"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload your image</span>
                            </div>
                             <div class="col-md-9">
                            <div class="js-upload uk-placeholder uk-text-center">
                            <input type="file"  placeholder="Choose" name="post_image" required>
                            </div>
                            </div>
                            </div>
                        </div>
                         <div class="uk-form-controls row">
                            <div class="col-md-3">
                         <span class="uk-heading-bullet uk-text-lead"><i class="fa fa-commenting" aria-hidden="true"></i> Describe your post</span>
                            </div>
                                <div class="col-md-9">
                                <textarea class="uk-textarea" type="text" rows="6" name="description" placeholder="Add description"  required></textarea>
                                </div>
                         </div>
                         <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9">
                             <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom uk-margin-medium-top">
                                    Submite
                                </button>
                            </div>
                            </div>

                         </div>
                    </form>

                </div>
            </div>


</div>
@endsection
@section ('sidebar')
@include ('sidebars.index')
@endsection


