<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: ../index.php');
    }
    require_once '../config/db.php';
    require_once 'layout/header.php';
?>

            <div class="wrap-fluid" id="paper-bg">
                <!-- top nav -->
                <div class="top-bar-nest" style="background:#99FF33;">
                    <nav class="top-bar" data-topbar role="navigation" data-options="is_hover: false" style="background:#99FF33;">
                        <ul class="title-area left">                        
                            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- end of top nav -->

                <!-- breadcrumbs -->
                <ul class="breadcrumbs breadcrumbs-fixed">
                    <li><a href="#"><span class="entypo-home"></span></a></li>
                    <li>Dashboard</li>
                </ul>
                <!-- end of breadcrumbs -->

                <div class="row">
                    <?php 
                        require_once 'layout/content.php';
                    ?>
                </div>

<?php require_once 'layout/footer.php'; ?>