<?php include 'adminheader.php';
extract($_GET);






 ?>

   <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg) ">
        	 <center>
 	<br><br><br><br><br><br>
 	<h3>payment details</h3>
 	</center>
     </div>

        
      </div>

     
    </div>
  </section>

 	<center><form method="post">
 		<table class="table" style="width: 500px">
 			<tr>

 				<th>cbooking_id</th>
 				<th>payment_for</th>
 				<th>amount</th>
 				<th>date</th>
 			</tr>
 			<tr>
 				<?php 
 				 $t="SELECT * FROM payment INNER JOIN categorybookings ON categorybookings.cbooking_id=payment.paymentfor_id WHERE payment_for='category booking' AND paymentfor_id='$pid'";
 				$res=select($t);
 				foreach ($res as $key ) {
 						 ?>
 						 <tr>
 						 	<td><?php echo $key['cbooking_id'] ?></td>
 						 	<td><?php echo $key['payment_for'] ?></td>
 						 	<td><?php echo $key['amount']  ?></td>
 						 	<td><?php echo $key['date'] ?></td>
 						 </tr>
 			



 			<?php } ?>
 			</tr>
 		</table>
 		
 	</form>
 </center>

 <?php include 'footer.php' ?>