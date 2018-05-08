<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript: void(0)">
                @if(session('role') !== null && session('role') == 'user')
                    Customer
                @elseif(session('role') !== null && session('role') == 'admin')
                    Administer
                @else
                    Customer
                @endif
            </a>
        </div>
    
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if(session('role') !== null && session('role') == 'user')
                    <li class="active"><a href="{{ route('index') }}">Home</a></li>
                @elseif(session('role') !== null && session('role') == 'admin')
                    <li class="active"><a href="{{ route('admin.room_list') }}">Room List</a></li>
                @else
                    <li class="active"><a href="{{ route('index') }}">Home</a></li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(session('user') === null)
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                @else
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>