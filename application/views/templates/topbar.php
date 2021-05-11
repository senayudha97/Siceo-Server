<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- <li>
                    <div class="text-center d-none d-md-inline">
                        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3" id="TogMenu">TogMenu</button>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('#TogMenu').click(function() {
                                $(".sidebar").toggleClass("toggled");
                            });
                        });
                    </script>
                </li> -->
                <!-- start notification handler -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="notifTrigger" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <br><br>
                        <span class="badge badge-danger badge-counter" id="bell" style="font-size: 12px;">0</span>
                        <!-- <span class="badge badge-danger badge-counter" style="font-size: 12px;">0</span> -->
                    </a>
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="notifTrigger">
                        <h6 class="dropdown-header">
                            Notifikasi &nbsp;
                            <button class="badge badge-warning" id="clearNotif" data-id="<?= $this->session->userdata('id'); ?>">Bersihkan <i class="fas fa-times"></i></button>
                        </h6>
                        <script>
                            $('#clearNotif').click(function() {
                                event.preventDefault();
                                var id = $(this).data('id');
                                $.ajax({
                                    url: '<?= base_url('user/clearNotifikasi'); ?>',
                                    method: 'GET',
                                    data: {
                                        data: id
                                    },
                                    datatype: 'json',
                                    success: function(param) {
                                        if (param == 1) {
                                            $('#bell').html(0);
                                        }
                                    }
                                });
                            });
                        </script>
                        <div id="notifBody">
                            <!-- Handler Notif -->
                        </div>
                        <a class="dropdown-item text-center small text-gray-500" id="foot_notif" href="#">Bersihkan Notifikasi <i class="fas fa-time"></i></a>
                    </div>
                </li>
                <!-- end notification handler -->

                <!-- Divider -->
                <div class="topbar-divider d-none d-sm-block"></div>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('user'); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            My Profile
                        </a>
                        <a class="dropdown-item" href="<?= base_url('menu/changeMenu'); ?>">
                            <i class="fas fa-tv fa-sm fa-fw mr-2 text-gray-400"></i>
                            Ubah Model Menu
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>


        <!-- Notification Handler -->
        <script>
            // Globar Notification Variable

            /*
            0 = notifikasi mati
            1 = notifikasi aktif
            */
            var toogle_notif = 0;

            $(document).ready(function() {
                if (toogle_notif == 0) {
                    console.log('Fitur Notifikasi di Nonaktifkan');
                    $('#foot_notif').html('Fitur notifikasi di nonaktifkan oleh developer');
                } else {
                    $('.badge-warning').click(function() {
                        var id = Array;

                        var i = 0
                        $.each(temp_data, function(key, val) {
                            id[i] = val.id;
                            i++;
                        });
                    });

                    $('#notifTrigger').click(function() {
                        $('#notifBody').empty();
                        $.ajax({
                            url: "<?= base_url('user/notifikasiBody'); ?>",
                            method: 'GET',
                            datatype: 'json',
                            success: function(param) {
                                data = JSON.parse(param);
                                temp_data = data;
                                $.each(data, function(key, val) {
                                    $("#notifBody").append(`
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="mr-3">
                                                    <div class="icon-circle bg-danger">
                                                        <i class="fas fa-exclamation text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500">
                                                        ` + val.date + `
                                                    </div>
                                                    <span class="font-weight-bold">` + val.pesan + `</span>
                                                </div>
                                            </a>
                                        `);
                                });
                            }
                        });
                    });


                    // Realtime Count Notification
                    setInterval(function() {
                        $.ajax({
                            url: "<?= base_url('user/notifikasi'); ?>",
                            datatype: 'json',
                            success: function(data) {
                                $('#bell').html(data);
                            }
                        });
                    }, 1000);
                }
            });

            $('.close').click(function() {
                event.preventDefault();
                console.log('berhasil');
            });
        </script>

        <!-- Toast Notification -->
        <div class="toast" style="position: absolute;top: -10; right: 0; z-index:1;" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>

        <!-- End of Topbar -->