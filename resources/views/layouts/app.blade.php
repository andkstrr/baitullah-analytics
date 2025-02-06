<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baitullah Analytics</title>

    {{-- WEB ICON --}}
    <link rel="website icon" href="{{ asset('assets/images/logo/Logo Baitullah.png') }}">

    {{-- FASTBOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- AOS CSS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
    <button class="toggle-btn" id="menuToggle"><i class="fas fa-bars"></i></button>
    <div class="wrapper d-flex">
        <!-- SIDEBAR -->
        <div class="sidebar" id="sidebar">
            {{-- LOGO --}}
            <img src="{{ asset('assets/images/logo/Baitullah Analytics.png') }}" alt="Baitullah Analytics" class="img-fluid" width="160">

            {{-- KATEGORI NAVIGASI GENERAL --}}
            <p class="fw-semibold fs-sm text-gray mt-7 px-2">General</p>
            <ul class="nav flex-column gap-2">
                <li class="nav-item"><a href="{{ route('BCI.analytics.dashboard') }}" class="nav-link active"><i class="fas fa-th-large"></i>Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('BCI.analytics.notifikasi') }}" class="nav-link text-gray"><i class="fas fa-bell"></i>Notification</a></li>
            </ul>

            {{-- KATEGORI NAVIGASI ANALYTICS --}}
            <p class="fw-semibold fs-sm text-gray mt-8 px-2">Analytics</p>
            <ul class="nav flex-column gap-2">
                <li class="nav-item"><a href="#" class="nav-link text-gray"><i class="fas fa-users"></i>Monitoring</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-gray"><i class="fas fa-cogs"></i>Application</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-gray"><i class="fas fa-chart-line"></i>Report</a></li>
            </ul>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-content mt-4">
                <div class="content-nav d-flex justify-content-between">
                    {{-- TITLE --}}
                    <div class="content-title d-flex align-items-end gap-3">
                        <h2 class="fw-semibold fs-2 text-black">@yield('title-page')</h2>

                        {{-- KATEGORI WAKTU --}}
                        <div class="dropdown">
                            <button class="btn-time dropdown-toggle fs-xs px-3 py-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              This Month
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a class="dropdown-item text-black" href="#">1 Bulan Terakhir</a></li>
                              <li><a class="dropdown-item text-black" href="#">3 Bulan Terakhir</a></li>
                              <li><a class="dropdown-item text-black" href="#">1 Tahun Terakhir</a></li>
                            </ul>
                        </div>
                    </div>

                    {{-- KATEGORI WEB/APK --}}
                    <div class="content-title d-flex align-items-center gap-4">
                        <div class="app-category">
                            <h6 class="fw-semibold fs-xs text-end text-gray mb-0">Opened Now</h6>
                            <div class="app-name d-flex gap-2">
                                <img src="{{ asset('assets/images/logo/Logo Baitullah.png') }}" alt="Logo Baitullah" width="20" height="20">
                                <p class="fw-semibold text-black fs-6 mb-0">@yield('app-name')</p>
                            </div>
                        </div>

                        {{-- SEARCH BOX --}}
                        <div class="search-box d-flex align-items-center px-2 py-2 rounded-3">
                            <input type="text" id="searchInput" placeholder="Search">
                            <i class="fas fa-search fa-xs px-3"></i>
                        </div>
                    </div>

                </div>
            </div>

            {{-- CONTENT --}}
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <script type="module" src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    @stack('script')
</body>
</html>
