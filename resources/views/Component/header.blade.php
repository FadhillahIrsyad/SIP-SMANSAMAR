<div class="header-section">
    <div class="header-container">
        <div class="header-content">
            <div class="left">
                <div class="hamburger">
                    <i class='bx bx-menu' id="side-button" onclick="openSidebar()"></i>
                </div>
                <h2>{{Route::currentRouteName();}}</h2>
            </div>
            <div class="right">
                <div class="user-info">
                    <p class="name">{{Auth::user()->name}}</p>
                    <p class="role">{{Auth::user()->id_role}}</p>
                </div>
                <div class="user-img" >
                    <img src="../assets/logo.png" alt="" id="user-img">
                </div>
            </div>
        </div>
    </div>
    <div class="user-menu" id="user-menu">
        <ul>
            <li>
                <div class="list-menu">
                    <i class='bx bxs-dashboard'></i>
                    <div class="list-menu-text">
                        <a href="#">Profile</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="list-menu">
                    <i class='bx bxs-dashboard'></i>
                    <div class="list-menu-text">
                        <a href="/post-logout">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>