<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <ul>
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="{{ route('admin.slider') }}" class="side-menu side-menu{{ request()->is("admin/slider") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="layers"></i></div>
                <div class="side-menu__title"> Slider</div>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.objects.index') }}" class="side-menu side-menu{{ request()->is("admin/objects") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="home"></i></div>
                <div class="side-menu__title"> Objects
                    <div class="side-menu__sub-icon transform rotate-180">
                        <a href="javascript:;.html" class="side-menu side-menu--active">
                            <i data-lucide="chevron-down"></i>
                        </a>
                    </div>
                </div>
            </a>
            <ul style="display: none">
                <li>
                    <a href="side-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Overview 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Overview 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Overview 3 </div>
                    </a>
                </li>
                <li>
                    <a href="index.html" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Overview 4 </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('admin.objects.index') }}" class="side-menu side-menu{{ request()->is("admin/objects") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="home"></i></div>
                <div class="side-menu__title"> Objects</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.features') }}" class="side-menu">
                <div class="side-menu__icon"><i data-lucide="inbox"></i></div>
                <div class="side-menu__title">Features</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.services') }}" class="side-menu">
                <div class="side-menu__icon"><i class="bi bi-tools" style="font-size: 23px"></i></div>
                <div class="side-menu__title"> Services</div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-inbox.html" class="side-menu">
                <div class="side-menu__icon"><i data-lucide="inbox"></i></div>
                <div class="side-menu__title"> Clients</div>
            </a>
        </li>

    </ul>
</nav>
<!-- END: Side Menu -->
