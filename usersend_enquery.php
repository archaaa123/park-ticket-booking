<?php include 'userheader.php';
extract($_GET);




if(isset($_POST['send'])){
	extract($_POST);
	$r="select * from enquiry where ='$enquiry'";
$res=select($r);
if(sizeof($res)>0){
	alert("already exist");

}else {


	$qid=$_SESSION['user_id'];
	$f="insert into enquiry values(null,'$qid','$enquiry','pending','$date')";
	insert($f);
	alert("inserted successfully");
	return redirect('usersend_enquery.php');


}



	

}
if(isset($_GET['xid'])){
	extract($_GET);
	
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
 	<h3>Send enquiry</h3>
 	<form method="post">
 		<table  style="width: 500px;color: white">
 			<tr>
 				<th>enquiry</th>
 				<td><input type="text" class="form-control" name="enquiry"></td>
 			</tr>
 			<tr>
 				<th>reply</th>
 				<td><input type="text"class="form-control" name="reply"></td>
 			</tr>
 			<tr>
 				<th>date</th>
 				<td><input type="date"class="form-control" name="date"></td>
 			</tr>
 			<tr>
 				<td colspan="2" align="center"><input type="submit" class="btn btn-success" name="send" value="send enquiry"></td>
 			</tr>
 			
 		</table>
 		
 	</form>
 </center>
 </div>

        
      </div>

     
    </div>
  </section>
<h3> view enquiry</h3>
 <table class="table" style="width: 500px">

 	<tr>
 		<th>enquiry</th>
 		<th>reply</th>
 		<th>date</th>

 	</tr>
 	<tr>
 		<?php 
 		$b="select * from enquiry ";
 		$res=select($b);
 		foreach ($res as $key) {
 			 ?>
 			 <tr>
 			 	<td><?php echo $key['enquiry'] ?></td>
 			 
 			 	<?php 
 				if ($key['reply']=="pending")
 					 {

 					?>
 			<td><a class="btn btn-primary" href="userview_enquery_reply.php?xid=<?php echo $key['enquiry_id'] ?>">view reply</a></td>
<?php 
}
else
{
 ?>
 				<td><?php echo $key['reply'] ?></td>
 				<?php } ?>

 				<td><?php echo $key['date'] ?></td>
 			 	

 			 </tr>
 			
 	


 			<?php } ?>

 		
 	</tr>
 </table>
 <?php include 'footer.php' ?>