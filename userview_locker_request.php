<?php include 'userheader.php';
extract($_GET);
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
 	<h2>Locker Request</h2>
 </center>

 	 </div>

        
      </div>

     
    </div>
  </section>
  <center>
 	<form method="post">
 		<table class="table" style="width: 500px">
 			<tr>
 				<th>locker</th>
 				<th>date</th>
 				<th>status</th>
 			</tr>
 			<tr>
 				<?php 
 				$f="select * from locker_request inner join locker using(locker_id)";

 				$res=select($f);
 				foreach ($res as $key ) {
 					 ?>
 					 <tr>
 					 	<td><?php echo $key['locker'] ?></td>
 					 	<td><?php echo $key['date'] ?></td>
 					 	<td><?php echo $key['status'] ?></td>
 					 	<td><a class="btn btn-success" href="usermakerequest_payement.php?mid=<?php echo $key['locker_request_id'] ?>">make payment</a></td>
 					 </tr>
 			



 				<?php } ?>
 			</tr>
 			
 		</table>
 	</form>
 </center>






 <?php include 'footer.php' ?>