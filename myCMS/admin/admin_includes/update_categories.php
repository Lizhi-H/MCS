<?php
$query="SELECT * FROM categories WHERE id={$the_edit_id}";
$edit_query=mysqli_query($connection, $query);
                                       
////create the input field and update button dynamically////
while($row=mysqli_fetch_assoc($edit_query)){
    $categories_name=$row['name'];
    $categories_id=$row['id'];
?>
<form action="" method="post">
    <div class="form-group">
        <label for="categories_name">Update Category</label>
        <input type="text" class="form-control" name="update_categories_name">
    </div>
    <div class="form-group">
         <input type="submit" class="btn btn-primary" name="update" value="Update"> 
    </div>
</form>
<?php
}
////catch the updated information////
if(isset($_POST["update"])){
        $updated_categories_name=$_POST["update_categories_name"];
        $query="UPDATE categories SET name='{$updated_categories_name}' WHERE id={$categories_id} ";
        $update_query=mysqli_query($connection, $query);
        if(!$update_query){
            die("UPDATED QUERY FAILED".mysqli_error($connection));
        }
}
?>