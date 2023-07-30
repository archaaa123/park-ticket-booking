<?php include 'staffheader.php';
extract($_GET);
if(isset($_GET['uid'])){
	extract($_GET);
	$g="select * from staff where staff_id='$uid'";
	$res=select($g);

}
if(isset($_POST['update'])){
	extract($_POST);

	$lid=$_SESSION['login_id'];
	$w="update staff set fname='$fname',lname='$lname',place='$place',phone='$phone',email='$email'  where staff_id='$uid'";
	update($w);
	alert("updated successfully");
	return redirect('staffupdate_profile.php');

}



 ?>
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg) ">

 <center>
 	<br><br><br><br><br><br><br>
 	<h3>Update Profile</h3>
 	
</center>
<center>
 <form method="post">
 	<?php  if(isset($_GET['uid'])){ ?>
 	<table  style="width: 500px;color: white;">
 		<tr>
 			<th>Fname:</th>
 			<td><input type="text" class="form-control" value="<?php echo $res[0]['fname'] ?>" name="fname"></td>
 		</tr>
 		<tr>
 			<th>Lname:</th>
 			<td><input type="text" class="form-control" value="<?php echo $res[0]['lname'] ?>" name="lname"></td>
 		</tr>
 		<tr>
 			<th>Place:</th>
 			<td><input type="text" class="form-control" value="<?php echo $res[0]['place'] ?>" name="place"></td>
 		</tr>
 		<tr>
 			<th>Phone:</th>
 			<td><input type="number" class="form-control" value="<?php echo $res[0]['phone'] ?>" name="phone"></td>
 		</tr>
 		<tr>
 			<th>Email:</th>
 			<td><input type="email" class="form-control" value="<?php echo $res[0]['email'] ?>" name="email"></td>
 		</tr>
 		<tr>
 			
 			<td align="center" colspan="2"><input type="submit" class="btn btn-primary" name="update" value="update"></td>
 		</tr>
 		
 	</table>
 <?php } ?>
 	
 	
 </form>
</center>
</div>

        
      </div>

     
    </div>
  </section>
<h3>staff details</h3>
<table class="table" style="width: 500px">
 		<tr>
 			<th>fname</th>
 			<th>lname</th>
 			<th>place</th>
 			<th>phone</th>
 			<th>email</th>
 		</tr>
 		<tr>
 			<?php 
 			$t="select * from staff ";
 			$res=select($t);
 			foreach ($res as $key) {
 				 ?>
 				 <tr>
 				 	<td><?php echo $key['fname'] ?></td>
 				 	<td><?php echo $key['lname'] ?></td>
 				 	<td><?php echo $key['place'] ?></td>
 				 	<td><?php echo $key['phone'] ?></td>
 				 	<td><?php echo $key['email'] ?></td>
 				 	<td><a class="btn btn-success" href="?uid=<?php echo $key['staff_id'] ?>">update</a></td>
 				 </tr>
 		


 				<?php } ?>
 		

 		</tr>
 	</table>
 <?php include 'footer.php' ?>