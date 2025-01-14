@extends('main')
@section('title')
    Etalase
@endsection

@section('content')

    <style>
        /* Custom styles for the product card */
        .product-card {
            margin-bottom: 15px;
            width: auto;
            height: auto;
        }
        /* .product-card .card-img-top{
            object-fit: cover;
            width: 100%;
            height: 220px;
        } */
        .product-card img{
            /* object-fit: cover; */
            width: 100px;
            height: auto;
        }
        .container{
            padding: 10px;
        }
    </style>

    <div class="container-fluid pt-3 mb-3">
       
        <h3>Etalase</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">Etalase</li>
            </ol>
        </nav>

        <div class="row mb-5">
            <div class="col-6 offset-3">
                <div class="mt-3 mb-3">
                    <form action="{{url('/etalase')}}" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search Product ...">
                            <button class="btn  btn-primary" type="submit">
                                <i class="bi bi-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
          
        </div>
    </div>
    
@endsection