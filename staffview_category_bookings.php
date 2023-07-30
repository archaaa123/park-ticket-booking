<?php include 'staffheader.php' ;
extract($_GET);
if(isset($_GET['hid'])){
	extract($_GET);
}
 	if(isset($_GET['aid'])){
 		extract($_GET);
 		$l="update categorybookings set status='accept' where cbooking_id='$aid' ";
 		update($l);
 		alert("accept successfully");
 		return redirect('staffview_category_bookings.php');
 	}




 	if(isset($_GET['rid'])){
 		extract($_GET);
 		$l="update categorybookings set status='reject' where cbooking_id='$rid' ";
 		update($l);
 		alert("reject  successfully");
 		return redirect('staffview_category_bookings.php');
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
	<br><br><br><br><br><br>
	<h3>Category Bookings</h3>
</center>
	</div>

        
      </div>

     
    </div>
  </section>
  <center>
	<form method="post">
		<table class="table" style="width: 500px;">
			<tr>
				<th>username</th>
				<th>Category name</th>
				<th>amount</th>
				<th>date</th>
				<th>status</th>
			</tr>
			<tr>
				<?php
				$w="select * from categorybookings inner join user using(user_id) inner join category on category.category_id=categorybookings.category_id";
				$res=select($w);
				foreach ($res as $key ) {
	 				?>
	 				<tr>
	 					<td><?php echo $key['fname'] ?></td>
	 					<td><?php echo $key['category'] ?></td>
	 					<td><?php echo $key['amount'] ?></td>
	 					<td><?php echo $key['date'] ?></td>
	 					<td><?php echo $key['status'] ?></td>


 <?php 
        if ($key['status']=="pending")
           {

          ?>
    <td><a class="btn btn-success" href="?aid=<?php echo $key['cbooking_id'] ?>">accept</a></td>
	 					<td><a class="btn btn-success" href="?rid=<?php echo $key['cbooking_id'] ?>">reject</a></td>
         </tr>
<?php } ?>



	 					
	 					<td><a class="btn btn-success" href="staffview_payment.php?hid=<?php echo $key['cbooking_id'] ?>">view payment</a></td>
	 				</tr>
					
				 	
			



			<?php } ?>
			</tr>

			
		</table>
	</form>
</center>


<?php include 'footer.php' ?>