@extends('layouts.admin.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <!--end::Card body-->
                <!--begin::Card header-->
                <div class="card-header border-0 py-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <form method="get" action="{{ route('admin.buku.search') }}" class="w-100 position-relative me-3"
                            autocomplete="off">
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
                                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
                            </div>
                        </form>
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add_customer">Tambah Buku</button>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->


            </div>
            <div class="row pt-10">
                @forelse ($buku as $item)
                    <div class="col-md-6 col-lg-3 col-xs-12 pb-10">
                        <div class="card shadow-sm">

                            <div class="card-body p-0 mb-10">
                                <div class="row px-4 my-6 align-items-center">
                                    <div class="col-8">
                                        <div class=""><b>{{ Str::limit($item->judul, 20) }}</b></div>
                                    </div>
                                    <div class="col-4">
                                        <div class="">
                                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions</a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3 edit" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_edit_customer"
                                                        data-uuid={{ $item->uuid }}>View</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3 delete" data-bs-toggle="modal"
                                                        data-bs-target="#confirmModal"
                                                        data-uuid={{ $item->uuid }}>Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center px-4">
                                    {{-- <img class="mw-100 mh-300px card-rounded-bottom" alt="" src="{{$item->image}}"/> --}}
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-basic" href="{{ $item->image }}">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-300px"
                                            style="background-image:url({{ $item->image }})"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                            <i class="bi bi-eye-fill text-white fs-3x"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                </div>
                            </div>
                            <div class="card-footer">
                                <span class="text-gray-600 fs-8">Kategori : </span>
                                <a href="#" class="text-gray-600 fs-8">{{ $item->kategori->name ?? 'Kosong' }} </a>
                            </div>
                        </div>
                    </div>
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
                            <img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sigma-1/2.png" />
                        </div>
                        <!--end::Illustration-->
                    </div>
                @endforelse
                {{ $buku->withQueryString()->links('vendor.pagination.bootstrap-4') }}
            </div>


            <!--begin::Modal - Customers - Add-->
            @include('admin.buku.create')
            <!--end::Modal - Customers - Add-->


            <!--begin::Modal - Kategori - Edit-->
            @include('admin.buku.edit')
            <!--end::Modal - Kategori - Edit-->

            <!--begin::Modal - Kategori - Delete-->
            <div class="modal fade" id="confirmModal" data-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="staticBackdrop" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                            <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary"
                                data-bs-dismiss="modal" aria-label="Close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <input type="hidden" name="uuid" id="uuid-delete" value="">
                        <div class="modal-body">
                            Are you sure want to delete this item ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" id="cancel"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary font-weight-bold" id="ok">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Modal - Kategori - Edit-->
        </div>
        <!--end::Container-->
    </div>
@endsection
@push('js')
    <script>
        $('#kt_modal_edit_customer').on('hidden.bs.modal', function() {
            $('#kt_modal_edit_customer form')[0].reset();
        });

        var id_kategori = [];
        $(document).on('click', '.edit', function() {
            id = $(this).attr('data-uuid');
            $('#form-edit').attr('action', ajaxUrlAdmin + 'buku/' + id);
            $.ajax({
                url: ajaxUrlAdmin + 'buku/' + id + '/edit',
                dataType: "JSON",
                type: "GET",
                success: function(result) {
                    $("#judul").val(result.judul);
                    $("#penulis").val(result.penulis);
                    $("#kategori").val(result.kategori_id).change();
                    $("#tgl_rilis").val(result.detail_buku.tgl_rilis);
                    $("#bahasa").val(result.detail_buku.bahasa);
                    $("#negara").val(result.detail_buku.negara);
                    $("#jumlah_halaman").val(result.detail_buku.jumlah_halaman);
                    $("#jumlah_buku").val(result.detail_buku.jumlah_buku);
                    $("#penerbit").val(result.detail_buku.penerbit);
                    $("#description").val(result.detail_buku.description);
                    $("#image").val(result.image);
                    $('#uuid').val(result.uuid);
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
                url: ajaxUrlAdmin + 'buku/' + id,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}',

                },
                beforeSend: function() {
                    $('#ok').text('Deleting...');
                },
                success: function(e) {
                    window.location.href = "{{ route('admin.buku.index') }}";
                }
            })
        });
    </script>
@endpush
