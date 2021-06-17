<header class="admin-dashboard-header p-3">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <button class="btn p-0 shadow-none pr-5">
                    <i class="sidebar-trigger fas fa-bars" id="sidebar-trigger"></i>
                </button>
            </div>
            <div class="col-auto">
                <h1 class="h4 m-auto">Dashboard</h1>
            </div>
            <div class="col-auto">
                <button class="btn p-0 rounded-pill">
                    <img class="header-account-pict rounded-pill" src="<?= base_url(
                        'img/user.png'
                    ) ?>" alt="" srcset="" width="30px" height="30px">
                </button>

                <div class="account-pict-dropdown d-none bg-main-color-admin mt-1 p-2 px-4">
                    <a href="/auth/logout/">Keluar</a>
                </div>
            </div>
        </div>
    </div>
</header>