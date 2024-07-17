<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_aside_mobile_toggle">

    <div class="aside-logo bg-white py-8" id="kt_aside_logo">
        <a href="{{ route('dashboard') }}" class="d-flex align-items-center">
            <img alt="Logo" src="{{ asset('images/logo.png') }}" class="w-90px logo"/>
        </a>
    </div>

    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
        <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true"
             data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
             data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
            <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary
                        menu-state-bullet-primary menu-arrow-gray-500 fw-bold"
                 id="#kt_aside_menu" data-kt-menu="true">

                <div class="menu-item p-2">
                    <a class="menu-link menu-center {{ request()->routeIs('clients.*') ? 'active bg-gray-200' : '' }}"
                       href="{{ route('dashboard') }}" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0"><i class="fa fa-users fs-2x"></i></span>
                        <span class="menu-title text-gray-700">Clients</span>
                    </a>
                </div>

                <div class="menu-item p-2">
                    <a class="menu-link menu-center {{ request()->routeIs('products.*') ? 'active bg-gray-200' : '' }}"
                       href="{{ route('dashboard') }}" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0"><i class="fa fa-boxes fs-2x"></i></span>
                        <span class="menu-title text-gray-700">Produits</span>
                    </a>
                </div>

                <div class="menu-item p-2">
                    <a class="menu-link menu-center {{ request()->routeIs('orders.*') ? 'active bg-gray-200' : '' }}"
                       href="{{ route('dashboard') }}" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0"><i class="fa fa-shipping-fast fs-2x"></i></span>
                        <span class="menu-title text-gray-700">Commandes</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="aside-footer flex-column-auto" id="kt_aside_footer">
        <div class="d-flex justify-content-center">

        </div>
    </div>
</div>
