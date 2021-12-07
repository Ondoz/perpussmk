@extends('layouts.layouts')
@section('content')



<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="card mb-10">
            <!--begin::Body-->
            <div class="card-body p-lg-20">
                <div class="row">
                    <div class="col-3"><div class="card" style="background-color: rgb(95, 95, 239)">test</div></div>
                    <div class="col-3"><div class="card" style="background-color: rgb(95, 95, 239)">test</div></div>
                    <div class="col-3"><div class="card" style="background-color: rgb(95, 95, 239)">test</div></div>
                    <div class="col-3"><div class="card" style="background-color: rgb(95, 95, 239)">test</div></div>
                </div>
            </div>

            <!--end::Body-->
        </div>
        <div class="col-xl-">
            <!--begin::Engage widget 1-->
            <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-350px bg-primary mb-5 mb-xl-8" style="background-color: ;background-size: 500px auto;background-image:url('{{asset('/assets/admin/media/misc/city.png')}}')">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-center ps-lg-12">
                    <!--begin::Title-->
                    <h3 class="text-white fs-2qx fw-bolder mb-7">We are working
                    <br>to boost lovely mood</h3>
                    <!--end::Title-->
                    <!--begin::Action-->
                    <div class="m-0">
                        <a href="#" class="btn btn-success fw-bold px-6 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create a Store</a>
                    </div>
                    <!--begin::Action-->
                </div>
                <!--end::Body-->
            </div>
        </div>
        <!--begin::Home card-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20">
                <div class="mb-19">
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Buku Terpopuler</a>
                            </div>
                            <!--end::Name-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                Menampilkan 4 dari 10 Top buku
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Actions-->
                        <div class="d-flex my-4">
                            <a href="#" class="btn btn-sm btn-primary me-6" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Lihat Semua Top Buku</a>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--begin::Row-->
                    <div class="row g-10">
                        <!--end::Col--><!--begin::Col-->
                        <div class="col-md-3">
                            <!--begin::Publications post-->
                            <div class="card-xl-stretch me-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-275px" style="background-image:url('{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                                <!--begin::Body-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="/metronic8/demo9/../demo9/pages/profile/overview.html" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">Metronic Admin - How To Started the Dashboard Tutorial</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5"></div>
                                    <!--end::Text-->
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bolder">
                                        <!--begin::Author-->
                                        <a href="/metronic8/demo9/../demo9/pages/projects/users.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                        <!--end::Author-->
                                        <!--begin::Date-->
                                        <span class="text-muted">on Mar 21 2021</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Publications post-->
                        </div>
                        <!--end::Col--><!--begin::Col-->
                        <div class="col-md-3">
                            <!--begin::Publications post-->
                            <div class="card-xl-stretch me-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-275px" style="background-image:url('{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                                <!--begin::Body-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="/metronic8/demo9/../demo9/pages/profile/overview.html" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">Metronic Admin - How To Started the Dashboard Tutorial</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5"></div>
                                    <!--end::Text-->
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bolder">
                                        <!--begin::Author-->
                                        <a href="/metronic8/demo9/../demo9/pages/projects/users.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                        <!--end::Author-->
                                        <!--begin::Date-->
                                        <span class="text-muted">on Mar 21 2021</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Publications post-->
                        </div>
                        <!--end::Col--><!--begin::Col-->
                        <div class="col-md-3">
                            <!--begin::Publications post-->
                            <div class="card-xl-stretch me-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-275px" style="background-image:url('{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                                <!--begin::Body-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="/metronic8/demo9/../demo9/pages/profile/overview.html" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">Metronic Admin - How To Started the Dashboard Tutorial</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5"></div>
                                    <!--end::Text-->
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bolder">
                                        <!--begin::Author-->
                                        <a href="/metronic8/demo9/../demo9/pages/projects/users.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                        <!--end::Author-->
                                        <!--begin::Date-->
                                        <span class="text-muted">on Mar 21 2021</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Publications post-->
                        </div>
                        <!--end::Col-->  <!--end::Col--><!--begin::Col-->
                        <div class="col-md-3">
                            <!--begin::Publications post-->
                            <div class="card-xl-stretch me-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-275px" style="background-image:url('{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                                <!--begin::Body-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="/metronic8/demo9/../demo9/pages/profile/overview.html" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">Metronic Admin - How To Started the Dashboard Tutorial</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5"></div>
                                    <!--end::Text-->
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bolder">
                                        <!--begin::Author-->
                                        <a href="/metronic8/demo9/../demo9/pages/projects/users.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                        <!--end::Author-->
                                        <!--begin::Date-->
                                        <span class="text-muted">on Mar 21 2021</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Publications post-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>

                <div class="mb-19">
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Buku Baru</a>
                            </div>
                            <!--end::Name-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                Menampilkan 4 dari 10 Buku Baru
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Actions-->
                        <div class="d-flex my-4">
                            <a href="#" class="btn btn-sm btn-primary me-6" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Lihat Semua Buku Baru</a>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--begin::Row-->
                    <div class="row g-10">
                        <!--end::Col--><!--begin::Col-->
                        <div class="col-md-3">
                            <!--begin::Publications post-->
                            <div class="card-xl-stretch me-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-275px" style="background-image:url('{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                                <!--begin::Body-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="/metronic8/demo9/../demo9/pages/profile/overview.html" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">Metronic Admin - How To Started the Dashboard Tutorial</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5"></div>
                                    <!--end::Text-->
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bolder">
                                        <!--begin::Author-->
                                        <a href="/metronic8/demo9/../demo9/pages/projects/users.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                        <!--end::Author-->
                                        <!--begin::Date-->
                                        <span class="text-muted">on Mar 21 2021</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Publications post-->
                        </div>
                        <!--end::Col--><!--begin::Col-->
                        <div class="col-md-3">
                            <!--begin::Publications post-->
                            <div class="card-xl-stretch me-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-275px" style="background-image:url('{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                                <!--begin::Body-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="/metronic8/demo9/../demo9/pages/profile/overview.html" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">Metronic Admin - How To Started the Dashboard Tutorial</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5"></div>
                                    <!--end::Text-->
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bolder">
                                        <!--begin::Author-->
                                        <a href="/metronic8/demo9/../demo9/pages/projects/users.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                        <!--end::Author-->
                                        <!--begin::Date-->
                                        <span class="text-muted">on Mar 21 2021</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Publications post-->
                        </div>
                        <!--end::Col--><!--begin::Col-->
                        <div class="col-md-3">
                            <!--begin::Publications post-->
                            <div class="card-xl-stretch me-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-275px" style="background-image:url('{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                                <!--begin::Body-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="/metronic8/demo9/../demo9/pages/profile/overview.html" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">Metronic Admin - How To Started the Dashboard Tutorial</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5"></div>
                                    <!--end::Text-->
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bolder">
                                        <!--begin::Author-->
                                        <a href="/metronic8/demo9/../demo9/pages/projects/users.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                        <!--end::Author-->
                                        <!--begin::Date-->
                                        <span class="text-muted">on Mar 21 2021</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Publications post-->
                        </div>
                        <!--end::Col-->  <!--end::Col--><!--begin::Col-->
                        <div class="col-md-3">
                            <!--begin::Publications post-->
                            <div class="card-xl-stretch me-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-275px" style="background-image:url('{{asset('/assets/admin/media/stock/600x400/img-73.jpg')}}')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                                <!--begin::Body-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="/metronic8/demo9/../demo9/pages/profile/overview.html" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">Metronic Admin - How To Started the Dashboard Tutorial</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5"></div>
                                    <!--end::Text-->
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bolder">
                                        <!--begin::Author-->
                                        <a href="/metronic8/demo9/../demo9/pages/projects/users.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                        <!--end::Author-->
                                        <!--begin::Date-->
                                        <span class="text-muted">on Mar 21 2021</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Publications post-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
            </div>

            <!--end::Body-->
        </div>
        <!--end::Home card-->
    </div>
    <!--end::Container-->
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myCard #myBody ").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

    </script>
@endsection
