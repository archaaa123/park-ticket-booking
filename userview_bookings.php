<?php include 'userheader.php';
extract($_GET);

$qid=$_SESSION['user_id'];
if(isset($_GET['mid'])){
	extract($_GET);
	
}




 ?>
   <section id="hero" >
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg) ">
 <center>
 	<br><br><br><br><br><br>
 	<h2>View Bookings</h2>
 </center>
 	</div>

        
      </div>

     
    </div>
  </section>
  <center>
 	<form method="post">
 		<table class="table"  style="width: 500px;">
 			<tr>
 				<th>categoryname</th>
 				<th>amount</th>
 				<th>date</th>
 				<th>status</th>
 			</tr>
 			<tr>
 				<?php 
 				$d="select * from categorybookings inner join category where user_id='$qid'";
 				$res=select($d);
 				foreach ($res as $key ) {
 							 ?>
 							 <tr>
 							 	<td><?php echo $key['category'] ?></td>
 							 	<td><?php echo $key['amount'] ?></td>
 							 	<td><?php echo $key['date'] ?></td>
 							 		 	<?php 
 					 			if ($key['status']=="accept")
 					 			{ 	?>


 					 	  	<td><a  class="btn btn-success" href="usermake_payment.php?mid=<?php echo $key['cbooking_id'] ?>">make payment</a></td>
 					 	  	<?php 
							}
							else
							{
 								?>

 					<td><?php echo $key['status'] ?></td>

 					 <?php } ?>

 							 	
 							 	
 				</tr>
 			<?php } ?>
 				


 				
 		
 			</tr>
 		</table>
 		
 	</form>
 </center>
 
 <?php include 'footer.php' ?>