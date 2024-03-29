@extends('layouts.admin.app')
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
                        <form method="get" action="{{ route('admin.information.search') }}"
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
                                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Informasi" />
                            </div>
                        </form>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <!--begin::Add customer-->
                            <a href="{{ route('admin.information.create') }}" class="btn btn-primary">Created Informasi</a>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-customer-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger"
                                data-kt-customer-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
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
                                <th class="min-w-125px">Title</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @forelse ($information as $item)
                                <tr>
                                    <!--begin::Name=-->
                                    <td>
                                        {{ $information->total() - $loop->index - ($information->currentpage() - 1) * $information->perpage() }}
                                    </td>
                                    <!--end::Name=-->
                                    <!--begin::Email=-->
                                    <td>
                                        <a href=" #"
                                            class="text-gray-600 text-hover-primary mb-1">{{ $item->title }}</a>
                                    </td>
                                    <!--end::Email=-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('admin.information.edit', ['uuid' => $item->uuid]) }}"
                                                    class="menu-link px-3 edit">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3 delete" data-bs-toggle="modal"
                                                    data-bs-target="#confirmModal" data-uuid={{ $item->uuid }}>Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>

                            @empty
                            @endforelse

                        </tbody>
                        <!--end::Table body-->
                    </table>
                    {{ $information->withQueryString()->links('vendor.pagination.bootstrap-4') }}
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>



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

            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
@endsection


@push('js')
    <script>
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
                url: ajaxUrlAdmin + 'information/destroy/' + id,
                type: 'GET',
                data: {
                    _token: '{{ csrf_token() }}',

                },
                beforeSend: function() {
                    $('#ok').text('Deleting...');
                },
                success: function(e) {
                    window.location.href = "{{ route('admin.information.index') }}";
                }
            })
        });
    </script>
@endpush
