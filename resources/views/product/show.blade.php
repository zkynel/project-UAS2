@extends('template/main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if ($product->gender == 'cowo')
                    <img src="{{ asset('assets/img/setcowo' . $product->id . '.jpg') }}" class="img-fluid" alt="Product Image">
                @elseif ($product->gender == 'cewe')
                    <img src="{{ asset('assets/img/setcewe' . $product->id . '.jpg') }}" class="img-fluid" alt="Product Image">
                @endif
            </div>
            <div class="col-md-6">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <form action="{{ route('product.buy', ['id' => $product->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Handphone:</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" min="1" value="1">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Beli</button>
                </form>
            </div>
        </div>
    </div>
@endsection
