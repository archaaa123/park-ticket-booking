<?php include 'adminheader.php' ;
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
	<h3>Registered Users</h3>
</center>
</div>

        
      </div>

     
    </div>
  </section>

<center>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>Fname</th>
			<th>lname</th>
			<th>place</th>
			<th>phone</th>
			<th>email</th>
			
		</tr>
		<tr>
			<?php 
			$r="select * from user  ";
			$res=select($r);
			foreach ($res as $key ) {
				 ?>
				 <tr>
				 	<td><?php echo $key['fname'] ?></td>
				 	<td><?php echo $key['lname'] ?></td>
				 	<td><?php echo $key['place'] ?></td>
				 	<td><?php echo $key['phone'] ?></td>
				 	<td><?php echo $key['email'] ?></td>
				 </tr>
			




			<?php } ?>
		</tr>
	</table>
	
</form>
</center>

<?php include 'footer.php' ?>