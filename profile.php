<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Profile - Card ID by EG</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/eg-dark.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/eg-dark.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- header -->
    <?php include './includes/partials/header.php'; ?>

    <!-- right-sidebar -->
    <?php include './includes/partials/rightbar.php'; ?>


    <div class="left-side-bar">
        <div class="brand-logo ">
            <a href="#">
                <img src="./assets/img/eg-dark.png" height="25px" width="25px" alt="" class="mx-auto" />

            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="">
                        <a href="control.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-tv"></span><span class="mtext">Control Panel</span> </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle"> <span class="micon bi bi-printer"></span><span
                                class="mtext">Bulk</span> </a>
                        <ul class="submenu">
                            <li><a href="./register-bulk.php">Regisration</a></li>
                        </ul>
                        <ul class="submenu">
                            <li><a href="#" data-backdrop="static" data-toggle="modal" data-target="#print-modal"
                                    type="button">Print</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>

    <!-- content -->
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                        <div class="pd-20 card-box height-100-p">
                            <div class="profile-photo">
                                <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i
                                        class="fa fa-pencil"></i></a>
                                <img src="vendors/images/photo1.jpg" alt="" class="avatar-photo" />
                                <div class="modal fade" id="modal" tabindex="-1" role="dialog"
                                    aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body pd-5">
                                                <div class="img-container">
                                                    <img id="image" src="vendors/images/photo2.jpg" alt="Picture" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" value="Update" class="btn btn-primary" />
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="text-center h5 mb-0">Ross C. Lopez</h5>
                            <p class="text-center text-muted font-14">
                                Lorem ipsum dolor sit amet
                            </p>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                                <ul>
                                    <li>
                                        <span>Organisation Name:</span>
                                        Exampli Gratia Indonesia
                                    </li>
                                    <li>
                                        <span>Phone Number:</span>
                                        6289603925602
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        egdev@gmail.com
                                    </li>
                                    <li>
                                        <span>Website:</span>
                                        egdev.co.id
                                    </li>
                                    <li>
                                        <span>Active Year:</span>
                                        2023
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By
                <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
            </div>
        </div>
    </div>
    <!-- Add modal -->
    <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Add Staff

                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="input-group custom gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="pro">
                                <label class="form-check-label" for="pro">
                                    Pro
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="dr">
                                <label class="form-check-label" for="dr">
                                    Dr
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="mr">
                                <label class="form-check-label" for="mr">
                                    Mr
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="mrs">
                                <label class="form-check-label" for="mrs">
                                    Mrs
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="miss">
                                <label class="form-check-label" for="miss">
                                    Miss
                                </label>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Firstname" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Sirname" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Departement" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Rank" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Email" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Staff id" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <a class="btn btn-primary btn-lg btn-block" href="#">Submit</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- print modal -->
    <div class="modal fade" id="print-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Print ID in Bulk
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="input-group custom">
                            <input type="number" class="form-control form-control-lg" placeholder="From" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="number" class="form-control form-control-lg" placeholder="To" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <a class="btn btn-primary btn-lg btn-block" href="#">Submit</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </ <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <!-- cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- assets -->
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/sweetalert.js"></script>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>