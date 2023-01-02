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
                        <form method="get" action="{{ route('admin.peminjaman.search') }}"
                            class="w-100 position-relative me-3" autocomplete="off">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <input type="text" data-kt-customer-table-filter="search" name="search"
                                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Peminjaman" />
                            </div>
                        </form>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <button type="button" class="btn btn-info " data-bs-toggle="modal"
                                data-bs-target="#scanModal">Scan QRcode</button>
                        </div>


                        <!--end::Toolbar-->
                    </div>
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
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">Tgl Peminjaman</th>
                                <th class="min-w-125px">Tgl Pengembalian</th>
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
                                        {!! $item->span_status !!}
                                    </td>
                                    <td>
                                        {{ $item->date_start }}
                                    </td>
                                    <td>
                                        {{ $item->date_end }}
                                    </td>
                                    <!--end::Email=-->
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    {{ $peminjaman->withQueryString()->links('vendor.pagination.bootstrap-4') }}

                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>

            <!--begin::Modals-->
            <div class="modal fade" id="scanModal" data-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="staticBackdrop" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Scan</h5>
                            <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary"
                                data-bs-dismiss="modal" aria-label="Close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                            rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <input type="hidden" name="uuid" id="uuid-delete" value="">
                        <div class="modal-body">
                            <!--end::Modals-->
                            <div class="account">
                                <div class="container text-center">
                                    <div class="qrcode-left-body">
                                        <video id="reader" style="width: 100%; display:none;"></video>
                                        <div class="form-group formInput">
                                            <input type="text" class="form-control" name="code" id="code"
                                                placeholder="Unique Code">
                                        </div>
                                        <img class="qrcode-code" src="{{ asset('Scan.svg') }}" alt="">
                                        <select class="form-control mt-4 selectCam">
                                            <option value=""></option>
                                        </select>
                                        <a class="scan scanStart btn medium btn-primary" style="margin-top: 10px;"
                                            href="javascript:;">Mulai Scan QR Code</a>
                                        <a class="scan inputManual btn btn-light-primary font-weight-bold"
                                            style="margin-top: 10px;" href="javascript:;">Input Manual QR Code</a>
                                        <a class="scan submitManual btn medium btn-primary" style="margin-top: 10px;"
                                            href="javascript:;">Submit</a>
                                        <a class="scan switchToScan btn btn-light-primary font-weight-bold"
                                            style="margin-top: 10px;" href="javascript:;">Switch toScan</a>
                                        <a class="scan scanStop btn btn-light-primary font-weight-bold"
                                            style="margin-top: 10px; display: none;" href="javascript:;">Stop
                                            Scanning</a>
                                    </div>

                                    <div class="space-85"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
@push('js')
    <script>
        $(document).on('click', '.edit', function() {
            id = $(this).attr('data-uuid');
            $('#form-edit').attr('action', ajaxUrlAdmin + 'kategori/' + id);
            $.ajax({
                url: ajaxUrlAdmin + 'kategori/' + id + '/edit',
                dataType: "JSON",
                type: "GET",
                success: function(result) {
                    $("#uuid").val(result.uuid);
                    $('#name').val(result.name)
                },
            });
        });

        $(document).on('click', '.delete', function() {
            $('#ok').text('Ok');
            id = $(this).attr('data-uuid');
            $('#uuid-delete').val(id);
            document.getElementById("cancel").style.display = "";
        });

        $('#ok').click(function() {
            document.getElementById("cancel").style.display = "none";
            id = $('#uuid-delete').attr('value');
            $.ajax({
                url: ajaxUrlAdmin + 'kategori/' + id,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}',

                },
                beforeSend: function() {
                    $('#ok').text('Deleting...');
                },
                success: function(e) {
                    window.location.href = "{{ route('admin.kategori.index') }}";
                }
            })
        });
    </script>
@endpush
