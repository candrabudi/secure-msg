<nav class="side-nav hidden w-[100px] overflow-x-hidden px-5 pb-16 pt-8 md:block xl:w-[250px]">
    <ul style="font-size: 16px;">
        <li>
            <a href="{{ route('dashboard') }}"
                class="side-menu {{ request()->routeIs('dashboard') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>

        @include('layouts.components.desktop.menu-management-user')
        @include('layouts.components.desktop.menu-master-data')
    </ul>
</nav>
