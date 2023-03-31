@extends('clients.master')
@section('banner')
    <div class="row background-image"
         style="background-image: url('https://hdntech.vn/wp-content/uploads/2022/03/hdn-tech.jpg')">
        <div style="position: absolute;left: 0;top: 40%;z-index: 6">
            <h1 class="text-light text-uppercase text-center">@yield('title_banner')</h1>
        </div>
    </div>
@endsection

@section('content')
    @yield('page_content')
@endsection

@section('custom_css')
    @yield('page_css')
@endsection

@section('custom_js')
    @yield('page_js')
@endsection

