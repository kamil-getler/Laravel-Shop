<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.9/dist/sweetalert2.min.js"></script>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Lista produktów</h1>
            </div>
            <div class="col-6">
                <a href="{{ route('products.create') }}">
                    <button type="button" class="btn btn-primary" style="float: right;">Dodaj</button>
                </a>
            </div>
        </div>
    <div class="container">
        <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nazwa</th>
            <th scope="col">Description</th>
            <th scope="col">Ilość</th>
            <th scope="col">Cena</th>
            <th scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->amount }}</td>
                <td>{{ $product->price }}</td>
                <td>@if($product->hasCategory()){{ $product->category->name }}@endif</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}">
                        <button class="btn btn-secondary btn-sm">P</button>
                    </a>
                    <a href="{{ route('products.edit', $product->id) }}">
                        <button class="btn btn-warning btn-sm">E</button>
                    </a>
                    <button class="btn btn-danger btn-sm delete" data-id="{{ $product->id }}">
                        X
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
        {{ $products->links() }}
    </div>
    </div>
@endsection

@section('javascript')
    const deleteUrl = "{{ url('products') }}/";
    const confirmDelete = "{{ __('shop.messages.delete_confirm') }}";
@endsection

@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection


