<?php include 'staffheader.php';
extract($_GET);





if(isset($_GET['cid'])){
	extract($_GET);
   $r="select * from categorybookings where status='confirm' and user_id='$hid'";
  $res=select($r);
 if(sizeof($res)>0)
 {
  alert("already exist");
  return redirect("staffview_payment.php?hid=$hid");

 }
 else{

	$r="update categorybookings set status='confirm' where cbooking_id='$hid'";
	update($r);
	alert("confirm payment");
	return redirect("staffview_payment.php?hid=$hid");


}
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
 	<h3>payment details</h3>
 </center>
  </div>

        
      </div>

     
    </div>
  </section>
  <center>
 	<form method="post">
 		<table class="table" style="width: 500px">
 			<tr>
 				<!-- <th>payment for id</th> -->
 				<th>payment for</th>
 				<th>amount</th>
 				<th>date</th>
 				<th>status</th>
 			</tr>
 			<tr>
 				<?php 
 				  $f="select * from payment inner join categorybookings on categorybookings.cbooking_id=payment.paymentfor_id  where payment_for='category booking' AND paymentfor_id='$hid'";
 				$res=select($f);
 				foreach ($res as $key ) {
 					 ?>
 					 <tr>
 					 	<!-- <td><?php echo $key['cbooking_id'] ?></td> -->
 					 	<td><?php echo $key['payment_for'] ?></td>
 					 	<td><?php echo $key['amount'] ?></td>
 					 	<td><?php echo $key['date'] ?></td>
 					 	<td><?php echo $key['status'] ?></td>
            <td><a class="btn btn-success" href="?cid=<?php echo $key['payment_id'] ?> &hid=<?php echo $key['cbooking_id'] ?>">confirm payment</a></td>
 					 	
 					 </tr>
 			


 					<?php } ?>
 				
 			</tr>
 		</table>
 	</form>
 </center>
 



 <?php include 'footer.php' ?>