<?php include "admin_includes/admin_header.php"; ?>


    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php include "admin_includes/admin_navigation.php"; ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include "admin_includes/admin_sidemenu.php";?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to posts
                            <small>Lizhi</small>
                        </h1>
                        <div class="col-lg-12">
                            <?php 
                            
                            if (isset($_GET["source"])){
                                $source=$_GET["source"];
                            }else{
                                $source='';
                            }
                            switch($source){
                                case "add_post";
                                include "admin_includes/add_post.php";
                                break;
                                case "35";
                                echo "Good";
                                break;
                                default:
                                include "admin_includes/view_all_posts.php"; 
                                break;
                            } 
                            ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php include "admin_includes/admin_footer.php"; ?>