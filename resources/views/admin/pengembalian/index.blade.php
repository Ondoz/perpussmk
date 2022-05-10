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
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                        transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-customer-table-filter="search"
                                class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
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
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">{{ $item->is_code }}</a>
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
                                        {{ $item->peminjamanitem_count }}
                                    </td>
                                    <td>
                                        {{ $item->status_item_count_true }}
                                    </td>
                                    <td>
                                        @if ($item->status_item_count_false)
                                            @if ($date_now >= $item->date_end)
                                                <span class="badge badge-light-danger fs-8 fw-bolder">Expired</span>
                                            @else
                                                <span class="badge badge-light-danger fs-8 fw-bolder">Prosess
                                                    Pengembalian</span>
                                            @endif
                                        @else
                                            <span class="badge badge-light-success fs-8 fw-bolder">Success</span>
                                        @endif
                                        {!! $item->span_status_item !!}
                                    </td>
                                    {{-- <td>
                                        <button type="button" data-id="{{ $item->uuid }}"
                                            class="btn btn-primary btn-sm vdetails" data-bs-toggle="modal"
                                            data-bs-target="#actionModal">Details View</button>
                                    </td> --}}

                                    <td>
                                        <a href="{{ route('admin.pengembalian.edit', $item->uuid) }}"
                                            class="btn btn-primary btn-sm vdetails">Details Pengembalian</a>
                                    </td>
                                    <!--end::Email=-->
                                </tr>
                            @empty
                                <div class="card-body p-0">
                                    <!--begin::Wrapper-->
                                    <div class="card-px text-center py-20 my-10">
                                        <!--begin::Title-->
                                        <h2 class="fs-2x fw-bolder mb-10">Welcome!</h2>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <p class="text-gray-400 fs-4 fw-bold mb-10">There are no customers added yet.
                                            <br />Kickstart your CRM by adding a your first customer
                                        </p>
                                        <!--end::Description-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_add_customer">Add Customer</a>
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
@push('js')
    {{-- <script>
        $('#ok').click(function() {
            location.reload();
        });


        $(document).on('click', '.vdetails', function() {
            id = $(this).attr('data-id')
            $('.item-details tr').remove();
            $.ajax({
                url: ajaxUrlAdmin + 'pengembalian/' + id + '/edit',
                dataType: "JSON",
                type: "GET",
                success: function(result) {
                    $.each(result[0].peminjamanitem, function(k, v) {
                        detailsItem(v);
                    });
                }
            })
        })

        function detailsItem(v) {
            if (v.is_status == 'true') {
                checked = "checked";
            } else {
                checked = "";
            }

            html = `<tr>
                <td>

                    <img src="` + v.buku.image + `"
                        class="w-50px ms-n1" alt="">
                </td>
                <td class="ps-0">
                    <a href="#"
                        class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">` + v.buku.judul + `</a>
                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                        #XDG-1523</span>
                </td>
                <td>
                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">` + v.qty + `</span>
                </td>
                <td>
                    <select class="form-select" aria-label="Select example">
                        <option>Open this select keterangan</option>
                        <option value="tepat_waktu">Tepat Waktu</option>
                        <option value="terlambat">Terlambat</option>
                        <option value="rusak_or_hilang">Rusak atau Hilang</option>
                    </select>
                </td>
                <td class="text-end pe-0">
                    <div class="form-check form-check-custom form-check-solid form-switch mb-2"
                        style="display:block !important">
                        <input class="form-check-input checkedItem" id="status" type="checkbox"
                            name="" value="1" onClick="changeBox('` + v.is_status + `','` + v.uuid + `')" ` + checked + `>
                    </div>

                </td>
            </tr>`
            $('.item-details').append(html);
        }

        function changeBox($status, $uuid) {
            if ($status === "true") {
                $val = "false";
            } else {
                $val = "true";
            }
            $.ajax({
                url: ajaxUrlAdmin + 'pengembalian/status-item',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    uuid: $uuid,
                    value: $val
                },
                success: function(e) {
                    toastr.success('', 'Setting Update Success', {
                        "showMethod": "slideDown",
                        "hideMethod": "slideUp",
                        timeOut: 2000
                    });
                }
            })

        }
    </script> --}}
@endpush
