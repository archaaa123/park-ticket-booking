<?php include 'publicheader.php';
if(isset($_POST['submit'])){
	extract($_POST);
	$r="select * from user where fname='$fname'";
$res=select($r);
if(sizeof($res)>0){
	alert("already exist");

}else {


	$q="insert into login values(null,'$username','$password','user')";
	$lid=insert($q);
	$t="insert into user values(null,'$lid','$fname','$lname','$place','$phone','$email')";
	insert($t);
	alert("inserted successfully");
	return redirect('login.php');

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
 	<br><br><br><br>
 	<h3>User Register</h3>
 <form method="post">
 	<table  style="width: 500px; color: white">
 		<tr>
 			<th>Fname</th>
 			<td><input type="text" class="form-control" name="fname"></td>
 		</tr>
 		<tr>
 			<th>Lname</th>
 			<td><input type="text" class="form-control" name="lname"></td>
 		</tr>
 		<tr>
 			<th>place</th>
 			<td><input type="text" class="form-control" name="place"></td>
 		</tr>
 		<tr>
 			<th>phone</th>
 			<td><input type="number" class="form-control" maxlength="10" pattern="[0-9]{10}" name="phone"></td>
 		</tr>
 		<tr>
 			<th>Email</th>
 			<td><input type="email" class="form-control" name="email"></td>
 		</tr>
 		<tr>
 			<th>username</th>
 			<td><input type="text" class="form-control" name="username"></td>
 		</tr>
 		<tr>
 			<th>password</th>
 			<td><input type="password" class="form-control" name="password"></td>
 		</tr>
 		<tr>
 			<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit"></td>
 		</tr>
 		
 	</table>
 	
 </form>
</center>
</div>

        
      </div>

     
    </div>
  </section>
<?php include 'footer.php' ?>