@extends('layouts.admin.app')
@push('css')
    <script src="//rawcdn.githack.com/tobiasmuehl/instascan/4224451c49a701c04de7d0de5ef356dc1f701a93/bin/instascan.min.js">
    </script>
@endpush
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-customer-table-filter="search"
                                class="form-control form-control-solid w-250px ps-15" placeholder="Search Pengembalian" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-15px">No</th>
                                <th class="min-w-125px">Code</th>
                                <th class="min-w-125px">Nama</th>
                                <th class="min-w-125px">Tgl Peminjaman</th>
                                <th class="min-w-125px">Tgl Pengembalian</th>
                                <th class="min-w-125px">jumlah pinjaman buku</th>
                                <th class="min-w-125px">buku yang dikembalikan</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">Action</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @forelse ($peminjaman as $item)
                                <tr>
                                    <!--begin::Name=-->
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <!--end::Name=-->
                                    <!--begin::Email=-->
                                    <td>
                                        <a href="#"
                                            class="text-gray-600 text-hover-primary mb-1">{{ $item->is_code }}</a>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-600 text-hover-primary mb-1">{{ $item->user->name }}</a>
                                    </td>

                                    <td>
                                        {{ $item->date_start }}
                                    </td>
                                    <td>
                                        {{ $item->date_end }}
                                    </td>
                                    <td>
                                        {{ $item->peminjamanitem->sum('qty') }}
                                    </td>
                                    <td>
                                        {{ $item->peminjamanitem->sum('pengembalian_item_sum_qty') }}
                                    </td>
                                    <td class="text-gray-800 fw-bolder text-center"">
                                        @if ($item->peminjamanitem->sum('qty') === $item->peminjamanitem->sum('pengembalian_item_sum_qty'))
                                            <span class="badge badge-light-success fs-8 fw-bolder">Success</span>
                                        @else
                                            <span class="badge badge-light-danger fs-8 fw-bolder">Prosess
                                                Pengembalian</span>
                                            <span>
                                                Tersisa
                                                {{ $item->peminjamanitem->sum('qty') - $item->peminjamanitem->sum('pengembalian_item_sum_qty') }}
                                                Buku
                                            </span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href=" {{ route('admin.pengembalian.edit', $item->uuid) }}"
                                            class="btn btn-primary btn-sm vdetails">Details Pengembalian</a>
                                    </td>
                                    <!--end::Email=-->
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>

            <!--begin::Modals-->
            <!-- Modal -->

        </div>
        <!--end::Container-->
    </div>
@endsection
