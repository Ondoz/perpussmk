@extends('layouts.layouts')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Order details page-->
            <div class="d-flex flex-column gap-7 gap-lg-10">
                <!--begin::Orders-->
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <!--begin::Order history-->
                    <div class="card card-flush py-4 flex-row-fluid">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Order History</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-100px">Date Added</th>
                                            <th class="min-w-175px">Is Code</th>
                                            <th class="min-w-175px">Denda Peminjaman</th>
                                            <th class="min-w-70px">Order Status</th>
                                            <th class="min-w-100px">Action</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        @forelse ($peminjaman as $item)
                                            <tr>
                                                <!--begin::Date-->
                                                <td>{{ $item->created_at }}</td>
                                                <!--end::Date-->
                                                <!--begin::Comment-->
                                                <td>{{ $item->is_code }}</td>
                                                <!--end::Comment-->
                                                <td>
                                                    {{ $item->denda_buku }}
                                                </td>
                                                <!--begin::Status-->
                                                <td>
                                                    {!! $item->span_status !!}
                                                </td>
                                                <!--end::Status-->
                                                <!--begin::Customer Notified-->
                                                <td>
                                                    <a href="{{ route('cart.finish', ['uuid' => $item->uuid]) }}"
                                                        class="btn btn-sm btn-primary">
                                                        Details Peminjaman
                                                    </a>

                                                    <a href="{{ route('history.pengembalian', ['uuid' => $item->uuid]) }}"
                                                        class="btn btn-sm btn-info">
                                                        Details Pengembalian
                                                    </a>
                                                </td>
                                                <!--end::Customer Notified-->
                                            </tr>
                                        @empty
                                            <div class="card-body p-0">
                                                <!--begin::Wrapper-->
                                                <div class="card-px text-center py-20 my-10">
                                                    <!--begin::Title-->
                                                    <h2 class="fs-2x fw-bolder mb-10">Welcome!</h2>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <p class="text-gray-400 fs-4 fw-bold mb-10">Data Buku Masih Kosong </p>
                                                    <!--end::Description-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_add_customer">Tambah Buku</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Illustration-->
                                                <div class="text-center px-4">
                                                    <img class="mw-100 mh-300px" alt=""
                                                        src="assets/media/illustrations/sigma-1/2.png" />
                                                </div>
                                                <!--end::Illustration-->
                                            </div>
                                        @endforelse
                                        {{ $peminjaman->links('vendor.pagination.bootstrap-4') }}

                                    </tbody>
                                    <!--end::Table head-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Order history-->
                </div>
                <!--end::Orders-->
            </div>
            <!--end::Order details page-->
        </div>
        <!--end::Container-->
    </div>
@endsection
