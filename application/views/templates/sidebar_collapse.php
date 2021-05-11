<?php
$show = $this->db->query("SELECT user_menu.id FROM user_menu JOIN user_sub_menu ON user_menu.id = user_sub_menu.menu_id WHERE title LIKE '%$title%'")->row_array();
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('assets/img/logo_vertical.png'); ?>" width="50" alt="">
            <!-- <i class="fas fa-bolt"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">
            <p class="text-uppercase mt-2">
                <font class="text-capitalize">Si-</font>Ceo
            </p>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider ">

    <!-- Query Menu -->
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT user_menu.id, menu, menu_icon FROM 
    user_menu JOIN user_access_menu on user_menu.id = user_access_menu.menu_id
    WHERE user_access_menu.role_id = $role_id ORDER BY user_menu.menu_order ASC
    ";

    $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- Looping Menu -->
    <?php foreach ($menu as $m) : ?>
        <!-- Sub_menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#<?= str_replace(' ', '', $m['menu']); ?>" aria-expanded="true" aria-controls="collapseTwo">
                <i class="<?= $m['menu_icon']; ?>"></i>
                <span><?= $m['menu']; ?></span>
            </a>
            <!-- collapse show comparison -->
            <?php if ($m['id'] == $show['id']) : ?>
                <div id="<?= str_replace(' ', '', $m['menu']); ?>" class="collapse show" aria-labelledby="headingTwo" aria-expanded="true" data-parent="#accordionSidebar">
                <?php else : ?>
                    <div id="<?= str_replace(' ', '', $m['menu']); ?>" class="collapse" aria-labelledby="headingTwo" aria-expanded="true" data-parent="#accordionSidebar">
                    <?php endif; ?>


                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu:</h6>
                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = "SELECT * FROM user_sub_menu JOIN user_menu
                    ON user_sub_menu.menu_id =  user_menu.id
                    WHERE user_sub_menu.menu_id = $menuId AND user_sub_menu.is_active = 1 ORDER BY user_sub_menu.menu_order ASC";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                        <?php foreach ($subMenu as $sm) : ?>
                            <?php if ($title == $sm['title']) : ?>
                                <a class="collapse-item active text-wrap" style="font-size: 12px;" href="<?= base_url($sm['url']); ?>"> <i class="<?= $sm['icon']; ?>"></i>
                                    <?= $sm['title']; ?></a>
                            <?php else : ?>
                                <a class="collapse-item text-wrap" style="font-size: 12px;" href="<?= base_url($sm['url']); ?>"> <i class="<?= $sm['icon']; ?>"></i>
                                    <?= $sm['title']; ?></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    </div>
                    <hr class="sidebar-divider mt-1">
        </li>
    <?php endforeach; ?>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
    <!-- end loo submenu -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->