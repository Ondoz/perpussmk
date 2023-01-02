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
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Buku
                                        Terpopuler</a>
                                </div>
                                <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                    Menampilkan 8 Top buku
                                </div>
                            </div>
                            {{-- <div class="d-flex my-4">
                                <a href="#" class="btn btn-sm btn-primary me-6" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_offer_a_deal">Lihat Semua Top Buku</a>
                            </div> --}}
                        </div>
                        <div class="row g-10">
                            @foreach ($topBook as $item)
                                <div class="col-md-3">
                                    <div class="card-xl-stretch me-md-6">
                                        <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales"
                                            href="{{ $item->buku->image }}">
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-275px"
                                                style="background-image:url('{{ $item->buku->image }}')"></div>
                                            <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-2x text-white"></i>
                                            </div>
                                        </a>
                                        <div class="m-0">
                                            <a href=""
                                                class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ Str::limit($item->buku->judul, 20) }}</a>
                                            <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5"></div>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="fs-6 fw-bolder">
                                                        <div class="d-flex flex-column">
                                                            <span
                                                                class="text-gray-700">{{ Str::limit($item->buku->penulis, 20) }}</span>
                                                            <span class="text-muted">on
                                                                {{ date('F d Y', strtotime($item->buku->created_at)) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="d-flex">
                                                        <a href="{{ route('cart.add', $item->buku->uuid) }}"
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
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-19">
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Buku
                                        Random</a>
                                </div>
                            </div>
                            <div class="d-flex my-4">
                                <a href="#" class="btn btn-sm btn-primary me-6" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_offer_a_deal">Lihat Semua Buku Baru</a>
                            </div>
                        </div>
                        <div class="row g-10">
                            @foreach ($newBook as $item)
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
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myCard #myBody ").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
