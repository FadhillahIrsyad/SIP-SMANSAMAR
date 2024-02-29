<div class="section">
    <div class="sidebar-container">
        <div class="sidebar-content">
            <div class="logo">
                <img src="../assets/logo.png" alt="" class="">
                <div class="text-logo">
                    <a href="#" id="sub">SIP <br></a>
                    <a href="#" id="sub">SMANSAMAR</a>
                </div>
            </div>

            {{-- Super Admin --}}
            <ul class="nav">
                <li class="{{ Request::routeIs('dashboard') ? 'current' : '' }}">
                    <div class="menu">
                        <i class='bx bxs-dashboard'></i>
                        <div class="text-menu">
                            <a href="/dashboard">Dashboard</a>
                        </div>
                    </div>
                </li>
                <li class="{{ Request::routeIs('data-siswa') ? 'current' : '' }}">
                    <div class="menu">
                        <i class='bx bx-notepad'></i>
                        <div class="text-menu">
                            <a href="/data-siswa">Data Siswa</a>
                        </div>
                    </div>
                </li>
                <li class="{{ Request::routeIs('data-tamu') ? 'current' : '' }}">
                    <div class="menu">
                        <i class='bx bx-notepad'></i>
                        <div class="text-menu">
                            <a href="#">Data Tamu</a>
                        </div>
                    </div>
                </li>
                <li class="{{ Request::routeIs('penugasan') ? 'current' : '' }}">
                    <div class="menu">
                        <i class='bx bxs-contact'></i>
                        <div class="text-menu">
                            <a href="#">Penugasan</a>
                        </div>
                    </div>
                </li>
            </ul>

            {{-- Admin --}}
            {{-- <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Data Siswa</a></li>
                <li><a href="#">Data Tamu</a></li>
            </ul> --}}

            {{-- Siswa --}}
            {{-- <ul>
                <li><a href="#">Form Perizinan</a></li>
            </ul> --}}
        
            {{-- Satpam --}}
            {{-- <ul>
                <li><a href="#">Scan Barcode</a></li>
            </ul> --}}

        </div>
    </div>
</div>