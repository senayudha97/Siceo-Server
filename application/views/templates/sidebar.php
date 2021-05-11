<?php
if ($user['menu_style'] == 0) {
    include 'sidebar_normal.php';
} else if ($user['menu_style'] == 1) {
    include 'sidebar_collapse.php';
} else {
    $this->flash_fail("Terdapat kesalahan pada akun anda");
    redirect('auth/logout');
}
