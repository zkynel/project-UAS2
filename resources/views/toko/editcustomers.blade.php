@extends('template/admin')

@section('content')
<h1>Edit Customers</h1>
<form action="{{ route('produk.updateCustomer', ['customer' => $customer->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" class="form-control" value="{{ $customer->address }}">
    </div>
    <div class="form-group">
        <label for="no_hp">Phone Number:</label>
        <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $customer->no_hp }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
{{-- <h1>Edit Customers</h1>
<form action="{{ route('product.updateCustomer', ['Customer' => $customer->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}">
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" name="price" id="address" class="form-control" value="{{ $customer->address }}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" name="description" id="no_hp" class="form-control" value="{{ $customer->no_hp }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form> --}}
@endsection