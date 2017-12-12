@extends ('layout.master')
@section ('content')
@foreach ($posts as $post)
 @include ('layout.post')
@endforeach
@endsection
@section ('sidebar')
@include ('sidebars.index')
@endsection



