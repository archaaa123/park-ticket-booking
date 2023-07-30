<?php include 'adminheader.php';





	if(isset($_GET['aid'])){
		extract($_GET);

		$lid=$_SESSION['login_id'];


 		$l="update login set usertype='staff' where login_id='$aid'";
 		update($l);
 		alert("accept successfully");
 		return redirect('adminhome.php');
 	}




 	if(isset($_GET['rid'])){
 		extract($_GET);
 		$b="update login set usertype='block' where login_id='$rid'";
 		update($l);
 		alert("reject  successfully");
 		return redirect('login.php');




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
 	<h3>View Staffs</h3>
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
 			<th>Lname</th>
 			<th>place</th>
 			<th>phone</th>
 			<th>email</th>
 		</tr>
 		<tr>
 			<?php 
 			$d="select * from staff inner join login using (login_id)";
 			$res=select($d);
 			foreach ($res as $key ) {
 				 ?>
 				 <tr>
 				 	<td><?php echo $key['fname'] ?></td>
 				 	<td><?php echo $key['lname'] ?></td>
 				 	<td><?php echo $key['place'] ?></td>
 				 	<td><?php echo $key['phone'] ?></td>
 				 	<td><?php echo $key['email'] ?></td>


  <?php 
        if ($key['usertype']=="pending")
           {

          ?>
      <td><a class="btn btn-success" href="?aid=<?php echo $key['login_id'] ?>">accept</a></td>
      <td><a class="btn btn-success" href="?rid=<?php echo $key['login_id'] ?>">reject</a></td>
         </tr>
<?php } ?>






 			

 			
 			



 			<?php } ?>
 		</tr>
 	</table>	
 	</form>
 </center>
 
 <?php include 'footer.php' ?>