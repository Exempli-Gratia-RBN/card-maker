<?php
session_start();
include 'db_connect.php';

if (isset($_COOKIE['adminid']) && $_COOKIE['adminemail']) {
    $userid = $_COOKIE['adminid'];
    $useremail = $_COOKIE['adminemail'];

    $sqluser = "SELECT * FROM Administrator WHERE Password='$userid' && Email='$useremail'";

    $retrieved = mysqli_query($db, $sqluser);
    while ($found = mysqli_fetch_array($retrieved)) {
        $firstname = $found['Firstname'];
        $sirname = $found['Sirname'];
        $emails = $found['Email'];
        $id = $found['id'];
    }
} else {
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Control - Card ID by EG</title>

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
    <link rel="stylesheet" type="text/css" href="styles/core.css" />
    <link rel="stylesheet" type="text/css" href="styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
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

<?php if(isset($_SESSION['memberadded'])){?>
<script type="text/javascript">
    $(document).ready(function() {
        swal({
            title: "Successful!",
            text: "Staff added successfully!!.",
            type: "success"
        });
    });
</script>

<?php 
	   session_destroy();		
		    }?>
<?php if(isset($_SESSION['memberexist'])){?>
<script type="text/javascript">
    $(document).ready(function() {
        sweetAlert("Oops...", "There is arleady a staff with those details in the database", "error");
    });
</script>
<?php 
       	   session_destroy();}  
           ?>
<?php if(isset($_SESSION['emptytextboxes'])){?>
<script type="text/javascript">
    $(document).ready(function() {
        sweetAlert("Oops...", "You did not fill all the textboxes on the form", "error");
    });
</script>
<?php 
       	   session_destroy();}  
           ?>
<?php if(isset($_SESSION['tutor'])){?>
<script type="text/javascript">
    $(document).ready(function() {
        swal({
                title: "User removed successfully",
                text: "Do you want to remove another one?",
                type: "success",
                showCancelButton: true,
                confirmButtonColor: "green",
                confirmButtonText: "OK!",
                closeOnConfirm: true,
                closeOnCancel: true,
                buttonsStyling: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location = "administrator.php?id=2";
                } else {
                    window.location = "administrator.php";
                }
            });

    });
</script>
<?php 
       	   session_destroy();}  
           ?>
<?php if(isset($_SESSION['cat'])){?>
<script type="text/javascript">
    $(document).ready(function() {
        sweetAlert("Oops...", "This category arleady in the system", "error");
    });
</script>
<?php 
       	   session_destroy();}  
           ?>
<?php if(isset($_SESSION['category'])){?>
<script type="text/javascript">
    $(document).ready(function() {
        swal({
                title: "Category added successfully",
                text: "Do you want to add another one?",
                type: "success",
                showCancelButton: true,
                confirmButtonColor: "green",
                confirmButtonText: "OK!",
                closeOnConfirm: true,
                closeOnCancel: true,
                buttonsStyling: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location = "administrator.php?id=3";
                } else {
                    window.location = "administrator.php";
                }
            });

    });
</script>
<?php 
       	   session_destroy();}  
           ?>
<?php if(isset($_SESSION['del'])){?>
<script type="text/javascript">
    $(document).ready(function() {
        swal({
                title: "Category Deleted",
                text: "Do you want to delete another one?",
                type: "success",
                showCancelButton: true,
                confirmButtonColor: "green",
                confirmButtonText: "OK!",
                closeOnConfirm: true,
                closeOnCancel: true,
                buttonsStyling: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location = "administrator.php?id=4";
                } else {
                    window.location = "administrator.php";
                }
            });

    });
</script>
<?php 
       	   session_destroy();}  
           ?>




<?php if(isset($_SESSION['pass'])) {?>
<script type="text/javascript">
    $(document).ready(function() {
        swal({
            title: "Successful!",
            text: "Staff details edited!!.",
            type: "success"
        });

    });
</script>
<?php  session_destroy(); }?>


<?php $sqlid = 'SELECT * FROM Users Order BY id DESC';
$ret = mysqli_query($db, $sqlid);
while ($found = mysqli_fetch_array($ret)) {
    $idsx = $found['id'];
}

$sqluse = 'SELECT * FROM Inorg ORDER BY id DESC ';
$retrieve = mysqli_query($db, $sqluse);
while ($foundk = mysqli_fetch_array($retrieve)) {
    $name = $foundk['name'];
    $website = $foundk['website'];
    $phone = $foundk['Phone'];
    $year = $foundk['year'];
    $mail = $foundk['email'];
    $idz = $foundk['id'];
}

?>

<body>
    <!-- preload -->
    <?php include './includes/partials/load.php'; ?>

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
                        <a href="index.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-tv"></span><span class="mtext">Control Panel</span> </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle"> <span class="micon bi bi-gear-fill"></span><span
                                class="mtext">Initialisation</span> </a>
                        <ul class="submenu">
                            <li><a data-toggle='modal' data-id='' href='#Initialisation' class='open-Initial'><i
                                        class="fa fa-plus"></i>Add System Info</a></li>
                        </ul>
                        <ul class="submenu">
                            <li><a data-toggle='modal' data-id='' href='#Initialisation2' class='open-Initial2'><i
                                        class="fa fa-minus"></i>Edit System Info</a></li>
                        </ul>
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
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">

                    <div class="pd-20 d-flex justify-content-between">
                        <h4 class="text-blue h4">Data </h4>
                        <button class="btn btn-primary" data-backdrop="static" data-toggle="modal"
                            data-target="#add-modal" type="button">Add Employee</button>

                    </div>
                    <div class="pb-20">
                        <div class="table-responsive">
                            <table class="data-table table  nowrap ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th class="table-plus datatable-nosort">NAME</th>
                                        <th>STAFF ID</th>
                                        <th>RANK</th>
                                        <th>DEPARTEMENT</th>
                                        <th>CONTACT</th>
                                        <th class="datatable-nosort">PRINT</th>
                                        <th class="datatable-nosort">EDIT</th>
                                        <th class="datatable-nosort">DELETE</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sqlmember = 'SELECT * FROM Users ';
                                    $retrieve = mysqli_query($db, $sqlmember);
                                    $count = 0;
                                    while ($found = mysqli_fetch_array($retrieve)) {
                                        $title = $found['Mtitle'];
                                        $firstname = $found['Firstname'];
                                        $sirname = $found['Sirname'];
                                        $rank = $found['Rank'];
                                        $id = $found['id'];
                                        $dept = $found['Department'];
                                        $contact = $found['Email'];
                                        $count = $count + 1;
                                        $get_time = $found['Time'];
                                        $time = time();
                                        $pass = $found['Staffid'];
                                        $names = $firstname . ' ' . $sirname;
                                        $count++;
                                    
                                        echo "<tr>    <td>$id</td>                                       
                                                                                                    <td>$title $firstname $sirname</td>        	
                                                                                                    <td>$pass</td>
                                                                                                    <td>$rank</td>
                                                                                                    
                                                                                                    <td>$dept</td>
                                                                                                    <td>$contact</td>
                                                                                                    <td>
                                                                                                    <a  href='card.php?id=$id' class='btn  btn-success' title='click to print ID Card'  target='_blank'><span class='micon bi bi-printer'></span></a>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                    <a data-toggle='modal' data-id='$id' data-ie='$firstname'   data-if='$sirname' data-ig='$rank' data-ih='$dept' data-ij='$contact' data-ik='$pass' class='open-Passwords btn  btn-info' title='edit user details' href='#Passwords'><i class='dw dw-edit2' style='color: white;'></i></a>
                                                                                                    
                                                                                                    </td>				                 
                                                                                                    <td>
                                                                                                    <a data-id='$id'  class='open-Delete btn  btn-danger' title='delete user' ><i class='dw dw-delete-3' style='color: white;'></i></a>
                                                                                                    
                                                                                                    </td>			 
                                                                                                    </tr>";
                                    }
                                    
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- Simple Datatable End -->
            </div>
            <!--footer  -->
            <?php include './includes/partials/footer.php'; ?>
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
                    <form method="post" action="upload.php" enctype='multipart/form-data'>
                        <div class="input-group custom gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pro" id="pro">
                                <label class="form-check-label" for="pro">
                                    Pro
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dr" id="dr">
                                <label class="form-check-label" for="dr">
                                    Dr
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mr" id="mr">
                                <label class="form-check-label" for="mr">
                                    Mr
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mrs" id="mrs">
                                <label class="form-check-label" for="mrs">
                                    Mrs
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="miss" id="miss">
                                <label class="form-check-label" for="miss">
                                    Miss
                                </label>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" name="mfname"
                                placeholder="Firstname" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" name="msname"
                                placeholder="Sirname" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" name="minstitution"
                                placeholder="Departement" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" name="memail"
                                placeholder="Rank" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" name="mphone"
                                placeholder="Email" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" name="mpassword"
                                placeholder="Staff id" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            Add profile picture:<input name='filed' type='file' class="form-control"
                                id='filed'>
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <button type="submit" class="btn btn-success" value="Submit" id="addmember"
                                        name="addmember" class="btn btn-primary btn-lg btn-block">Submit</button>
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
                    <form action="printbulk.php" method="post" target="_blank">
                        <div class="input-group custom">
                            <input type="number" class="form-control form-control-lg" placeholder="From"
                                name="startpoint" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="number" class="form-control form-control-lg" placeholder="To"
                                name="endpoint" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                            <input id="msg" type="hidden" class="form-control" name="receiptrange"
                                placeholder="" value="<?php echo $idsx; ?>" readonly="readonly">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="btns1"
                                        name="Change">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="Passwords" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
            <div class="modal-header" style="background:#222d32">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="font-family: Times New Roman;color:#F0F0F0;">
                    <center>
                        Edit details of <input style="border: none;background:#222d32" type="text" id="oldname"
                            value="" readonly="readonly" />

                    </center>
                </h4>
            </div>
            <div class="modal-body">
                <center>

                    <form method="post" action="upload.php" enctype='multipart/form-data'>

                        <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;
                                &nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input
                                    style="width:270px;" type="text" name="mfname" id='oldname'></span></p>
                        <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;
                                &nbsp;&nbsp; &nbsp;Sirname:<label style="color: red;font-size:20px;">*</label><input
                                    style="width:270px;" type="text" name="msname" id='ss'></span></p>
                        <p style="margin-bottom:10px;"><span
                                style="font-size: 18px; font-weight: bold;">Department:<label
                                    style="color: red;font-size:20px;">*</label><input style="width:270px;"
                                    type="text" name="minstitution" id='cc'></span></p>
                        <p style="margin-bottom:10px;"><span
                                style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank:<label
                                    style="color: red;font-size:20px;">*</label><input style="width:270px;"
                                    type="text" name="mrank" id='dd'></span></p>
                        <p style="margin-bottom:10px;"><span
                                style="font-size: 18px; font-weight: bold;">&nbsp;Email:<label
                                    style="color: red;font-size:20px;">*</label><input style="width:270px;"
                                    type="text" name="memail" id='bb'></span></p>
                        <p><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; &nbsp;&nbsp;Staff ID:<label
                                    style="color: red;font-size:20px;">*</label><input style="width:270px;"
                                    type="text" name="mid" id='oldpass'></span></p>
                        Add profile picture:<input name='filed' type='file' id='filed'>
                        <input type="hidden" name="page" id="staffid" />

                </center>

            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Reset" id="amendreceipt" name="resetpass">
                &nbsp;
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
        </form>
    </div>
</div>
    <div id="Initialisation" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
                <div class="modal-header" style="background:#222d32">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0">
                        <center>
                            SYSTEM INFORMATION INITIALISATION
                        </center>
                    </h4>
                </div>
                <form method="post" action="upload.php" enctype='multipart/form-data'>

                    <div class="modal-body">
                        <center>
                            <p style="margin-bottom:10px;"><span
                                    style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;Org Name:<label
                                        style="color: red;font-size:20px;">*</label><input style="width:270px;"
                                        type="text" name="orgname"></span></p>
                            <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;
                                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Phone:<label
                                        style="color: red;font-size:20px;">*</label><input style="width:270px;"
                                        type="text" name="orgphone"></span></p>
                            <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;
                                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Email:<label
                                        style="color: red;font-size:20px;">*</label><input style="width:270px;"
                                        type="text" name="orgemail"></span></p>
                            <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;
                                    &nbsp;&nbsp;&nbsp;Website:<label style="color: red;font-size:20px;">*</label><input
                                        style="width:270px;" type="text" name="orgwebsite"></span></p>
                            <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Active
                                    Year:<label style="color: red;font-size:20px;">*</label><input
                                        style="width:270px;" type="text" name="orgyear"></span></p>
                            Attach Organisation Logo:(<h7 style="color:red">Make sure it is a transparent image</h7>
                            )<input name='filed' type='file' id='filed'>
                            <input type="hidden" name="page" value="admin.php" />
                        </center>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Finish" id="addmember"
                            name="orginitial">
                        &nbsp;
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <div id="Initialisation2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
                <div class="modal-header" style="background:#222d32">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0">
                        <center>
                            EDIT SYSTEM INFORMATION
                        </center>
                    </h4>
                </div>
                <form method="post" action="upload.php" enctype='multipart/form-data'>

                    <div class="modal-body">
                        <center>
                            <p style="margin-bottom:10px;"><span
                                    style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;Org Name:<label
                                        style="color: red;font-size:20px;">*</label>
                                    <input style="width:270px;" type="text" name="orgname"
                                        value="<?php if (isset($name)) {
                                            echo $name;
                                        } ?>"></span></p>
                            <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;
                                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Phone:<label
                                        style="color: red;font-size:20px;">*</label>
                                    <input style="width:270px;" type="text" name="orgphone"
                                        value="<?php if (isset($phone)) {
                                            echo $phone;
                                        } ?>"></span></p>
                            <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;
                                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Email:<label
                                        style="color: red;font-size:20px;">*</label>
                                    <input style="width:270px;" type="text" name="orgemail"
                                        value="<?php if (isset($mail)) {
                                            echo $mail;
                                        } ?>"></span></p>
                            <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;
                                    &nbsp;&nbsp;&nbsp;Website:<label style="color: red;font-size:20px;">*</label>
                                    <input style="width:270px;" type="text" name="orgwebsite"
                                        value="<?php if (isset($website)) {
                                            echo $website;
                                        } ?>"></span></p>
                            <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Active
                                    Year:<label style="color: red;font-size:20px;">*</label>
                                    <input style="width:270px;" type="text" name="orgyear"
                                        value="<?php if (isset($year)) {
                                            echo $year;
                                        } ?>"></span></p>
                            Attach Organisation Logo:(<h7 style="color:red">Make sure it is a transparent image</h7>
                            )<input name='filed' type='file' id='filed'>
                            <input type="hidden" name="page" value="admin.php" />
                            <input type="hidden" name="pageid" value="<?php echo $idz; ?>" />

                        </center>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Update" id="addmember"
                            name="orgupdate">
                        &nbsp;
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <script src="scripts/core.js"></script>
    <script src="scripts/script.min.js"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/process.js"></script>
    <script src="scripts/layout-settings.js"></script>
    <script src="plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <!-- buttons for Export datatable -->
    <script src="plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables/js/buttons.bootstrap4.min.js"></script>

    <script src="plugins/datatables/js/buttons.print.min.js"></script>
    <script src="plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="plugins/datatables/js/pdfmake.min.js"></script>
    <script src="plugins/datatables/js/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <!-- Datatable Setting js -->
    
    <script src="scripts/datatable-setting.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- assets -->
    <script src="./assets/js/index.js"></script>
    <link rel="stylesheet" href="scripts/sweetalert.css">
    <script src="scripts/sweetalert.min.js"></script>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>

    <script type="text/javascript">
    $(document).on("click", ".open-Passwords", function() {

        var myT = $(this).data('id');
        var myTitle = $(this).data('ie');
        var myp = $(this).data('if');
        var mym = $(this).data('ig');
        var myn = $(this).data('ih');
        var myk = $(this).data('ij');
        var mykm = $(this).data('ik');


        $(".modal-title #oldname").val(myTitle);
        $(".modal-body #oldname").val(myTitle);
        $(".modal-body #oldpass").val(mykm);
        $(".modal-body #ss").val(myp);
        $(".modal-body #bb").val(mym);
        $(".modal-body #cc").val(myn);
        $(".modal-body #dd").val(myk);
        $(".modal-body #staffid").val(myT);
    });
</script>
<script type="text/javascript">
        $(document).on("click", ".open-Delete", function() {
            var myValue = $(this).data('id');
            swal({
                    title: "Are you sure?",
                    text: "You want to remove this staff from the database!",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonColor: "red",
                    confirmButtonColor: "green",
                    confirmButtonText: "Yes, remove!",
                    cancelButtonText: "No, cancel!",
                    closeOnConfirm: true,
                    closeOnCancel: false,
                    buttonsStyling: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        var vals = myValue;
                        $.ajax({
                            type: 'POST',
                            url: "upload.php",
                            data: {
                                Valuedel: vals
                            },
                            success: function(result) {
                                swal({
                                        title: "Deleted!",
                                        text: "Staff has been deleted from the database.",
                                        type: "success"
                                    },
                                    function() {
                                        location.reload();
                                    }
                                );
                            }
                        });
                    } else {
                        swal("Cancelled", "This user is safe :)", "error");
                    }
                });

        });
    </script>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
