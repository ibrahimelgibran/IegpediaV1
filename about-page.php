<?php
include('koneksi.php');

session_start();

if (!isset($_SESSION['email'])) {
    echo "<script>alert('Session expired. Please log in again.!');window.location='login.php';</script>";
    exit();
}

$query = "SELECT * FROM aboutpage";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($hasil);

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Ibrahim El Gibran">
        <link rel="icon" href="assets/svg/ieg.png">

        <title>Ubah Pengaturan About Page - Iegpedia</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Iegpedia <sup>v3</sup></div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="all-post.php" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-thumbtack"></i>
                        <span>Posts</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="all-post.php">All Posts</a>
                            <a class="collapse-item" href="add-new-post.php">Add New</a>
                            <a class="collapse-item" href="categories.php">Categories</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="library.php" data-toggle="collapse" data-target="#collapseMedia"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-photo-video"></i>
                        <span>Media</span>
                    </a>
                    <div id="collapseMedia" class="collapse" aria-labelledby="headingMedia"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="library.php">Library</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="all-pages.php" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Pages</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="all-pages.php">All Pages</a>
                            <a class="collapse-item" href="add-new-pages.php">Add New</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="comments.php" data-toggle="collapse" data-target="#collapseFeedback"
                        aria-expanded="true" aria-controls="collapseFeedback">
                        <i class="fas fa-fw fa-comments"></i>
                        <span>User Feedback</span>
                    </a>
                    <div id="collapseFeedback" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="comments.php">Comments</a>
                            <a class="collapse-item" href="message.php">Message</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed" href="all-course.php" data-toggle="collapse" data-target="#collapseCourse"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fab fa-fw fa-discourse"></i>
                        <span>Course</span>
                    </a>
                    <div id="collapseCourse" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="all-course.php">All Course</a>
                            <a class="collapse-item" href="add-new-course.php">Add New</a>
                            <a class="collapse-item" href="type-course.php">Type Of Course</a>
                            <a class="collapse-item" href="add-new-type-course.php">Add New Type Course</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="all-user.php" data-toggle="collapse" data-target="#collapseUsers"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Users</span>
                    </a>
                    <div id="collapseUsers" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="all-user.php">All Users</a>
                            <a class="collapse-item" href="add-new-user.php">Add New</a>
                            <a class="collapse-item" href="profile.php">Profile</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item active">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-cogs"></i>
                        <span>Settings</span>
                    </a>
                    <div id="collapseSettings" class="collapse show" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <?php
                            $pages = "SELECT * FROM pages ORDER BY id ASC";
                            $jadi = mysqli_query($koneksi, $pages);

                            while ($page = mysqli_fetch_assoc($jadi)) {
                                $active_page = basename($_SERVER['PHP_SELF'], ".php");

                                $class = ($page['src_db'] == $active_page . ".php") ? "collapse-item active" : "collapse-item";

                                echo '<a href="' . $page['src_db'] . '" class="' . $class . '">' . $page['title'] . '</a>';
                            }
                            ?>
                            <a class="collapse-item" href="footer-page.php">Footer</a>
                            <a class="collapse-item" href="add-new-pages.php">Other</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

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

                        <!-- Topbar Search -->
                        <!-- <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form> -->

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span
                                        class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['firstname'] ?></span>
                                    <img class="img-profile rounded-circle"
                                        src="data:image/jpeg;base64,<?php echo base64_encode($_SESSION['image']); ?>">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="profile.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Settings About Page</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i></a>
                        </div>

                        <!-- Content Row -->
                        <form action="proses-edit-aboutpage.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <h3 class="text-center my-4"></h3>
                            <div class="row">
                                <!-- Area Chart -->
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <span>Title</span>
                                        <input type="text" class="form-control form-control-sm mb-3" name="title"
                                            value="<?= $data['title'] ?>">
                                        <span>Subtitle</span>
                                        <input type="text" class="form-control form-control-sm" name="subtitle"
                                            value="<?= $data['subtitle'] ?>">
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-center mt-5 mb-4"></h3>
                            <h4 class="text-center shadow">Edit Di Home Page</h4>
                            <div class="row">
                                <!-- Area Chart -->

                            </div>

                            <h3 class="text-center mt-5 mb-1"></h3>
                            <div class="row">
                                <!-- Area Chart -->
                                <div class="col-md-4">
                                    <div class="mb-4 py-2 px-2">
                                        Title
                                        <input type="text" class="form-control form-control-sm mb-3"
                                            value="<?= $data['title_3_1'] ?>" name="title_3_1">
                                        Jumlah
                                        <input type="number" class="form-control form-control-sm mb-3"
                                            value="<?= $data['jumlah_3_1'] ?>" name="jumlah_3_1">
                                        Kecepatan
                                        <input type="number" class="form-control form-control-sm"
                                            value="<?= $data['fast_3_1'] ?>" name="fast_3_1">
                                        <span style="font-size: 11px" ; margin: 0>1000 = 1/s</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4 py-2 px-2">
                                        Title
                                        <input type="text" class="form-control form-control-sm mb-3"
                                            value="<?= $data['title_3_2'] ?>" name="title_3_2">
                                        Jumlah
                                        <input type="number" class="form-control form-control-sm mb-3"
                                            value="<?= $data['jumlah_3_2'] ?>" name="jumlah_3_2">
                                        Kecepatan
                                        <input type="number" class="form-control form-control-sm"
                                            value="<?= $data['fast_3_2'] ?>" name="fast_3_2">
                                        <span style="font-size: 11px" ; margin: 0>1000 = 1/s</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4 py-2 px-2">
                                        Title
                                        <input type="text" class="form-control form-control-sm mb-3"
                                            value="<?= $data['title_3_3'] ?>" name="title_3_3">
                                        Jumlah
                                        <input type="number" class="form-control form-control-sm mb-3"
                                            value="<?= $data['jumlah_3_3'] ?>" name="jumlah_3_3">
                                        Kecepatan
                                        <input type="number" class="form-control form-control-sm"
                                            value="<?= $data['fast_3_3'] ?>" name="fast_3_3">
                                        <span style="font-size: 11px" ; margin: 0>1000 = 1/s</span>
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-center mt-5 mb-4"></h3>
                            <div class="row">
                                <!-- Area Chart -->
                                <div class="col-md-0">
                                    <!-- <img src="data:image/jpeg;base64,<?= base64_encode($image2) ?>"
                                        class="img-thumbnail"> -->
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-0">
                                        <span>Title Utama</span>
                                        <input type="text" class="form-control form-control-sm" name="title_vm"
                                            value="<?= $data['title_vm'] ?>">
                                    </div>
                                    <div class="mt-3">
                                        <span>Title & Isi</span>
                                        <input type="text" class="form-control form-control-sm mb-1" name="title_v"
                                            value="<?= $data['title_v'] ?>">
                                        <textarea class="form-control form-control-sm" rows="3"
                                            name="isi_v"><?= $data['isi_v'] ?></textarea>
                                    </div>
                                    <div class="mt-3 mb-4">
                                        <span>Title & Isi 2</span>
                                        <input type="text" class="form-control form-control-sm mb-1" name="title_m"
                                            value="<?= $data['title_m'] ?>">
                                        <textarea class="form-control form-control-sm" rows="3"
                                            name="isi_m"><?= $data['isi_m'] ?></textarea>
                                    </div>
                                    <!-- <div class="mt-4">
                                        <label for="image2" class="btn btn-primary">Change Image</label>
                                        <input type="file" class="form-control form-control-sm d-none" name="image2"
                                            id="image2" value="">
                                    </div> -->
                                </div>
                            </div>

                            <h3 class="text-center my-4"></h3>
                            <div class="row">
                                <!-- Area Chart -->
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <span>Title</span>
                                        <input type="text" class="form-control form-control-sm mb-3" name="title_tim"
                                            value="<?= $data['title_tim'] ?>">
                                    </div>
                                </div>
                                <div class="m-auto mx-5">
                                    <input type="submit" value="Simpan" class="btn btn-secondary">
                                </div>
                            </div>


                        </form>
                    </div>

                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Iegpedia 2024</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

    </body>

</html>