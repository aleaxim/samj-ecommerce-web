<ul>
    <li class="nav-item @if (request()->routeIs('adminDashboard')) active @endif">
        <a href="{{ route('adminDashboard') }}">
            <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22">
                    <path
                        d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                </svg>
            </span>
            <span class="text">{{ __('Dashboard') }}</span>
        </a>
    </li>

    <span class="divider">
        <hr>
    </span>

    <li class="nav-item @if (request()->routeIs('admins.index')) active @endif">
        <a href="{{ route('admins.index') }}">
            <span class="icon">
                <svg fill="#1C2033" width="22" height="22" version="1.1" id="lni_lni-user"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                    <g>
                        <path
                            d="M32,36.8c8.3,0,15-6.7,15-15s-6.7-15-15-15c-8.3,0-15,6.7-15,15S23.7,36.8,32,36.8z M32,11.3c5.8,0,10.5,4.7,10.5,10.5
		S37.8,32.3,32,32.3c-5.8,0-10.5-4.7-10.5-10.5S26.2,11.3,32,11.3z" />
                        <path
                            d="M61.5,53.2C53.3,46.3,42.9,42.5,32,42.5S10.7,46.3,2.5,53.2c-0.9,0.8-1.1,2.2-0.3,3.2c0.8,0.9,2.2,1.1,3.2,0.3
		C12.8,50.4,22.2,47,32,47c9.8,0,19.2,3.4,26.5,9.6c0.4,0.4,0.9,0.5,1.5,0.5c0.6,0,1.3-0.3,1.7-0.8C62.5,55.4,62.4,54,61.5,53.2z" />
                    </g>
                </svg>

            </span>
            <span class="text">{{ __('Admins') }}</span>
        </a>
    </li>

    <li class="nav-item @if (request()->routeIs('users.index')) active @endif">
        <a href="{{ route('users.index') }}">
            <span class="icon">
                <svg fill="#1C2033" width="24" height="24" version="1.1" id="lni_lni-users"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                    <g>
                        <path
                            d="M21.8,36.8c6.9,0,12.4-5.6,12.4-12.4s-5.6-12.4-12.4-12.4S9.4,17.5,9.4,24.4S15,36.8,21.8,36.8z M21.8,16.4
		c4.4,0,7.9,3.6,7.9,7.9s-3.6,7.9-7.9,7.9c-4.4,0-7.9-3.6-7.9-7.9S17.4,16.4,21.8,16.4z" />
                        <path
                            d="M21.8,39.9c-7.2,0-14.1,2.9-19.4,8.3c-0.9,0.9-0.9,2.3,0,3.2c0.4,0.4,1,0.7,1.6,0.7c0.6,0,1.2-0.2,1.6-0.7
		c4.4-4.5,10.2-7,16.2-7c5.9,0,11.7,2.5,16.2,7c0.9,0.9,2.3,0.9,3.2,0c0.9-0.9,0.9-2.3,0-3.2C35.9,42.9,29,39.9,21.8,39.9z" />
                        <path
                            d="M47.3,36.8c4,0,7.3-3.3,7.3-7.3c0-4-3.3-7.3-7.3-7.3s-7.3,3.3-7.3,7.3C39.9,33.5,43.2,36.8,47.3,36.8z M47.3,26.6
		c1.6,0,2.8,1.3,2.8,2.8c0,1.6-1.3,2.8-2.8,2.8s-2.8-1.3-2.8-2.8C44.4,27.9,45.7,26.6,47.3,26.6z" />
                        <path
                            d="M61.5,45.6c-5.3-4.9-12.6-6.9-19.9-5c-1.2,0.3-1.9,1.5-1.6,2.7c0.3,1.2,1.6,1.9,2.7,1.6c5.8-1.5,11.6,0,15.7,3.9
		c0.4,0.4,1,0.6,1.5,0.6c0.6,0,1.2-0.2,1.6-0.7C62.5,47.9,62.4,46.5,61.5,45.6z" />
                    </g>
                </svg>


            </span>
            <span class="text">{{ __('Customers') }}</span>
        </a>
    </li>


    <li class="nav-item @if (request()->routeIs('orders.index')) active @endif">
        <a href="{{ route('orders.index') }}">
            <span class="icon">
                <svg fill="#1C2033" width="24" height="24" version="1.1" id="lni_lni-cart"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                    <g>
                        <path
                            d="M37.1,47.8c-4,0-7.2,3.2-7.2,7.2c0,4,3.2,7.2,7.2,7.2c4,0,7.2-3.2,7.2-7.2C44.3,51.1,41,47.8,37.1,47.8z M37.1,57.8
		c-1.5,0-2.7-1.2-2.7-2.7c0-1.5,1.2-2.7,2.7-2.7c1.5,0,2.7,1.2,2.7,2.7C39.8,56.5,38.5,57.8,37.1,57.8z" />
                        <path
                            d="M18.1,47.8c-4,0-7.2,3.2-7.2,7.2c0,4,3.2,7.2,7.2,7.2s7.2-3.2,7.2-7.2C25.3,51.1,22,47.8,18.1,47.8z M18.1,57.8
		c-1.5,0-2.7-1.2-2.7-2.7c0-1.5,1.2-2.7,2.7-2.7c1.5,0,2.7,1.2,2.7,2.7C20.8,56.5,19.6,57.8,18.1,57.8z" />
                        <path
                            d="M58.2,1.8h-5.4c-2.4,0-4.5,1.8-4.8,4.2l-1.6,11.5H6.9c-1,0-2,0.5-2.7,1.3c-0.6,0.8-0.9,1.9-0.6,2.9c0,0.1,0,0.1,0,0.2
		l6.2,18.7c0.4,1.4,1.7,2.4,3.2,2.4h27.6c3.7,0,6.9-2.8,7.4-6.5l4.2-29.9c0-0.2,0.2-0.3,0.4-0.3h5.4c1.2,0,2.3-1,2.3-2.3
		S59.4,1.8,58.2,1.8z M43.7,35.8c-0.2,1.5-1.5,2.6-3,2.6H13.9L8.5,22h37.2L43.7,35.8z" />
                    </g>
                </svg>

            </span>
            <span class="text">{{ __('Orders') }}</span>
        </a>
    </li>

    <li class="nav-item @if (request()->routeIs('products.index')) active @endif">
        <a href="{{ route('products.index') }}">
            <span class="icon">
                <svg fill="#1C2033" width="21" height="21" version="1.1" id="lni_lni-package"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                    <path
                        d="M62,21.3l-4.5-14c-0.8-2.6-3.3-4.4-6-4.4H13.1c-2.7,0-5.1,1.7-6,4.2l-5,14.1c-0.2,0.6-0.3,1.2-0.3,1.9v30.3
	c0,4.3,3.5,7.7,7.7,7.7h45.1c4.3,0,7.7-3.5,7.7-7.7V23C62.3,22.5,62.2,21.9,62,21.3z M53.2,8.7l3.7,11.6H34.3V7.4h17.2
	C52.2,7.4,53,7.9,53.2,8.7z M11.3,8.6c0.3-0.7,1-1.2,1.7-1.2h16.7v12.9H7.2L11.3,8.6z M54.5,56.6H9.5c-1.8,0-3.2-1.4-3.2-3.2V24.8
	h51.5v28.6C57.8,55.2,56.3,56.6,54.5,56.6z" />
                </svg>

            </span>
            <span class="text">{{ __('Products') }}</span>
        </a>
    </li>


    <li class="nav-item @if (request()->routeIs('payments.index')) active @endif">
        <a href="{{ route('payments.index') }}">
            <span class="icon">

                <svg fill="#1C2033" width="22" height="22" version="1.1" id="lni_lni-wallet"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                    <path
                        d="M55.8,21.3h-2.2v-7.4c0-1.9-0.9-3.8-2.5-4.9c-1.6-1.1-3.6-1.4-5.4-0.8l-37.6,13H7c-3.3,0-6,2.7-6,6v22.3c0,3.3,2.7,6,6,6
	h48.8c3.3,0,6-2.7,6-6V27.3C61.8,24,59.1,21.3,55.8,21.3z M47,12c0.6-0.2,1.3-0.1,1.8,0.3c0.5,0.4,0.8,1,0.8,1.6v7.4H20.3L47,12z
	 M55.8,51.5H7c-1.1,0-2-0.9-2-2V27.3c0-1.1,0.9-2,2-2h48.8c1.1,0,2,0.9,2,2v3.9H46.4c-4.1,0-7.4,3.3-7.4,7.4s3.3,7.4,7.4,7.4h11.4
	v3.6C57.8,50.6,56.9,51.5,55.8,51.5z M57.8,35.2v6.8H46.4c-1.9,0-3.4-1.5-3.4-3.4c0-1.9,1.5-3.4,3.4-3.4H57.8z" />
                </svg>


            </span>
            <span class="text">{{ __('Payments') }}</span>
        </a>
    </li>

    <span class="divider">
        <hr>
    </span>

    <li class="nav-item @if (request()->routeIs('about')) active @endif">
        <a href="{{ route('about') }}">
            <span class="icon">
                <svg width="22" height="22" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                    </path>
                </svg>
            </span>
            <span class="text">{{ __('About us') }}</span>
        </a>
    </li>

    <li class="nav-item nav-item-has-children">
        <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#ddmenu_1"
            aria-controls="ddmenu_1" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z">
                    </path>
                </svg>
            </span>
            <span class="text">Two-level menu</span>
        </a>
        <ul id="ddmenu_1" class="dropdown-nav collapse" style="">
            <li>
                <a href="#">Child menu</a>
            </li>
        </ul>
    </li>
</ul>
