<?php include 'adminheader.php';
extract($_GET);



if(isset($_POST['submit'])){
	extract($_POST);


$r="select * from category where category='$category_name'";
$res=select($r);
if(sizeof($res)>0){
	alert("already exist");

}else {


	$d="insert into category values(null,'$category_name','$description','$amount')";
	insert($d);


}
}


if(isset($_GET['uid'])){
	extract($_GET);
	$h="select * from category";
	$res=select($h);


}
if(isset($_GET['did'])){
	extract($_GET);
	$t="delete from category where category_id='$did'";
	delete($t);
	alert("deleted successfully");
	return redirect('admin_manage_category.php');
}
if(isset($_POST['update'])){
	extract($_POST);
	$g="update category set category='$category_name',description='$description',amount='$amount' where category_id='$uid'";
	update($g);
	alert("updated successfully");
	return redirect('admin_manage_category.php');


}

 ?>

 <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg) ">


<center>
	<br><br><br><br><br>
	<h3>Category</h3>
<form method="post">
	<?php  if(isset($_GET['uid'])){ ?>
	<table style="width: 500px;	color: white">
		<tr>
			<th>Category name</th>
			<td><input type="text" class="form-control" value="<?php echo $res[0]['category'] ?>" name="category_name"></td>
		</tr>
		<tr>
			<th>Description</th>
			<td><input type="text" class="form-control" value="<?php echo $res[0]['description'] ?>" name="description"></td>
		</tr>
		<tr>
			<th>Amount</th>
			<td><input type="text" class="form-control" value="<?php echo $res[0]['amount'] ?>" name="amount"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="update" value="update"></td>
		</tr>


	</table>
<?php }


else {
 ?>







	<table  style="width: 500px;color: white">
		<tr>
			<th>category name</th>
			<td><input type="text" class="form-control" name="category_name"></td>
		</tr>
		<tr>
			<th>Description</th>
			<td><input type="text" class="form-control" name="description"></td>
		</tr>
		<tr>
			<th>Amount</th>
			<td><input type="text" class="form-control" name="amount"></td>
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
  <h2> View Category</h2>
<table class="table" style="width: 500px;">
	<tr>
		<th>category name</th>
		<th>description</th>
		<th>amount</th>

	</tr>
	<tr>
		<?php 
		 $s="select * from category";
		$res=select($s);
		foreach ($res as $key) {
				 ?>
				 <tr>
				 	<td><?php echo $key['category'] ?></td>
				 	<td><?php echo $key['description'] ?></td>
				 	<td><?php echo $key['amount'] ?></td>
				 	<td><a class="btn btn-success" href="?did=<?php echo $key['category_id'] ?>">Delete</a></td>
				 	<td><a class="btn btn-success"  href="?uid=<?php echo $key['category_id'] ?>">Update</a></td>
				 </tr>
	



	<?php } ?>
	</tr>
</table>







<?php include 'footer.php' ?>