<!DOCTYPE html>
<html>
    <head>
        <title>Overwatch Post</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.33/css/uikit.min.css" />
        <link rel="stylesheet" href="/css/post.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.33/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.33/js/uikit-icons.min.js"></script>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/x.x.x/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/f855ccca2b.js"></script>
    </head>
    <body>
        @include ('layout.parts.nav')
        <div class="container uk-margin-large-top">
         <div class="row">
            <div class="col-md-8 col-12"> @yield ('content')</div>
            <div class="uk-padding col-md-4 col-12 ">
            @yield('sidebar')
  </div>
</div>
</div>
</div>
        </div>
    </div>
    </body>
</html>
