<?php
function addNewCategories(){
    global $connection;
    if(isset($_POST["submit"])){
        $categories_name=$_POST["categories_name"];
        if($categories_name==""||empty($categories_name)){
            echo "This field should not be empty";
        }else{
            $query="INSERT INTO categories(name)";
            $query.=" VALUE('{$categories_name}')";
            $creat_categories_query=mysqli_query($connection, $query);
            if(!$creat_categories_query){
               die("QUERY FAILED".mysqli_error($connection)); 
            }
        }
    }
}
function findAllCategories(){
     global $connection;
    $query="SELECT * FROM categories";
    $select_categories=mysqli_query($connection,$query);
     while($row=mysqli_fetch_assoc($select_categories)){
     $categories_name=$row["name"];
     $categories_id=$row["id"];
     echo "<tr>";
     echo "<td>{$categories_id}</td>";
     echo "<td>{$categories_name}</td>";
     echo "<td><a href='categories.php?delete={$categories_id}'>Delete</a></td>";
     echo "<td><a href='categories.php?edit={$categories_id}'>Edit</a></td>";
     echo "</tr>";
    }
}
function editCategories(){
    global $connection;
    if(isset($_GET['delete'])){
        $the_delete_id=$_GET["delete"];
        $query="DELETE FROM categories WHERE id={$the_delete_id}";
        $delete_query=mysqli_query($connection, $query);
        header("Location: categories.php");
    }
}
?>