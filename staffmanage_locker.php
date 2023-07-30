<?php include 'staffheader.php';




extract($_GET);






 if(isset($_POST['submit'])){
 	extract($_POST);


	$lid=$_SESSION['staff_id'];

 	$r="select * from locker where locker='$lockername'";
	$res=select($r);
	if(sizeof($res)>0){
	alert("already exist");

}else {


 	 $g="insert into locker values(null,'$lid','$lockername','$details','$amount')";
 	insert($g);
 	alert("inserted successfully");
 	return redirect('staffmanage_locker.php');
 }
}
 if (isset($_GET['did'])){
 	extract($_GET);
 	$r="delete from locker where locker_id='$did'";
 	delete($r);
 	alert("deleted successfully");
 	return redirect('staffmanage_locker.php');

 }
if(isset($_GET['uid'])){
	extract($_GET);
	$z="select * from locker where locker_id='$uid'";
	$res=select($z);



}
if(isset($_POST['update'])){
	extract($_POST);
	 $e="update locker set locker='$lockername',details='$details',amount='$amount'";
	update($e);
	alert("updated successfully");
	return redirect('staffmanage_locker.php');


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
 	<h3>Manage Locker</h3>
 	<form method="post" >
 		<?php if(isset($_GET['uid'])){ ?>
 		<table  style="width: 500px;color: white;">
 			<tr>
 				<th>Locker:</th>
 				<td><input type="text" class="form-control" name="lockername" value="<?php echo $res[0]['locker'] ?>"></td>
 			</tr>
 			<tr>
 				<th>Details:</th>
 				<td><input type="text" class="form-control"  name="details" value="<?php echo $res[0]['details'] ?>"></td>
 			</tr>
 			<tr>
 				<th>Amount:</th>
 				<td><input type="text" class="form-control"  name="amount" value="<?php echo $res[0]['amount'] ?>"></td>
 			</tr>
 			<tr>
 				<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="update" value="update"></td>
 			</tr>
 		</table>
 	<?php }
 	else{ ?>
 		<table  style="width: 500px;color: white;">
 			
 			<tr>
 				<th>Locker:</th>
 				<td><input type="text" class="form-control"  name="lockername"></td>
 			</tr>
 			<tr>
 				<th>Details:</th>
 				<td><input type="text"  class="form-control" 	 name="details"></td>
 			</tr>
 			<tr>
 				<th>Amount:</th>
 				<td><input type="text" class="form-control"  name="amount"></td>
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
  <h4> View Locker</h4>
 <table class="table" style="width: 500px;color: black;">

 	<tr>
 		<th>locker</th>
 		<th>details</th>
 		<th>amount</th>

 	</tr>
 	<tr>
 		<?php 
 		$t="select * from locker ";
 		$res=select($t);
 		foreach ($res as $key) {
 			 ?>
 			 <tr>
 			 	<td><?php echo $key['locker'] ?></td>
 			 	<td><?php echo $key['details'] ?></td>
 			 	<td><?php echo $key['amount'] ?></td>
 			 	<td><a class="btn btn-success" href="?did=<?php echo $key['locker_id'] ?>">delete</a></td>
 			 	<td><a class="btn btn-success" href="?uid=<?php echo $key['locker_id'] ?>">update</a></td>
 			 </tr>
 			<?php } ?>
 		


 		
 	</tr>
 </table>




 <?php include 'footer.php' ?>