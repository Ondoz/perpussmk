@extends('layouts.layouts')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container-xxl" id="kt_content_container">
        <div class="card">
            <div class="card-body p-lg-20">
                <div class="mb-19">
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Semua Buku</a>
                            </div>
                        </div>
                    </div>
                    <div class="row g-10">
                        @forelse ($buku as $item)
                            <div class="col-md-3">
                                <div class="card-xl-stretch me-md-6">
                                    <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales"
                                        href="{{ $item->image }}">
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-275px"
                                            style="background-image:url('{{ $item->image }}')"></div>
                                        <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                                        </div>
                                    </a>
                                    <div class="m-0">
                                        <a href="{{route('details', $item->uuid)}}"
                                            class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ Str::limit($item->judul, 20) }}</a>
                                        <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5"></div>
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="fs-6 fw-bolder">
                                                    <div class="d-flex flex-column">
                                                        <span
                                                            class="text-gray-700">{{ Str::limit($item->penulis, 20) }}</span>
                                                        <span class="text-muted">on
                                                            {{ date('F d Y', strtotime($item->created_at)) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex">
                                                    <a href="{{ route('cart.add', $item->uuid) }}"
                                                        class="btn btn-icon btn-primary">
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
                            @empty
                            <div class="d-flex flex-column flex-center flex-column-fluid">
                                <!--begin::Content-->
                                <div class="d-flex flex-column flex-center text-center p-10">
                                    <!--begin::Wrapper-->
                                    <div class="card card-flush w-lg-650px py-5">
                                        <div class="card-body py-15 py-lg-20">
                                            <!--begin::Title-->
                                            <h1 class="fw-bolder fs-2hx text-gray-900 mb-4">Oops!</h1>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-6 text-gray-500 mb-7">Buku Tidak Di Temukan</div>
                                            <!--end::Text-->
                                            <!--begin::Illustration-->
                                            <div class="mb-3">
                                                <img src="{{ asset('assets/media/404-error.png') }}" class="mw-100 mh-300px theme-light-show" alt="">
                                                {{-- <img src="/metronic8/demo1/assets/media/auth/404-error-dark.png" class="mw-100 mh-300px theme-dark-show" alt=""> --}}
                                            </div>
                                            <!--end::Illustration-->
                                            <!--begin::Link-->
                                            <div class="mb-0">
                                                <a href="/metronic8/demo1/../demo1/index.html" class="btn btn-sm btn-primary">Return Home</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Content-->
                            </div>
                        @endforelse
                            {{$buku->links('vendor.pagination.bootstrap-4')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection