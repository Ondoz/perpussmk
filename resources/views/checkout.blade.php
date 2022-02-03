@extends('layouts.layouts')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container-xxl" id="kt_content_container">
        <div class="card card-flush h-xl-100">
            <form action="{{route('cart.checkout')}}" method="post">
                @csrf
                <div class="card-header px-7 border-bottom">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder text-dark">Cart</span>
                    </h3>
                    <button type="submit" class="btn btn-primary btn-md my-7">Check Out Peminjaman</button>
                </div>
                <div class="hover-scroll-overlay-y me-n6">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-warning">
                                    <strong>Peringatan !!! </strong> <br>
                                    Tolong Cek Kembali Pinjaman Anda, Jika Sudah Benar Silahkan Klik Tombol <b> "Check Out Pinjaman"</b>
                                </div>
                            </div>
                        </div>
                        <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                            {{-- <div class="d-flex flex-stack mb-3"> --}}
                                <div class="row">
                                    <div class="col">

                                        <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-start">ITEMS</span>
                                    </div>
                                    <div class="col-1">
                                        <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">QTY</span>
                                    </div>
                                </div>
                            {{-- </div> --}}
                        </div>
                        @foreach ($cart as $item)
                            <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                {{-- <div class="d-flex flex-stack mb-3"> --}}
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{$item->buku->image}}" class="w-150px ms-n1" alt="">
                                        </div>
                                        <div class="col-9" style="align-self: center;">
                                            <a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">{{$item->buku->judul}}</a>
                                            <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item Code: {{$item->buku->code}}</span>
                                        </div>
                                        <div class="col-1" style="align-self: center;">
                                            <input type="text" class="form-control text-center" name="qty[]" value="{{$item->total}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="buku_id[]" value="{{$item->buku_id}}">
                                {{-- </div> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
