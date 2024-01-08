@extends('pelanggan.layout.index')

@section('content')
    <div class="d-flex justify-content-lg-between mt-5">
        <div class="card mb-3 gap-3" style="width: 28rem;">
            <img src="{{ asset('assets/images/profile/irfan.jpg') }}" class="card-img-top object-fit-cover " style="height: 350px;">
            <div class="card-body">
                <h5 class="card-title">@ipeung_</h5>
                <p class="card-text">152022026 Irfan Satria Supriadi</p>
                <a href="https://www.instagram.com/ipeung_/" target="_blank" class="btn btn-primary">Instagram</a>
            </div>
        </div>
        <div class="card mb-3 gap-3" style="width: 28rem;">
            <img src="{{ asset('assets/images/profile/dio.jpg') }}" class="card-img-top object-fit-cover " style="height: 350px;">
            <div class="card-body">
                <h5 class="card-title">@diorivn</h5>
                <p class="card-text">152022048 Rivan Dio Perdinan</p>
                <a href="https://www.instagram.com/diorivn/" target="_blank" class="btn btn-primary">Instagram</a>
            </div>
        </div>
        <div class="card mb-3 gap-3" style="width: 28rem;">
            <img src="{{ asset('assets/images/profile/sakha.jpg') }}" class="card-img-top object-fit-cover " style="height: 350px;">
            <div class="card-body">
                <h5 class="card-title">@sakhasandia_</h5>
                <p class="card-text">152022152 M Sakha Sandia</p>
                <a href="https://www.instagram.com/sakhasandia_/" target="_blank" class="btn btn-primary">Instagram</a>
            </div>
        </div>
    </div>
    
    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x" style="color: white"></i>
            <p class="m-0 fs-5" style="color: white"> +300 Buyer</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-money-bill-alt fa-2x" style="color: white"> </i>
            <p class="m-0 fs-5" style="color: white"> +500 Transaction</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-motorcycle fa-2x" style="color: white"></i>
            <p class="m-0 fs-5" style="color: white">+ 300 Product</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2" style="color: white">Contact Us</h4>
    <hr class="mb-5">
    <div class="row mb-md-5">
        {{-- <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px;"></div>
        </div> --}}
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik dan saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center">Au ah pen bobo 
                    </p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value=""
                                placeholder="Masukan email Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 w-100"> Send Your Message Bray</button>
                </div>
            </div>
        </div>
    </div>
@endsection