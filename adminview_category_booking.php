<?php include 'adminheader.php';
extract($_GET);
  

 if(isset($_GET['pid'])){
 	extract($_GET);
 	// $g="update payment set payment_for='cbooking' where payment_id='$pid'";
 	// update($g);
 	
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
 	<h3>category bookings</h3>
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
 				<th>category name</th>
 				<th>amount</th>
 				<th>date</th>
 				<th>status</th>
 			</tr>
 			<tr>
 				<?php 
 				$g="select * from categorybookings inner join user using(user_id) inner join category on category.category_id=categorybookings.category_id";
 				$res=select($g);
 				foreach ($res as $key ) {
 					 ?>
 					 <tr>
 					 	<td><?php echo $key['fname'] ?></td>
 					 	<td><?php echo $key['category'] ?></td>
 					 	<td><?php echo $key['amount'] ?></td>
 					 	<td><?php echo $key['date'] ?></td>
 					 	<td><?php echo $key['status'] ?></td>
 					 	<td><a class="btn btn-success" href="adminview_payment.php?pid=<?php echo $key['category_id'] ?>">view payment</a></td>
 					 </tr>
 				

			<?php } ?>
 			
 			</tr>
 		</table>
 		
 	</form>
 </center>

 <?php include 'footer.php' ?>