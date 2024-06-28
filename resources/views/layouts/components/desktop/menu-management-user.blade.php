<li style="margin-top: 20px; margin-bottom: -20px;">
    <a  class="side-menu">
            Managament User
    </a>
</li>
<li class="side-nav__divider my-6"></li>
<li>
    <a href="javascript:;" class="side-menu">
        <div class="side-menu__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user" class="lucide lucide-user stroke-1.5 w-5 h-5 mx-auto block"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </div>
        <div class="side-menu__title">
            Satgas
        </div>
    </a>
</li>
<li>
    <a href="javascript:;" class="side-menu">
        <div class="side-menu__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user" class="lucide lucide-user stroke-1.5 w-5 h-5 mx-auto block"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </div>
        <div class="side-menu__title">
            Presiden
        </div>
    </a>
</li>
<li>
    <a href="{{ route('management.central') }}"
    class="side-menu {{ request()->routeIs('management.central') || request()->routeIs('management.central.create') ? 'side-menu--active' : '' }}">
        <div class="side-menu__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user" class="lucide lucide-user stroke-1.5 w-5 h-5 mx-auto block"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </div>
        <div class="side-menu__title">
            Pusat
        </div>
    </a>
</li>
<li>
    <a href="{{ route('management.parent') }}"
    class="side-menu {{ request()->routeIs('management.parent') || request()->routeIs('management.parent.create') ? 'side-menu--active' : '' }}">
        <div class="side-menu__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user" class="lucide lucide-user stroke-1.5 w-5 h-5 mx-auto block"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </div>
        <div class="side-menu__title">
            Induk
        </div>
    </a>
</li>
<li>
    <a href="{{ route('management.subparent') }}"
    class="side-menu {{ request()->routeIs('management.subparent') || request()->routeIs('management.subparent.create') ? 'side-menu--active' : '' }}">
        <div class="side-menu__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user" class="lucide lucide-user stroke-1.5 w-5 h-5 mx-auto block"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </div>
        <div class="side-menu__title">
            Sub Induk
        </div>
    </a>
</li>
<li>
    <a href="javascript:;" class="side-menu">
        <div class="side-menu__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user" class="lucide lucide-user stroke-1.5 w-5 h-5 mx-auto block"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </div>
        <div class="side-menu__title">
            Koordinator
        </div>
    </a>
</li>
<li>
    <a href="javascript:;" class="side-menu">
        <div class="side-menu__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user" class="lucide lucide-user stroke-1.5 w-5 h-5 mx-auto block"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </div>
        <div class="side-menu__title">
            Sub Koordinator
        </div>
    </a>
</li>
<li>
    <li>
        <a href="{{ route('management.member') }}"
        class="side-menu {{ request()->routeIs('management.member') || request()->routeIs('management.member.create') ? 'side-menu--active' : '' }}">
        <div class="side-menu__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user" class="lucide lucide-user stroke-1.5 w-5 h-5 mx-auto block"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </div>
        <div class="side-menu__title">
            Anggota
        </div>
    </a>
</li>