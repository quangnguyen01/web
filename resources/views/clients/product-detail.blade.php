@extends('clients.base-sub-page')

@section('title_banner')
    {{$product->name}}
@endsection

@section('page_css')
    <style>
        .col-6 img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .card {
            box-shadow: 0px 5px 15px #20283114;
            border: 1px solid transparent;
            transition: .5s;
            padding: 10px;
            position: relative;
            overflow: hidden;
            width: 100%;
            margin: 0 auto;
        }

        .card .card-name {
            text-align: center;
            padding-top: 10px;
            padding-bottom: 0px;
            position: relative;
            width: 100%;
            font-size: .9em;
        }

        .card .card-name a {
            margin: 0px;
            font-size: 16px;
            font-weight: 500;
            color: #000;
            transition: .5s;
        }

        .card .card-name a:hover {
            color: #034982!important;
        }

        .card-padding {
            padding: 0 9.8px 19.6px;
            margin-bottom: 0;
        }
    </style>
@endsection

@section('page_content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{$product->image}}" alt="">
            </div>
            <div class="col-6">
                <h3>{{$product->name}}</h3>
                <div>{!! html_entity_decode($product->description) !!}</div>
            </div>
        </div>
        <hr>
        <div class="row">
            <h5>Mô tả</h5>
            <div>{!! html_entity_decode($product->content) !!}</div>
        </div> thế thì phải thêm trường trong bảng product thì mới làm đc vậy 
        <hr>
        <div class="row">
            <h3>Sản phẩm tương tự</h3>
            @foreach($products as $product)
                <div class="col-3 card-padding">
                    <div class="card">
                        <img src="{{$product->image}}" alt="{{$product->name}}" height="200">
                        <div class="card-name" style="height: 50.8375px">
                            <a href="{{route('product-detail', $product->id)}}">{{$product->name}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

