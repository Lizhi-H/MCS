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
                            Welcome to admin
                            <small>author</small>
                        </h1>
                        <div class="col-lg-6">
                        
                           <?php addNewCategories(); ?>
                        
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="categories_name">Add Category</label>
                                    <input type="text" class="form-control" name="categories_name">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category"> 
                                </div>
                            </form>
                            
                            <?php 
                            ////edit categories////
                                   if(isset($_GET['edit'])){
                                       $the_edit_id=$_GET["edit"];
                                       include "admin_includes/update_categories.php";
                                   }
                            ?>
                        </div>
                        <div class="col-lg-6">
                            <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th>ID</th>
                                       <th>Category Title</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php findAllCategories(); ?>
                                   <?php editCategories(); ?>
                               </tbody>
                            </table>
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