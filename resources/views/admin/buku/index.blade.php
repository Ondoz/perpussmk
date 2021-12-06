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
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                        <!--begin::Add customer-->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Tambah Buku</button>
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
                                    <div class=""><b>{{$item->title}}</b></div>
                                </div>
                                <div class="col-4">
                                    <div class="">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions</a>
                                         <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3 edit" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_customer" data-uuid={{$item->uuid}}>View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3 delete" data-bs-toggle="modal" data-bs-target="#confirmModal" data-uuid={{$item->uuid}}>Delete</a>
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
                                <a class="d-block overlay" data-fslightbox="lightbox-basic" href="{{$item->image}}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-300px" style="background-image:url({{$item->image}})"></div>
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
                            @foreach ($item->kategori as $value)
                            <a href="#" class="text-gray-600 fs-8">{{$value->name}} </a>
                            @if($loop->last)
                            .
                            @elseif($loop->remaining == 1)
                            &nbsp;&amp;&nbsp;
                                @elseif(!$loop->first)
                                    ,&nbsp;
                                @endif
                            @endforeach
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
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Tambah Buku</a>
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
        </div>

        <!--begin::Modals-->
        <!--begin::Modal - Customers - Add-->
        <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->
                    <form class="form" action="{{route('admin.buku.store')}}" id="kt_modal_add_customer_form" enctype="multipart/form-data" method="post">
                        @csrf
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_customer_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Add Buku</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17">
                            <!--begin::Scroll-->
                            <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Title</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="" name="title" placeholder="Title" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Description</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="" name="description" placeholder="Description" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">
                                        <span class="required">Kategori</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Kategori"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select aria-label="Select a Kategori" data-control="select2" data-placeholder="Select Kategori" data-dropdown-parent="#kt_modal_add_customer" class="form-select form-select-solid" multiple="multiple" name="kategori[]">
                                        @foreach ($kategori as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                       @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Number Of Book</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" class="form-control form-control-solid" placeholder="" name="jumlah_buku" placeholder="Description" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <div class=" mb-7 fv-row text-center">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-empty" data-kt-image-input="true" style="background-image: url(/assets/admin/media/avatars/blank.png)">
                                        <!--begin::Image preview wrapper-->
                                        <div class="image-input-wrapper w-125px h-125px"></div>
                                        <!--end::Image preview wrapper-->

                                        <!--begin::Edit button-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                           data-kt-image-input-action="change"
                                           data-bs-toggle="tooltip"
                                           data-bs-dismiss="click"
                                           title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>

                                            <!--begin::Inputs-->
                                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />

                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Edit button-->

                                        <!--begin::Cancel button-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                           data-kt-image-input-action="cancel"
                                           data-bs-toggle="tooltip"
                                           data-bs-dismiss="click"
                                           title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel button-->

                                         <!--begin::Remove button-->
                                         <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                         data-kt-image-input-action="remove"
                                         data-bs-toggle="tooltip"
                                         data-bs-dismiss="click"
                                         title="Remove avatar">
                                         <i class="bi bi-x fs-2"></i>
                                     </span>
                                    </div>
                                    <!--end::Image input-->
                                </div>
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->
                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
        <!--end::Modal - Customers - Add-->
        <!--end::Modals-->

        <!--begin::Modal - Kategori - Edit-->
        <div class="modal fade" id="kt_modal_edit_customer" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->
                     <!--begin::Form-->
                     <form class="form" action="#" id="form-edit" enctype="multipart/form-data" method="post">
                        {{method_field('PUT')}}
                        @csrf
                        <input type="hidden" name="uuid" id="uuid" value="">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_buku_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Edit Buku</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_modal_add_buku_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17">
                            <!--begin::Scroll-->
                            <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_buku_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_buku_header" data-kt-scroll-wrappers="#kt_modal_edit_buku_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Title</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="" id="title" name="title" placeholder="Title" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Description</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="" id="description" name="description" placeholder="Description" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                     <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">
                                        <span class="required">Kategori</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Kategori"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select aria-label="Select a Kategori" data-control="select2" data-placeholder="Select Kategori" data-dropdown-parent="#kt_modal_edit_customer" class="form-select form-select-solid kategori" multiple="multiple" name="kategori[]">
                                        @foreach ($kategori as $item)
                                            <option value="{{$item->id}}" >{{$item->name}}</option>
                                       @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Number Of Book</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" class="form-control form-control-solid" placeholder="" id="jumlah_buku" name="jumlah_buku" placeholder="Description" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <div class=" mb-7 fv-row text-center">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-empty" data-kt-image-input="true" style="background-image: url(/assets/admin/media/avatars/blank.png)">
                                        <!--begin::Image preview wrapper-->
                                        <div class="image-input-wrapper w-125px h-125px"></div>
                                        <!--end::Image preview wrapper-->

                                        <!--begin::Edit button-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                           data-kt-image-input-action="change"
                                           data-bs-toggle="tooltip"
                                           data-bs-dismiss="click"
                                           title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>

                                            <!--begin::Inputs-->
                                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />

                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Edit button-->

                                        <!--begin::Cancel button-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                           data-kt-image-input-action="cancel"
                                           data-bs-toggle="tooltip"
                                           data-bs-dismiss="click"
                                           title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel button-->

                                         <!--begin::Remove button-->
                                         <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                         data-kt-image-input-action="remove"
                                         data-bs-toggle="tooltip"
                                         data-bs-dismiss="click"
                                         title="Remove avatar">
                                         <i class="bi bi-x fs-2"></i>
                                     </span>
                                    </div>
                                    <!--end::Image input-->
                                </div>
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->
                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_modal_delete_buku_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                    <!--end::Form-->
                </div>
            </div>
        </div>
        <!--end::Modal - Kategori - Edit-->

        <!--begin::Modal - Kategori - Delete-->
        <div class="modal fade" id="confirmModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                        <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
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
                        <button type="button" class="btn btn-light-primary font-weight-bold" id="cancel"  data-bs-dismiss="modal" >Close</button>
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

    var id_kategori = [];
    $(document).on('click', '.edit', function(){
        id = $(this).attr('data-uuid');
        $('#form-edit').attr('action', ajaxUrlAdmin + 'buku/' + id);
        $.ajax({
            url: ajaxUrlAdmin + 'buku/' + id + '/edit',
            dataType: "JSON",
            type: "GET",
            success: function(result){
                $('#uuid').val(result.uuid);
                $("#title").val(result.title);
                $('#description').val(result.description)
                $('#jumlah_buku').val(result.jumlah_buku)
                if (result.kategori != null) {
                    $.each(result.kategori, function (k, v) {
                        id_kategori[k] = v.id;
                    });
                }
                $('.kategori').val(id_kategori).change();
            },
        });
    });

    $(document).on('click', '.delete', function(){
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
                _token: '{{csrf_token()}}',

            },
            beforeSend:function(){
                $('#ok').text('Deleting...');
            },
            success: function(e){
                window.location.href = "{{route('admin.buku.index')}}";
            }
        })
    });

</script>
@endpush

