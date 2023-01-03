@extends('layouts.layouts')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <div class="card">
                <div class="card-body p-lg-20">
                    <!--begin::Section-->
                    <div class="mb-17">
                        <!--begin::Title-->
                        <h3 class="text-dark mb-7">Latest Articles, News &amp; Updates</h3>
                        <!--end::Title-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-9"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-md-12 justify-content-between d-flex flex-column">
                                <!--begin::Post-->

                                @foreach ($information as $item)
                                    <div class="ps-lg-6 mb-16 mt-md-0 mt-17">
                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Title-->
                                            <a href="{{ route('information-detail', $item->id) }}"
                                                class="fw-bold text-dark mb-4 fs-2 lh-base text-hover-primary">{{ $item->title }}</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 mt-4 text-gray-600 text-dark"></div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack flex-wrap">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center pe-2">
                                                <!--begin::Avatar-->
                                                {{-- <div class="symbol symbol-35px symbol-circle me-3">
                                                    <img src="/metronic8/demo1/assets/media/avatars/300-20.jpg"
                                                        class="" alt="">
                                                </div> --}}
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="fs-5 fw-bold">
                                                    <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html"
                                                        class="text-gray-700 text-hover-primary">Admin</a>
                                                    <span class="text-muted">{{ $item->created_at->diffForHumans() }}</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Label-->
                                            {{-- <span class="badge badge-light-info fw-bold my-2">BLOG</span> --}}
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                @endforeach
                                <!--end::Post-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Row-->
                    </div>
                    <!--end::Section-->
                </div>
            </div>
        </div>
    </div>
@endsection
