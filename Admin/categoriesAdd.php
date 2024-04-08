<?php include 'header.inc.php'; 
$categories = '';
if(isset($_GET['id']) && $_GET['id']!=''){
  $id =get_safe_value($conn,$_GET['id']);
  $res=mysqli_query($conn, "SELECT * FROM categories WHERE id='$id'");
  $check = mysqli_num_rows($res);
  if($check>0){
    $row=mysqli_fetch_assoc($res);
    $categories=$row['categories'];
  }
  else{
header('location:index.php');
die();
  }
}
if(isset($_POST['submit'])){
  $categories = get_safe_value($conn, $_POST['categorie']);
  if(isset($_GET['id']) && $_GET['id']!=''){ 
  $id =get_safe_value($conn,$_GET['id']);
  mysqli_query($conn,"update categories set categories='$categories' where id='$id'");
  }else{
  mysqli_query($conn,"INSERT INTO categories (categories,status) VALUES ('$categories','1')");
}
header('location:categories.php');
  die();
}
?>


<div class="sufee-login d-flex align-content-center flex-wrap">
  <div class="container">
    <div class="login-content">
      <div class="login-form mt-150">
        <h4>Enter categories details</h4>
        <form method="post">
          <div class="form-group">
            <label>Catageory name</label>
            <input type="text" name="categorie" class="form-control" value="<?php echo $categories ?>" placeholder="Category" required>
          </div>
          <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Add</button>
        </form>
        <div class="feild_error"><?php echo $msg ?></div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.inc.php' ?>