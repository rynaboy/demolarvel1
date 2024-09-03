<link rel="stylesheet" href="{{ asset('assets/css/corporate-ui-dashboard.css') }}">



<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">




<style>

@import url('https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&display=swap');
*{

        font-family: "Battambang", system-ui;
        font-weight: 400;
        font-style: normal;
}
::-webkit-scrollbar {
    display: none;
}
</style>

<nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-2">
        <nav aria-label="breadcrumb" style="display: flex; justify-content: center; align-items: center; gap: 1rem">
                <a href="{{route('dashboard')}}">                            <img src="data:image/jpeg;base64,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" alt=""></a>
            <ol class="breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm text-dark active " style="font-weight: bold" aria-current="page"><?= $title ?></li>
            </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body bg-white  border-end-0 ">

                    </span>
                </div>
            </div>
            <div class="mb-0 font-weight-bold breadcrumb-text text-white">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="login" onclick="event.preventDefault();
                this.closest('form').submit();">
                        <button class="btn btn-sm  btn-white  mb-0 me-1" type="submit">ចាកចេញពីប្រព័ន្ធ</button>
                    </a>
                </form>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
