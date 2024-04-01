@extends('Main.main')
@section('title')
    Register
@endsection

@section('content')
<style>
    /* Custom styles for the slider */
    .carousel-inner img {
      width: 100%;
      height: 400px; /* Adjust the height as needed */
      object-fit: cover;
    }

    .card-slider {
      overflow-x: auto;
      white-space: nowrap;
    }

    .card {
      display: inline-block;
      width: 300px; /* Adjust the width as needed */
      margin-right: 10px; /* Adjust the margin as needed */
    }

    /* Custom styles for the product card */
    .product-card {
      margin-bottom: 20px;
    }
    .product-card{
        width: 200px;
    }
    
  </style>


  {{-- Carousel --}}
    <div class="container">
        <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Banner 3">
                </div>

                <!-- Add more carousel items here -->
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- Card Carousel --}}
    <div class="container mt-3 p-5" >
        <div class="card-slider">
            
            @for ($i=1; $i<=10; $i++)
                <div class="card">
                    <a href="" class="text-decoration-none">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card {{ $i }}</h5>
                        <p class="card-text">This is a sample card.</p>
                    </div>
                </div>
            @endfor
        <!-- Add more cards here -->
        </div>
    </div>

    <div class="container-fluid p-5">
        <div class="row">
            @for ($i = 0; $i <= 20; $i++)
                <div class="col">
                    <div class="card product-card">
                        <img src="https://via.placeholder.com/300" class="card-img-top img-fluid" alt="Product Image">
                        <div class="card-body">
                        <h5 class="card-title">Nama Produk</h5>
                        <p class="card-text">Harga: Rp100.000</p>
                        <p class="card-text">Asal Penjual: Toko ABC</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            @endfor

            <div class="col text-center">
                <a href="{{ url('/katalog') }}" class="btn btn-outline-secondary btn-sm">
                    Lihat semua Produk
                </a>
            </div>

            <!-- Add more product cards here -->
        </div>
    </div>
@endsection