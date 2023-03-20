@extends('clients.master')
@section('content')
<div class="container p-4">
    <div class="row mt-3 mb-3">
        <h2 class="text-center text-uppercase" style="color: #03c6e9">Thông tin liên hệ</h2>
        <h5 class="text-center">Vui lòng nhập thông tin chi tiết của bạn và chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất</h5>
    </div>
    <div class="row">
        <form action="#" style="box-shadow: 0 0 30px rgb(214 215 216 / 40%);
    padding: 30px">
            <div class="row">
                <div class="col-4 form-group" style="padding: 20px">
                    <input type="text" class="form-control" placeholder="Enter Name">
                </div>
                <div class="col-4 form-group" style="padding: 20px">
                    <input type="text" class="form-control" placeholder="Enter Email">
                </div>
                <div class="col-4 form-group" style="padding: 20px">
                    <input type="text" class="form-control" placeholder="Enter Phone">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group" style="padding: 20px">
                    <textarea class="form-control" placeholder="Enter Message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" style="width: 200px">Gửi</button>
            </div>

        </form>
    </div>
</div>
@endsection
@section('banner')
<div class="row background-image"
     style="background-image: url('https://hdntech.vn/wp-content/uploads/2022/03/hdn-tech.jpg')">
    <div style="position: absolute;left: 0;top: 50%;z-index: 6">
        <h1 class="text-light text-uppercase text-center">Liên hệ</h1>
    </div>
</div>
@endsection