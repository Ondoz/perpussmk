@extends('layouts.layouts')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-lg-20 pb-lg-0">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-xl-15">
                            <!--begin::Post content-->
                            <div class="mb-17">
                                <!--begin::Wrapper-->
                                <div class="mb-8">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap mb-6">
                                        <!--begin::Item-->
                                        <div class="me-9 my-1">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="2" y="2" width="9" height="9"
                                                        rx="2" fill="currentColor"></rect>
                                                    <rect opacity="0.3" x="13" y="2" width="9"
                                                        height="9" rx="2" fill="currentColor"></rect>
                                                    <rect opacity="0.3" x="13" y="13" width="9"
                                                        height="9" rx="2" fill="currentColor"></rect>
                                                    <rect opacity="0.3" x="2" y="13" width="9"
                                                        height="9" rx="2" fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <span
                                                class="fw-bold text-gray-400">{{ $information->created_at->diffForHumans() }}</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->

                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Title-->
                                    <a href="#"
                                        class="text-dark text-hover-primary fs-2 fw-bold">{{ $information->title }}
                                    </a>
                                    <!--end::Title-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Description-->
                                <div class="fs-5 fw-semibold text-gray-600">
                                    {!! $information->descriptions !!}
                                </div>
                                <!--end::Description-->

                            </div>
                            <!--end::Post content-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Body-->
            </div>
        </div>
    </div>
@endsection
