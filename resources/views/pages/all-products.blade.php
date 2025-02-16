@extends('layouts.masterlayout')
@section('title')
- All Products
@endsection

@section('content')
{{-- breadcrumbs --}}
<x-breadcrumbs message="All Products" />
<section class="container mx-auto flex-grow max-w-screen-xl border-b py-5 lg:flex lg:flex-row lg:py-10">
    <!-- sidebar  -->
    @include('partials.sidebar')
    <!-- /sidebar  -->
    <!-- Products -->
    @include('partials.all-products')
</section>
<!-- /Products -->
@endsection