<?php include 'userheader.php';



$qid=$_SESSION['user_id'];
if(isset($_GET['pid'])){
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
 	<h2>View Foodbookings</h2>
 </center>
 	 </div>

        
      </div>

     
    </div>
  </section>
  <center>
 	<form method="post">
 		<table  style="width: 500px;">
 			<tr>
 				
 				<th>food name</th>
 				<th>amount</th>
 				<th>date</th>
 				<th>status</th>
 			</tr>
 			<tr>
 				<?php 
 				$s="select * from foodbookings inner join food using(food_id) where user_id='$qid'";
 				$res=select($s);
 				foreach ($res as $key ) {
 						 ?>
 						 <tr>
 						 	<td><?php echo $key['foodname'] ?></td>
 						 	<td><?php echo $key['amount'] ?></td>
 						 	<td><?php echo $key['date'] ?></td>
 						 	<td><?php echo $key['status'] ?></td>
 						 	<td><a class="btn btn-success" href="usermake1_payment.php?pid=<?php echo $key['fbooking_id'] ?>&qid=<?php echo $key['user_id'] ?>&amount=<?php echo $key['amount'] ?>">make payment</a></td>
 						 </tr>
 			

 						<?php } ?>

 			
 			</tr>
 		</table>
 		
 	</form>
 </center>
 
 <?php include 'footer.php' ?>