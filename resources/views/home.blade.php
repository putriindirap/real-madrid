@extends('_layouts.app')

@section('content')
<section class="py-0" style="background-color:rgb(72, 75, 255)">
    <div class="container-fluid bg-warning p-5 text-dark bg-opacity-10" style="border-radius: 0px;">
        <div class="row my-5">
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <p class="text-dark bg-warning">Web Resmi Real Madrid</p>
                    <h2 class="fs-2">Selamat Datang di Fans Page<br><b class="font-monospace fw-bold">REAL MADRID INDONESIA</b></h2>
                    <p class="fst-italic">Tempat berkumpulnya Madridista Indonesia,<br>Jangan ngaku Madridista kalo belum jadi Member</p> <br>REAL MADRID INDONESIA</p>

                    <a href="{{ url("user/register") }}" class="btn btn-warning"><b>Register Now!</b></a>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset("assets/images/1.jpeg") }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("assets/images/2.jpeg") }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("assets/images/3.jpeg") }}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection