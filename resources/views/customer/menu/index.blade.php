@extends('layouts.app')

@section('content')
    <div class="bg-plain">
        <div class="container my-5" id="#app">
            <shop-products product-datas="{{ $products }}"></shop-products>
        </div>
    </div>
@endsection
