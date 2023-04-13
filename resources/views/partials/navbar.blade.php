<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container ">
        <div>
            <img src="dc-logo.png" width="70px" height="70px">
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  @if(Request::route()->getName() == 'home') active @endif" aria-current="page"
                        href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::route()->getName() == 'comic-books') active @endif"
                        href="{{ route('comic-books') }}">comic books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tv</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>

            </ul>
        </div>
    </div>
</nav>