<header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{url('/')}}" class="nav-link px-2 text-white">Home</a></li>
                </ul>
                <div class="text-end">
                    @guest
                    <a href="{{'login'}}" type="text" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{'register'}}" type="text" class="btn btn-warning">Sign-up</a>
                    @else
                    <a >Hello, {{Auth::user()->name}}</a>
                    <a href="{{'logout'}}" type="text" class="btn btn-danger"
                    onclick="event.preventDefault();document.getElementById('logout-button').submit();">Logout</a>
                    <form action="{{'logout'}}"  method="POST" id="logout-button">
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </div>
</header>