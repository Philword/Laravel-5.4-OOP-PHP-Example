<nav class="uk-navbar-container " uk-navbar="mode: click">
     <div class="container">
        <div class="uk-align-left uk-margin-remove">
           <div class="logo-margin uk-padding-small">
               <a href="/">Overwatch Share</a>
           </div>
        </div>
        <div class="uk-align-right uk-margin-remove">
            <ul class=" uk-navbar-nav ">
                    @guest
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Sign UP</a></li>
                     <li><a href="{{route('login')}}">  <button class="uk-button uk-button-danger">Post your shit</button></a></li>
                @else
                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Hi, {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="uk-navbar-dropdown uk-margin-remove">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </div>
                            </li>
                            <li><a href="/create">  <button class="uk-button uk-button-danger">Post your shit</button></a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="bg-poz uk-height-medium uk-background-cover " uk-parallax="bgy: -200" style="background-image: url('/img/header_img.jpg');">
</div>

