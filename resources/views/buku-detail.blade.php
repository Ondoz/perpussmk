@extends('layouts.layouts')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container-xxl" id="kt_content_container">
        <div class="row gy-5 g-xl-10">
            <div class="col-xl-4 mb-5 mb-xl-10">
                <div class="card h-md-100">
                    <div class="card-body d-flex flex-column flex-center">
                        <div class="mb-2">
                            <h1 class="fw-semibold text-gray-800 text-center lh-lg">{{$buku->judul}}
                                <div class="py-10 text-center">
                                    <img src="{{ $buku->image }}" class="theme-light-show w-200px" alt="">
                                </div>
                        </div>
                        <a class="btn btn-primary w-100 fw-bold" href="{{ route('cart.add', $buku->uuid) }}">Pinjam Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 mb-xl-10">
                <div class="card card-flush h-lg-100">
                    <div class="card-header flex-nowrap pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark">Top Selling Categories</span>
                            <span class="text-gray-400 pt-2 fw-semibold fs-6">8k social visitors</span>
                        </h3>


                    </div>
                    <div class="card-body">
                        <div class="w-100 mb-10">
                            <div class="d-flex align-items-center mb-5">
                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Kategori</span>
                                <span>{{$buku->kategori->name}}</span>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Penulis</span>
                                <span>{{$buku->penulis}}</span>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Tanggal Publish</span>
                                <span>{{$buku->detail_buku->tgl_rilis}}</span>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <span class="fw-semibold fs-6 text-gray-400 flex-grow-1">Bahasa</span>
                                <span>{{$buku->detail_buku->bahasa}}</span>

                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <span class="fw-semibold fs-6 text-gray-400 flex-grow-1">Stok</span>
                                <span>{{$buku->detail_buku->jumlah_buku}}</span>

                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <span class="fw-semibold fs-6 text-gray-400 flex-grow-1">Penerbit</span>
                                <span>{{$buku->detail_buku->penerbit}}</span>

                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <span class=" fw-semibold fs-6 text-gray-400 flex-grow-1">Negara</span>
                                <span>{{$buku->detail_buku->negara}}</span>

                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <span class=" fw-semibold fs-6 text-gray-400 flex-grow-1">Jumlah Halaman</span>
                                <span>{{$buku->detail_buku->jumlah_halaman}}</span>

                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <span class="fw-semibold fs-6 text-gray-400 flex-grow-1">Deskripsi :</span>
                            </div>
                            <span>{{$buku->detail_buku->description}}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-19">
                <div class="row g-10">
                    @foreach (GeneralHelper::newBook() as $item)
                    <div class="col-md-3">
                        <div class="card-xl-stretch me-md-6">
                            <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{ $item->image }}">
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-275px" style="background-image:url('{{ $item->image }}')"></div>
                                <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                    <i class="bi bi-eye-fill fs-2x text-white"></i>
                                </div>
                            </a>
                            <div class="m-0">
                                <a href="{{route('details', $item->uuid)}}" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ Str::limit($item->judul, 20) }}</a>
                                <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5"></div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="fs-6 fw-bolder">
                                            <div class="d-flex flex-column">
                                                <span class="text-gray-700">{{ Str::limit($item->penulis, 20) }}</span>
                                                <span class="text-muted">on
                                                    {{ date('F d Y', strtotime($item->created_at)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex">
                                            <a href="{{ route('cart.add', $item->uuid) }}" class="btn btn-icon btn-primary">
                                                <span class="svg-icon svg-icon-1">
                                                    <i class="bi bi-cart2 fs-2"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection