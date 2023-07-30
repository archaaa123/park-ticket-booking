<?php include 'staffheader.php';
if(isset($_GET['aid'])){
		extract($_GET);
 		$l="update locker_request set status='accept' where locker_request_id='$aid' ";
 		update($l);
 		alert("accept successfully");
 		return redirect('staffview_locker_request.php');
 	}




 	if(isset($_GET['rid'])){
 		extract($_GET);
 		$l="update locker_request set status='reject' where locker_request_id='$rid' ";
 		update($l);
 		alert("reject  successfully");
 		return redirect('staffview_locker_request.php');
 	}
 	if(isset($_GET['hid'])){
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
 	<br><br><br>
 	<h3>View Locker Request</h3>
 </center>
   </div>

        
      </div>

     
    </div>
  </section>
  <center>
 	<form method="post">
 		
 
 	<table class="table" style="width: 500px">
 		<tr>
 			<th>locker name</th>
 			<th>user name</th>
 			<th>date</th>
 			<th>status</th>
 		</tr>
 		<tr>
 			<?php 
 			$r="select * from locker_request inner join user using(user_id) inner join locker using(locker_id)";
 			$res=select($r);
 			foreach ($res as $key) {
 				?>
 				<tr>
 					<td><?php echo $key['locker'] ?></td>
 					<td><?php echo $key['fname'] ?></td>
 					<td><?php echo $key['date'] ?></td>
 					<td><?php echo $key['status'] ?></td>



           <?php 
        if ($key['status']=="pending")
           {

          ?>
        <td><a class="btn btn-success" href="?aid=<?php echo $key['locker_request_id'] ?>">accept</a></td>
          <td><a class="btn btn-success"  href="?rid=<?php echo $key['locker_request_id'] ?>">reject</a></td>
        
<?php } ?>




 		
	 				<td><a class="btn btn-success"  href="staffview2_payment.php?hid=<?php echo $key['locker_request_id'] ?>">view payment</a></td>

 				</tr>
 			<?php } ?>
 		
 			 			


 		
 		</tr>
 		
 	</table>
 </form>
 </center>

 <?php include 'footer.php' ?>