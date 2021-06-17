<nav class="admin-dashboard-sidebar menu-transition py-1" id="admin-dashboard-sidebar">
    <ul class="list-no-decoration list-menu">
        <li id="home">
            <a href="<?= site_url('dashboard/') ?>">
                <i class="fas fa-chart-pie"></i>
                <span>Home</span>
            </a>
        </li>
        <li id="restoran">
            <a href="<?= site_url('dashboard/restoran/') ?>">
                <i class="fas fa-hotel "></i>
                <span>Restoran</span>
            </a>
        </li>
        <li id="menu">
            <a href="<?= site_url('dashboard/menu/') ?>">
                <i class="fas fa-pizza-slice"></i>
                <span>Menu</span>
            </a>
        </li>
        <li id="pengaturan">
            <a href="<?= site_url('dashboard/pengaturan/') ?>">
                <i class="fas fa-cog"></i>
                <span>Pengaturan</span>
            </a>
        </li>
    </ul>
</nav>