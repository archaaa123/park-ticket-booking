<?php include 'staffheader.php';
extract($_GET);


if(isset($_GET['sid'])){
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
 	<br><br><br><br><br><br>
 	<h2>View Food Bookings</h2>
 </center>
    </div>

        
      </div>

     
    </div>
  </section>
  <center>
 	<form method="post">
 		<table class="table" style="width: 500px">
 			<tr>
 				<th>username</th>
 				<th>foodname</th>
 				<th>amount</th>
 				<th>date</th>
 				<th>status</th>
 			</tr>
 			<tr>
 				<?php 
 				 $s="select * from foodbookings inner join user using (user_id) inner join  food using(food_id)";
 				$res=select($s);
 				foreach ($res as $key ) {
 						 ?>
 						 <tr>
 						 	<td><?php echo $key['fname'] ?></td>
 						 	<td><?php echo $key['foodname'] ?></td>
 						 	<td><?php echo $key['amount'] ?></td>
 						 	<td><?php echo $key['date'] ?></td>
 						 	<td><?php echo $key['status'] ?></td>
 						 	<td><a class="btn btn-success" href="staffview1_payment.php?sid=<?php echo $key['fbooking_id'] ?>">view payment</a></td>
 						 </tr>
 			

			<?php } ?>

 			
 			</tr>
 			
 		</table>
 		
 	</form>
 </center>

 <?php include 'footer.php' ?>