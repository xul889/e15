<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SayHiByEmail</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/site.css"/>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" href="/">SayHiByEmail</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/">Home</a>
                        </li>
                    {{-- create email link --}}
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/emails/create">CreateEmail</a>

                        </li>
                        {{-- sent logs link--}}
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/sentlog">SentLogs</a>
                        </li>

                        {{-- if not login  --}}
                        @if (Auth::guest())
                        {{-- login page --}}
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/login">Login</a>
                        </li>
                        {{-- register page --}}
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/register">Register</a>
                        </li>
                        @endif
                        
                        {{-- if login show user name/email to the right--}}
                       

                    </ul>
                    {{-- nav item to the right --}}
                    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                        @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/">{{ Auth::user()->name }}</a>
                               
                               
                            </li>
                            <li class="nav-item">
                                {{-- logout using post --}}
                                <form action="/logout" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn ">Logout</button>
                                </form>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        {{-- show message --}}
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        {{-- end show message --}}
    </header>
    <div class="container">
        <main role="main" class="pb-3">
            @yield('content')
        </main>
    </div>

    <footer class="border-top footer text-muted">
        <div class="container">
            &copy; 2022 - SayHiByEmail - All rights reserved
        </div>
    </footer>

    <script src="/js/bootstrap.bundle.min.js"></script>



    {{-- @await RenderSectionAsync("Scripts", required: false) --}}
</body>
</html>