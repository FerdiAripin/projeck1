<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('assets/compiled/svg/logo.svg') }}" alt="Logo">
                    </a>
                </div>
                <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="iconify" width="20" height="20" viewBox="0 0 21 21">
                        <!-- Theme Toggle Icon -->
                    </svg>
                </div>
            </div>
        </div>

        <nav class="mt-4">
            <ul class="list-unstyled">
                <li>
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="bi bi-house"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('jadwal') }}" class="nav-link">
                        <i class="bi bi-calendar"></i> Jadwal
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
