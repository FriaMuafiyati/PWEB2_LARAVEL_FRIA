<!-- Sidebar Start -->
<div class="sidebar pe-10 pb-500">
    <nav class="navbar bg-white navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"></i>BHP AMN</h5>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="/assets/img/gmbr2.jpeg" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100 ">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link"><i
                class="fa fa-home me-2"></i>Dashboard</a>
            <a href="{{ route('halaman.data_barang.index') }}" class="nav-item nav-link"><i
                    class="fa fa-th me-2"></i>Data Barang</a>


        </div>
    </nav>
</div>


<!-- Sidebar End -->
