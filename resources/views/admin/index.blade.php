@extends('layouts.admin.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::List Widget 4-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">Trends</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button"
                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                fill="#000000" />
                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                fill="#000000" opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                fill="#000000" opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 3-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="menu-item px-3">
                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                        Payments</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                            data-bs-toggle="tooltip"
                                            title="Specify a target name for future usage and reference"></i></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-end">
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Plans</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Billing</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Statements</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <!--begin::Switch-->
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input w-30px h-20px"
                                                        type="checkbox" value="1" checked="checked"
                                                        name="notifications" />
                                                    <!--end::Input-->
                                                    <!--end::Label-->
                                                    <span
                                                        class="form-check-label text-muted fs-6">Recuring</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3">Settings</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/brand-logos/plurk.svg"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top
                                        Authors</a>
                                    <span class="text-muted fw-bold d-block fs-7">Mark, Rowling,
                                        Esther</span>
                                </div>
                                <span class="badge badge-light fw-bolder my-2">+82$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/brand-logos/telegram.svg"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular
                                        Authors</a>
                                    <span class="text-muted fw-bold d-block fs-7">Randy, Steve,
                                        Mike</span>
                                </div>
                                <span class="badge badge-light fw-bolder my-2">+280$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/brand-logos/vimeo.svg"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bolder">New
                                        Users</a>
                                    <span class="text-muted fw-bold d-block fs-7">John, Pat,
                                        Jimmy</span>
                                </div>
                                <span class="badge badge-light fw-bolder my-2">+4500$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/brand-logos/bebo.svg"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active
                                        Customers</a>
                                    <span class="text-muted fw-bold d-block fs-7">Mark, Rowling,
                                        Esther</span>
                                </div>
                                <span class="badge badge-light fw-bolder my-2">+686$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller
                                        Theme</a>
                                    <span class="text-muted fw-bold d-block fs-7">Disco, Retro,
                                        Sports</span>
                                </div>
                                <span class="badge badge-light fw-bolder my-2">+726$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/brand-logos/fox-hub.svg"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bolder">Fox
                                        Broker App</a>
                                    <span class="text-muted fw-bold d-block fs-7">Finance, Corporate,
                                        Apps</span>
                                </div>
                                <span class="badge badge-light fw-bolder my-2">+145$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 4-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-8 ps-xl-12">
                <!--begin::Engage widget 1-->
                <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px bg-primary mb-5 mb-xl-8"
                    style="background-position: 100% 50px;background-size: 500px auto;background-image:url('assets/media/misc/city.png')">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column justify-content-center">
                        <!--begin::Title-->
                        <h3 class="text-white fs-2x fw-bolder line-height-lg mb-5">Brilliant App Ideas
                            <br />for Startups
                        </h3>
                        <!--end::Title-->
                        <!--begin::Action-->
                        <div class="m-0">
                            <a href='#' class="btn btn-success fw-bold px-6 py-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_app">Create an App</a>
                        </div>
                        <!--begin::Action-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 1-->
                <!--begin::Tables Widget 5-->
                <div class="card mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
                            <span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
                        </h3>
                        <div class="card-toolbar">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark active fw-bolder px-4 me-1"
                                        data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark fw-bolder px-4 me-1"
                                        data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark fw-bolder px-4"
                                        data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table
                                        class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/plurk.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                        Simmons</a>
                                                    <span class="text-muted fw-bold d-block">Movie
                                                        Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">React, HTML</td>
                                                <td class="text-end">
                                                    <span
                                                        class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/telegram.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                        Authors</a>
                                                    <span class="text-muted fw-bold d-block">Most
                                                        Successful</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Python, MySQL
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In
                                                        Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/vimeo.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                        Users</a>
                                                    <span class="text-muted fw-bold d-block">Awesome
                                                        Users</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Laravel,Metronic
                                                </td>
                                                <td class="text-end">
                                                    <span
                                                        class="badge badge-light-primary">Success</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/bebo.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                        Customers</a>
                                                    <span class="text-muted fw-bold d-block">Movie
                                                        Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">AngularJS, C#
                                                </td>
                                                <td class="text-end">
                                                    <span
                                                        class="badge badge-light-danger">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                        Theme</a>
                                                    <span class="text-muted fw-bold d-block">Best
                                                        Customers</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">ReactJS, Ruby
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In
                                                        Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table
                                        class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/plurk.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                        Simmons</a>
                                                    <span class="text-muted fw-bold d-block">Movie
                                                        Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">React, HTML</td>
                                                <td class="text-end">
                                                    <span
                                                        class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/telegram.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                        Authors</a>
                                                    <span class="text-muted fw-bold d-block">Most
                                                        Successful</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Python, MySQL
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In
                                                        Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/bebo.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                        Customers</a>
                                                    <span class="text-muted fw-bold d-block">Movie
                                                        Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">AngularJS, C#
                                                </td>
                                                <td class="text-end">
                                                    <span
                                                        class="badge badge-light-danger">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table
                                        class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                        Theme</a>
                                                    <span class="text-muted fw-bold d-block">Best
                                                        Customers</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">ReactJS, Ruby
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In
                                                        Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/bebo.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                        Customers</a>
                                                    <span class="text-muted fw-bold d-block">Movie
                                                        Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">AngularJS, C#
                                                </td>
                                                <td class="text-end">
                                                    <span
                                                        class="badge badge-light-danger">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/vimeo.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                        Users</a>
                                                    <span class="text-muted fw-bold d-block">Awesome
                                                        Users</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Laravel,Metronic
                                                </td>
                                                <td class="text-end">
                                                    <span
                                                        class="badge badge-light-primary">Success</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/brand-logos/telegram.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                        Authors</a>
                                                    <span class="text-muted fw-bold d-block">Most
                                                        Successful</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Python, MySQL
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In
                                                        Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Tables Widget 5-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
@endsection