<?php include 'publicheader.php';
if(isset($_POST['submit'])){
	extract($_POST);
	 $g="select * from  login where username='$username' and password='$password'";
	$res=select($g);

	if(sizeof($res)>0){
		$_SESSION['login_id']=$res[0]['login_id'];
		$lid=$_SESSION['login_id'];
		if(sizeof($res)>0){


		$_SESSION['login_id']=$res[0]['login_id'];


		$lid=$_SESSION['login_id'];
		




		if($res[0]['usertype']=='admin'){
			return redirect('adminhome.php');
		}

	elseif ($res[0]['usertype']=='staff') {
		  $d="select * from staff inner join login using(login_id) where login_id='$lid'";
		$result=select($d);
		if(sizeof($result)>0){

			$_SESSION['staff_id']=$result[0]['staff_id'];

			$did=$_SESSION['staff_id'];
			 return redirect('staffhome.php');
		}

	}elseif ($res[0]['usertype']=='user') {


		$q="select * from user inner join login using (login_id) where login_id='$lid'";
			$re=select($q);
		if(sizeof($re)>0){



			$_SESSION['user_id']=$re[0]['user_id'];

			$qid=$_SESSION['user_id'];
			
					
					return redirect('userhome.php');

	}
	

	

}
else{
		alert("invalid username and password");
}
return redirect('login.php');
	
}


}


}




 ?>
<!--  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    	 <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
 --> 
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg) ">
        	 
        
        



 <center>
 	<br><br><br><br><br>
 	<h2>LOGIN</h2>
 <form method="post">
 	<table  style="width: 500px;color: white">
 		<tr>
 			<th>Username:</th>
 			<td><input type="text" class="form-control" required="" name="username"></td>
 		</tr>
 		<tr>
 			<th>Password:</th>
 			<td><input type="password" class="form-control" name="password"></td>

 		</tr>
 		<tr>
 			<td colspan="2" align="center" ><input type="submit" class="btn btn-primary"  name="submit"></td>
 		</tr>
 		
 	</table>
 </form>
</center>


</div>

        
      </div>

     
    </div>
  </section>
  <!-- End Hero -->
<!--  </div>
 </div>
  </section> -->
 <?php include 'footer.php' ?>




