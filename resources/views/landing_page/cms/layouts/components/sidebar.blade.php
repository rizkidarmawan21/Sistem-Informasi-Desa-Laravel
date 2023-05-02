<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3">CMS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/cms">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <!-- collapsed -->
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#informasi"
            aria-expanded="true" aria-controls="informasi">
            <i class="fas fa-fw fa-cog"></i>
            <span>Informasi</span>
        </a>
        <div id="informasi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner roun ded">
                <h6 class="collapse-header">Informasi</h6>
                <a class="collapse-item {{ set_active(['cms.berita.index', 'cms.berita.create']) }}" class="collapse-item"
                    href="{{ route('cms.berita.index') }}">Berita</a>

            </div>
        </div>

    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
