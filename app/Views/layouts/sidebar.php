        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Bina Bangsa</div>
            </a>

            <?php
                $role = session()->get('role_id'); // Mengambil role_id dari session

                if ($role == 1) {
                    $avatar = '<i class="fas fa-user-shield"></i>'; // Icon untuk Admin
                    $roleName = 'Admin';
                } elseif ($role == 2) {
                    $avatar = '<i class="fas fa-chalkboard-teacher"></i>'; // Icon untuk Guru
                    $roleName = 'Guru';
                } else {
                    $avatar = '<i class="fas fa-user-graduate"></i>'; // Icon untuk Siswa
                    $roleName = 'Siswa';
                }
                ?>

                <!-- Sidebar - User Avatar -->
                <div class="sidebar-brand">
                    <?= $avatar ?> <!-- Menampilkan icon -->
                    <span><?= $roleName ?></span>
                </div>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">
        <?php if (session()->get('role_id') == 1): ?>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('kelola-guru') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Manajemen Guru</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('kelola-siswa') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Manajemen Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('kelola-nilai') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Mata Pelajaran dan Jadwal</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('kelola-nilai') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Laporan Nilai Siswa</span>
                </a>
            </li>

            <hr class="sidebar-divider my-0">

        <?php elseif (session()->get('role_id') == 2): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('kelola-nilai') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Manajemen Nilai</span>
                </a>
            </li>
            <hr class="sidebar-divider my-0">    

        <?php elseif (session()->get('role_id') == 3): ?>
            <!-- Nav Item - Components -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('siswa/nilai') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Nilai</span>
                </a>
            </li>
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Utilities -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('siswa/jadwal') ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Jadwal Pelajaran</span>
                </a>
            </li>
            <hr class="sidebar-divider">

        <?php endif; ?>


        <div class="text-center d-none d-md-inline mt-4">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        </ul>
        <!-- End of Sidebar -->