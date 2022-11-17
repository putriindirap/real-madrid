@extends('_layouts.app')

@section('content')
    <section class="my-0" style="background-color:rgb(0, 94, 216)">
        <div class="bg-img" style="background-image:url({{url('assets/images/1.jpeg')}})">
            <div class="container-fluid bg-warning p-5 text-dark bg-opacity-10">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="card bg-light border-warning" style="border-radius: 20px">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('assets/images/rm-logo.png') }}" class="img-fluid mb-2" width="70">
                                    <h4 class="text-center">Register</h4>
                                </div>

                                {{-- Alert ketika success dan error --}}
                                @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif
                                @if (Session::has('error'))
                                    <div class="alert alert-warning">
                                        {{ Session::get('error') }}
                                        @php
                                            Session::forget('error');
                                        @endphp
                                    </div>
                                @endif

                                <!-- Menampilkan Error form validation -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <b>Terjadi kesalahan dalam proses input data</b> <br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ url('user/process-register') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="reenter_password" class="form-label">Repeat Password</label>
                                        <input type="password" class="form-control" id="reenter_password"
                                            name="reenter_password">
                                    </div>
                                    <div class="d-grid gap-2 mt-4">
                                        <button type="submit" class="btn btn-primary" type="button">Register</button>
                                    </div>

                                    <div class="d-grid gap-2 mt-4 mb-1">
                                        <p class="mb-0">Sudah memiliki akun?<a href="{{ url('user/login') }}" class="btn btn-link">Login</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection