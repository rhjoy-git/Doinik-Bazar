@extends('layouts.masterlayout')

@section('content')

@section('breadcrumbs')
All Products
@endsection
@section('title')
- All Products
@endsection

@include('partials.breadcrumbs')

<section class="container mx-auto flex-grow max-w-[1200px] border-b py-5 lg:flex lg:flex-row lg:py-10">
    <!-- sidebar  -->
    @include('partials.sidebar')
    <!-- /sidebar  -->
    <!-- Products -->
    @include('partials.all-products')
</section>
<!-- /Products -->
@endsection