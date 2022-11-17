<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REAL MADRID INDONESIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    @yield('style')
</head>

<body>
    {{-- navbar --}}
    <section>
        <nav class="navbar navbar-expand-lg" style="background-color:rgb(255, 253, 109)">
            <div class="container">
                <a class="navbar-brand" href="{{ url("/") }}">
                    <img src="{{ asset('assets/images/rm-logo.png')}}" alt="Logo" width="30" height="35" class="d-inline-block align-text-top">
      Real Madrid Indonesia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('shop') }}">Shop</a>
                        </li>
                    </ul>
                    {{-- PENGECEKAN SUDAH LOGIN APA BELUM --}}
                    @if (Auth::check() == false)
                    <a class="btn btn-sm btn-warning ms-2" href="{{ url('user/register') }}">Register</a>
                    <a class="btn btn-sm btn-warning ms-2" href="{{ url('user/login') }}">Login</a>
                    @else
                    <a class="btn btn-sm btn-outline-warning ms-2" href="{{ url('user/process-logout') }}">Logout</a>
                    @endif

                </div>
            </div>
        </nav>
    </section>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    @yield('script')
</body>

</html>