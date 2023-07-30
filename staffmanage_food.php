<?php include 'staffheader.php';
extract ($_GET);





if(isset($_POST['submit'])){
	extract($_POST);



	
$r="select * from food where foodname='$foodname'";
$res=select($r);
if(sizeof($res)>0){
	alert("already exist");

}else {


	$dir = "upload/";  #
	$file = basename($_FILES['img']['name']);#
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
	{
	$lid=$_SESSION['staff_id'];

	$d="insert into food values(null,'$lid','$foodname','$amount','$target')";
	insert($d);
	alert("inserted successfully");
	return redirect('staffmanage_food.php');

}
}
}
if(isset($_GET['did'])){
	extract($_GET);
	 $v="delete from food where food_id='$did'";
	delete($v);
	alert("deleted successfully");
	return redirect('staffmanage_food.php');

}
if(isset($_GET['uid'])){
	extract($_GET);
	$t="select * from food where food_id='$uid'";
	$res=select($t);

}
if(isset($_POST['update'])){
	extract($_POST);

$dir = "upload/";  #
	$file = basename($_FILES['img']['name']);#
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
	{


	$x="update food set foodname='$foodname',amount='$amount',image='$target' where food_id='$uid'";
	update($x);
	alert("updated successfully");
	return redirect('staffmanage_food.php');

}
}




 ?>
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg) ">
 <center>
 	<br><br><br><br>
 	<h3>Manage Food</h3>
 	<form method="post" enctype="multipart/form-data">
 		<table  style="width: 500px;color: white;">
 			<?php if(isset($_GET['uid'])){ ?>
 			<tr>
 				<th>Foodname:</th>
 				<td><input type="text" class="form-control"  value="<?php echo $res[0]['foodname'] ?>" name="foodname"></td>
 			</tr>
 			<tr>
 				<th>Amount:</th>
 				<td><input type="text" class="form-control"  value="<?php echo $res[0]['amount'] ?>" name="amount"></td>
 			</tr>
 			<tr>
 				<th>Image:</th>
 				<td><input type="file" class="form-control"  value="<?php echo $res[0]['image'] ?>" name="img"></td>
 			</tr>
 			<tr>
 				<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="update" value="update"></td>
 			</tr>
 		</table>
 	<?php }
 	else { ?>
 		<table style="width: 500px;color: white;">
 			<tr>
 				<th>Foodname:</th>
 				<td><input type="text" class="form-control" name="foodname"></td>
 			</tr>
 			<tr>
 				<th>Amount:</th>
 				<td><input type="text" class="form-control" name="amount"></td>
 			</tr>
 			<tr>
 				<th>Image:</th>
 				<td><input type="file" class="form-control" name="img"></td>
 			</tr>
 			<tr>
 				<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit"></td>
 			</tr>
 		</table>
 	<?php } ?>
 		
 	</form>
 	
 </center>
  </div>

        
      </div>

     
    </div>
  </section>
  <h2>view food</h2>
 <table class="table" style="width: 500px">
 	<tr>
 		<th>foodname</th>
 		<th>amount</th>
 		<th>image</th>
 	</tr>
 	<tr>
 		<?php 
 		$q="select * from food ";
 		$res=select($q);
 		foreach ($res as $key ) {
 			 ?>
 			 <tr>
 			 <td><?php echo $key['foodname'] ?></td>
 			  <td><?php echo $key['amount'] ?></td>
 			  <td><img src="<?php echo $key['image'] ?>" height="100" width="100"></td>
 			  <td><a class="btn btn-success" href="?did=<?php echo $key['food_id'] ?>">delete</a></td>
 			  <td><a class="btn btn-success" href="?uid=<?php echo $key['food_id'] ?>">update</a></td>


 	
<?php } ?>

 	
 	</tr>
 </tr>
 </table>

 <?php include 'footer.php' ?>