<div class="sidebar-section">
    <div class="sidebar-close" id="close-button">
        <i class='bx bx-chevron-left' id="side-close-button" onclick="closeSidebar()"></i>
    </div>
    <div class="sidebar-container" id="sidebar">
        <div class="sidebar-content">
            <div class="logo">
                <img src="../assets/logo.png" alt="" class="">
                <div class="text-logo">
                    <a href="#" id="sub">SIP <br></a>
                    <a href="#" id="sub">SMANSAMAR</a>
                </div>
            </div>
            

            {{-- Super Admin   --}}
            <ul class="nav">
                <li class="{{ Request::routeIs('Dashboard') ? 'current' : '' }}">
                    <div class="menu">
                        <i class='bx bxs-dashboard'></i>
                        <div class="text-menu">
                            <a href="/dashboard">Dashboard</a>
                        </div>
                    </div>
                </li>
                <li class="{{ Request::routeIs('Presensi Siswa') ? 'current' : '' }}">
                    <div class="menu">
                        <i class='bx bx-notepad'></i>
                        <div class="text-menu">
                            <a href="/data-siswa">Data Siswa</a>
                        </div>
                    </div>
                </li>
                <li class="{{ Request::routeIs('Presensi Tamu') ? 'current' : '' }}">
                    <div class="menu">
                        <i class='bx bx-notepad'></i>
                        <div class="text-menu">
                            <a href="#">Data Tamu</a>
                        </div>
                    </div>
                </li>
                <li class="{{ Request::routeIs('Penugasan') ? 'current' : '' }}">
                    <div class="menu">
                        <i class='bx bxs-contact'></i>
                        <div class="text-menu">
                            <a href="#">Penugasan</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>