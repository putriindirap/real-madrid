@extends('_layouts.app')

@section('content')
<section>
  <div class="container" style="border-radius: 20px;">
      <div class="row my-5">
          <div class="col-md-6 mt-md-0 mt-4">
              <p>Congratulations! you are already a member of Flowerizt<br> Here's your member card:</p>
              <div class="card text-center">
                  <div class="card-header d-flex justify-content-start">
                      <img src={{asset("assets/images/logo.png")}} class="img-fluid" width="25">
                      <p class="mb-0 ms-3 d-flex align-items-center" style="letter-spacing: 1px">
                          FLOWERIZT CARD MEMBER
                      </p>
                  </div>
                  <div class="card-body">
                          <h2><b>{{ Auth::user()->name }}</b></h2>
                          <p class="text-secondary mb-0 fst-italic">{{ Auth::user()->email }}</p>
                          <hr class="text-secondary">
                          <small class="text-secondary mb-0 fst-italic">joined since <b>{{ Auth::user()->created_at }}</b></small>
                  </div>
              </div>
          </div>
          <div class="col-md-6 mt-md-0 mt-4">
                    <div class="rounded float-end">
                        <img src="{{ asset("assets/images/florist.png") }}" class="img-fluid" width="400">
                    </div>
        </div>
      </div>
  </div>
</section>
@endsection