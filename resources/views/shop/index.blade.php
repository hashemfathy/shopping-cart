@extends('layouts.master')
@section('title')
Laravel shopping cart
@endsection
@section('content')
@if(Session::has('success'))
  <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
          <div id="charge-message" class="alert alert-success">
              {{Session::get('success')}}
          </div>
      </div>
  </div>
  @endif
@foreach($products->chunk(1) as $productChunk)
  <div class="col" id="ads">
    <!-- Category Card -->
        <!-- ------------------------------------------------------------------------ -->
        @foreach($productChunk as $Product) 
        <div class="oppo">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">Low KMS</span>
                <span class="card-notify-year">2018</span>
                <img class="img-fluid" src="{{ $Product->imagepath}}" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Used</span>
                <span class="card-detail-badge">${{$Product->price}}</span>
                <span class="card-detail-badge">13000 Kms</span>
            </div>
            <div class="card-body text-center">
                <div class="as-title m-auto">
                    <h5>{{$Product->title}}</h5>
                </div>
                <a class="as-btn" href="{{route('product.addtocart',['id' => $Product->id])}}">Buy</a>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
    
@endsection