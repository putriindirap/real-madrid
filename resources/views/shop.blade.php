@extends('_layouts.app')

@section('content')
<section class="py-0" style="background-color:seashell">
  <div class="container-fluid bg-warning p-5 text-dark bg-opacity-10" style="border-radius: 0px;">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="{{ asset("assets/images/rose.jpeg") }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Rose Wild</h5>
            <p class="card-text">Roses as a Symbol of Love and Affection
              The beauty of roses is considered to be a symbol of the love and affection of the person who gives it.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset("assets/images/cactus.jpeg") }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cactus</h5>
            <p class="card-text">Cactus is a plant that is very tough, strong and independent. Even though they are not given special attention, like water, cactus can continue to survive for the sake of their survival.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset("assets/images/tulip.png") }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tulip</h5>
            <p class="card-text">Tulips are often used as symbols of true and undying love between spouses or family members. So friends can choose this flower to give to parents or relatives at special moments.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
@endsection