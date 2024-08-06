<?php
include_once("conn.php")
?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">One Music</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
                </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="adminLogout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="latestmusic.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                              LatestMusic
                            </a>

                            <a class="nav-link" href="latestvideo.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                LatestVideo
                            </a>

                            <!-- <a class="nav-link" href="Album.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                              Albums
                            </a> -->

                            <!-- <a class="nav-link" href="Bill.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                             Bill
                            </a> -->

                            <div class="sb-sidenav-menu-heading">Addons</div>
                            

                            <a class="nav-link" href="contact.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                             Contact
                            </a>

                            <a class="nav-link" href="registeruser.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                             Register
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
