<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <?php if (roleAkses(session()->get('iduser'), 'dashboard')) : ?>
            <li class="nav-item">
                <a class="nav-link <?php echo set_active('dashboard') ?>" href="<?= base_url('dashboard'); ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Surat Page Nav -->
        <?php endif; ?>
        <li class="nav-heading">Menu</li>
        <?php if (roleAkses(session()->get('iduser'), 'surat')) : ?>
            <li class="nav-item">
                <a class="nav-link <?php echo set_active('surat') ?>" href="<?= base_url('surat'); ?>">
                    <i class="bi bi-envelope"></i>
                    <span>Surat</span>
                </a>
            </li><!-- End Surat Page Nav -->
        <?php endif; ?>
        <?php if (roleAkses(session()->get('iduser'), 'perjanjian')) : ?>
            <li class="nav-item">
                <a class="nav-link <?php echo set_active('perjanjian') ?>" href="<?= base_url('perjanjian'); ?>">
                    <i class="bi bi-people-fill"></i>
                    <span>Perjanjian</span>
                </a>
            </li><!-- End Contact Page Nav -->
        <?php endif; ?>
        <?php if (roleAkses(session()->get('iduser'), 'invoice')) : ?>
            <li class="nav-item">
                <a class="nav-link <?php echo set_active('invoice') ?>" href="<?= base_url('invoice'); ?>">
                    <i class="bi bi-card-list"></i>
                    <span>Invoice</span>
                </a>
            </li><!-- End Register Page Nav -->
        <?php endif; ?>
        <?php if (roleAkses(session()->get('iduser'), 'pengaturan')) : ?>
            <li class="nav-item">
                <a class="nav-link <?php echo set_active('pengaturan') ?>" href="<?= base_url('pengaturan'); ?>">
                    <i class="bi bi-gear-fill"></i>
                    <span>Pengaturan</span>
                </a>
            </li><!-- End Login Page Nav -->
        <?php endif; ?>

        <!-- <li class="nav-item">
            <a class="nav-link " data-bs-target="#role-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-shield-lock"></i><span>Role</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="role-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('user'); ?>" class="active">
                        <i class="bi bi-circle"></i><span>User</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('menu'); ?>" class="active">
                        <i class="bi bi-circle"></i><span>Menu</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('menu-role'); ?>">
                        <i class="bi bi-circle"></i><span>Menu Role</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('role'); ?>">
                        <i class="bi bi-circle"></i><span>Role</span>
                    </a>
                </li>
            </ul>
        </li> -->
    </ul>

</aside>
<!-- End Sidebar-->