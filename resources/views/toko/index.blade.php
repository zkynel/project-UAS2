@extends('template/main') 


@section('content')
<div class="container">
    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat Datang di Toko Baju Ourstyle!</h1>
        <p class="lead">Temukan gaya terbaru dan tren fashion kami.</p>
        <hr class="my-4">
        <p>Terima kasih telah mengunjungi toko baju kami. Dapatkan koleksi pakaian terbaik kami dengan harga yang menarik.</p>
    </div>
</div>

@endsection

@section('content2')
  <div class="container">
        <h1 class="text-center">Produk Terbaru Kami</h1>
        <div class="row">
            @for ($i = 1; $i <= 3; $i++)
                @php
                    $cowoImageName = 'setcowo' . $i . '.jpg';
                    $ceweImageName = 'setcewe' . $i . '.jpg';
                    $cowoImagePath = asset('assets/img/' . $cowoImageName);
                    $ceweImagePath = asset('assets/img/' . $ceweImageName);
                @endphp

                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ $cowoImagePath }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $products[$i-1]->name }}</h5>
                            <p class="card-text">{{ $products[$i-1]->description }}</p>
                            <a href="{{ route('product.show', $products[$i-1]->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ $ceweImagePath }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $products[$i+2]->name }}</h5>
                            <p class="card-text">{{ $products[$i+2]->description }}</p>
                            <a href="{{ route('product.show', $products[$i+2]->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection