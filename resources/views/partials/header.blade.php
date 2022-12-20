<header>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active {{ Route::currentRouteName()=== 'welcome' ? 'active' : ''}}" href="{{route('welcome')}}" aria-current="page">Home Page</span></a>
            <a class="nav-item nav-link {{ Route::currentRouteName()=== 'about' ? 'active' : ''}}" href="{{route('about')}}">About</a>
        </div>
    </nav>


</header>