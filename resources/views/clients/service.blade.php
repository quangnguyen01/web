@extends('clients.master')
@section('banner')
    <div class="row background-image"
         style="background-image: url('https://hdntech.vn/wp-content/uploads/2022/03/hdn-tech.jpg')">
        <div style="position: absolute;left: 0;top: 40%;z-index: 6">
            <h1 class="text-light text-uppercase text-center">Dịch vụ</h1>
        </div>
    </div>
@endsection
@section('content')
    @foreach($service as $item)
    <div class="row {{$item->id % 2 === 0 ? 'flex-row-reverse' : ''}}">
        <div class="col-6 p-0">
            <img src="{{$item->image}}" alt="" style="width: 100%">
        </div>
        <div class="col-6 text-center">
            <h2>{{$item->name}}</h2>
            <p>{{$item->description}}</p>
        </div>
    </div>
    @endforeach
@endsection

@section('end_banner')
    <div class="row background-image"
         style="background-image: url('https://tuyensinh.uit.edu.vn/sites/default/files/uploads/images/201803/du-hoc-singapore-nganh-it-truong-nao.jpg')">
        <div style="position: absolute;left: 0;top: 40%;z-index: 6">
            <h1 class="text-light text-uppercase text-center"></h1>
        </div>
    </div>
@endsection
