<nav class="navbar navbar-expand-lg bg-light" style="background-color: #c8c8d778 !important; color:white !important;height:80px !important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TASK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{route('tasks.index')}}">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tasks.create')}}">Add New</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Logout</a>
                </li>
                @endauth



            </ul>
            <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                <li class="nav-item">
                    <a class="nav-link"  href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-primary link-opacity-100 link-offset-100 link-hover-offset-100" herf="/">Register</a>
                </li>  
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Logout</a>
                </li>
                @endauth
               
            </ul>
           -->
        </div>
    </div>
</nav>