<div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header">
	<!--begin::Container-->
	<div class="header-container container-xxl">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
			<!--begin::Heading-->
			<h1 class="d-flex flex-column text-dark fw-bolder my-1">
                {{-- <span class="text-white fs-1">Dashboard</span> --}}
                <ul class="nav">
                    <li class="nav-item">
                        <a class="btn btn-color-light btn-custom  fw-bolder me-1" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-color-light fw-bolder me-1" href="">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-color-light fw-bolder me-1 " href="">Infomasi</a>
                    </li>
                </ul>
             </h1>
			<!--end::Heading-->
		</div>
		<!--end::Page title=-->
		<!--begin::Wrapper-->
		<div class="d-flex align-items-center flex-wrap">
            <div class="header-search py-3 py-lg-0">
                <div id="kt_header_search" class="d-flex align-items-center show menu-dropdown" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start" data-kt-menu-flip="bottom" data-kt-search="true">
                    <form data-kt-search-element="form" class="w-100 position-relative me-3" autocomplete="off">
                        <input type="hidden">
                        <span class="svg-icon svg-icon-2 search-icon position-absolute top-50 translate-middle-y ms-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"></path>
                                <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control custom-form-control ps-13" name="search" value="" placeholder="Find Goods" data-kt-search-element="input">

                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
                            <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                </svg>
                            </span>
                        </span>
                    </form>
                </div>
            </div>
            <div class="me-3">
                <a href="#" class="btn btn-icon btn-custom btn-active-color-primary position-relative" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-1 svg-icon-white text-white">
                        <i class="bi bi-bag-fill text-white fs-2"></i>
                    </span>
                    <span class="bullet bullet-dot bg-success h-15px w-15px position-absolute translate-middle top-0 start-100 text-white"><span style="font-size: 10px; display:block">1</span></span>
                </a>
                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" style="">
                    <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url({{asset('assets/admin/media/misc/pattern-1.jpg')}})">
                        <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                        <span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
                        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                            <div class="d-flex flex-column px-9">
                                <div class="pt-10 pb-0">
                                    <h3 class="text-dark text-center fw-bolder">Get Pro Access</h3>
                                    <div class="text-center text-gray-600 fw-bold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
                                    <div class="text-center mt-5 mb-9">
                                        <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                    </div>
                                </div>
                                <div class="text-center px-4">
                                    <img class="mw-100 mh-200px" alt="image" src="/metronic8/demo9/assets/media/illustrations/sigma-1/1.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!--begin::Action-->
            @guest
                <a class="nav-link btn btn-light-primary me-3" href="{{ route('login') }}">{{ __('Login') }}</a>

                @if (Route::has('register'))
                    <a class="nav-link btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <div class="d-flex align-items-center py-3 py-lg-0">
                    <div class="me-3">
                        @auth
                        <a href="#" class="btn btn-icon btn-custom" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <span class="svg-icon svg-icon-1 svg-icon-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                        fill="black" />
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                        fill="black" />
                                </svg>
                            </span>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="https://ui-avatars.com/api/?name= {{urlencode(auth()->user()->name)}}" />
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">{{auth()->user()->name}} <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                                        </div> <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{auth()->user()->email}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-2"></div>
                            <div class="menu-item px-5"> <a href="../../demo9/dist/account/overview.html" class="menu-link px-5">My
                                    Profile</a>
                            </div>
                            <div class="menu-item px-5">
                                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                                    <span class="menu-link px-5">Sign Out</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        @endauth
                    </div>
                </div>
            @endguest
			<!--end::Action-->
		</div>
		<!--end::Wrapper-->
	</div>

	<!--end::Container-->
	<div class="header-offset"></div>

</div>
