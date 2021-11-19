<div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
	<!--begin::Container-->
	<div class="header-container container-xxl">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
			<!--begin::Heading-->
			<h1 class="d-flex flex-column text-dark fw-bolder my-1">
                <span class="text-white fs-1">Dashboard</span>
                <small class="text-gray-600 fs-6 fw-normal pt-2">Create a store with #YDR-124-346 code</small>
             </h1>
			<!--end::Heading-->
		</div>
		<!--end::Page title=-->
		<!--begin::Wrapper-->
		<div class="d-flex align-items-center flex-wrap">
			<!--begin::Action-->
			<div class="d-flex align-items-center py-3 py-lg-0">
				<div class="me-3">
					@auth
					<a href="#" class="btn btn-icon btn-custom btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg--> <span class="svg-icon svg-icon-1 svg-icon-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                    fill="black" />
                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                    fill="black" />
                            </svg>
                        </span>
						<!--end::Svg Icon-->
					</a>
					<!--begin::Menu-->
					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content d-flex align-items-center px-3">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px me-5">
									<img alt="Logo" src="https://ui-avatars.com/api/?name= {{urlencode(auth()->user()->name)}}" />
								</div>
								<!--end::Avatar-->
								<!--begin::Username-->
								<div class="d-flex flex-column">
									<div class="fw-bolder d-flex align-items-center fs-5">{{auth()->user()->name}} <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
									</div> <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{auth()->user()->email}}</a>
								</div>
								<!--end::Username-->
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu separator-->
						<div class="separator my-2"></div>
						<!--end::Menu separator-->
						<!--begin::Menu item-->
						<div class="menu-item px-5"> <a href="../../demo9/dist/account/overview.html" class="menu-link px-5">My
                                Profile</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-5"> <a href="../../demo9/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu-->
					@endauth
				</div>
			</div>
			<!--end::Action-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Container-->
	<div class="header-offset"></div>
</div>