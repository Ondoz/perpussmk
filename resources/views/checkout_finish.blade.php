@extends('layouts.layouts')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container-xxl" id="kt_content_container">
        <div class="card card-flush">
            <div class="card-body">
                <div class="p-10">
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-warning">
                                <strong>Penting !!! </strong> <br>
                                Silahkan Tunjukan QRcode atau Kode ke Petugas Perpustakaan
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4>QR Code Peminjaman</h4>
                        <img class="w-150px ms-n1 pt-4" src="data:image/png;base64, {!! base64_encode(QrCode::size(200)->format('png')->merge('http://www.smkn1sakra.sch.id/media_library/images/b62182c38fc2ed8c58be78f1fe97a025.png', .3, true)->generate(route('admin.peminjaman.show', $peminjaman->is_code))) !!} ">
                        <br>
                        <div class="pt-4">
                            <strong>
                                <span>Number Kode Peminjaman</span>
                                <br>
                                <span class="fs-2hx fw-bolder text-dark me-2 lh-1">{{$peminjaman->is_code}}</span>
                            </strong>
                        </div>
                        <div class="pt-4">
                            <strong>
                                <span>Status Peminjaman</span>
                                <br>
                                <span class="fs-2hx fw-bolder text-dark me-2 lh-1" style="font-size: 15">{{ucwords($peminjaman->is_status)}}</span>
                            </strong>
                        </div>
                    </div>
                    <div class="hover-scroll-overlay-y me-n6">
                        <div class="card-body">
                            @foreach ($peminjaman->peminjamanitem as $item)
                                <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                    {{-- <div class="d-flex flex-stack mb-3"> --}}
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-auto">
                                            <img src="{{$item->buku->image}}" class="w-150px ms-n1" alt="">
                                        </div>
                                        <div class="col-lg-9 col-md-7 col-sm-auto" style="align-self: center;">
                                            <a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">{{$item->buku->judul}}</a>
                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item Code : {{$item->buku->code}}</span>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-auto" style="align-self: center;">
                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Jumlah : {{$item->qty}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection
