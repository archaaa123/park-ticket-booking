<?php include 'userheader.php';


extract($_GET);



if(isset($_POST['pay'])){
	extract($_POST);
	 $x="insert into payment values(null,'$pid','foodbooking','$amount',curdate())";
	insert($x);
	
	$h="update foodbookings set status='paid'";
	update($h);

	alert("paid successfully");
	return redirect('usermake1_payment.php');

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
 	<h3>Payment</h3>
 	<form method="post">
 		<table  style="width: 500px;color: white">
 			<tr>
 				<th>cardno:</th>
 				<td><input type="number" class="form-control" maxlength="16" pattern="[0-9]{16}" name="cardno"></td>
 			</tr>
 			<tr>
 				<th>cvv:</th>
 				<td><input type="number" class="form-control" maxlength="3" name="cvv"></td>
 			</tr>
 			
 			<tr>
 				<th>cardholder name:</th>
 				<td><input type="text" class="form-control" name="cardholder"></td>
 			</tr>
 			<tr>
 				<th>amount:</th>
 				<td><input type="text" class="form-control"   value="<?php echo $amount ?>" name="amount"></td>
 			</tr>
 			<tr>
 				<th>expiry date:</th>
 				<td><input type="date" class="form-control" name="expirydate"></td>
 			</tr>
 			<tr>
 				<td colspan="2" align="center"><input type="submit" class="btn btn-success" name="pay" value="pay"></td>
 			</tr>
 		</table>
 		
 	</form>
 </center>
   </div>

        
      </div>

     
    </div>
  </section>

 <?php include 'footer.php' ?>