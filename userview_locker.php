<?php include 'userheader.php';
 $qid=$_SESSION['user_id'];

if(isset($_GET['aid'])){
 extract($_GET);


  $r="select * from locker_request where locker_id='$aid' and user_id='$qid'";
 $res=select($r);
 if(sizeof($res)>0)
 {
 	alert("already exist");
 	return redirect('userview_locker.php');

 }
 else{


$g="insert into locker_request values(null,'$aid','$qid',curdate(),'accept')";
insert($g);
alert("send request  successfully");
return redirect('userview_locker.php');



}
 	
 	}




 ?>
  <section id="hero" >
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);  " >
        	<br><br><br><br><br> <br>
        	<center>
        	<h2>View Locker</h2>
        </center>

        	  </div></div></div></section>

       
      
 <center>
 	<br><br><br><br>
 	
 	<form method="post">
 		<table class="table"  style="width: 500px;">
 			<tr>
 			<th>staff name</th>
 			<th>description</th>
 			<th>details</th>
 			<th>amount</th>
 		</tr>
 		<tr>
 			<?php 
 			 $s="select * from locker inner join staff using(staff_id) ";
 			$res=select($s);
 			foreach ($res as $key ) {
 					 ?>
 					 <tr>
 					 	<td><?php echo $key['fname'] ?></td>
 					 	<td><?php echo $key['locker'] ?></td>
 					 	<td><?php echo $key['details'] ?></td>
 					 	<td><?php echo $key['amount'] ?></td>




 				<td><a class="btn btn-success" href="?aid=<?php echo $key['locker_id'] ?>">send locker request</a></td>








	<?php } ?>
 					 	 		

</tr>
 
 	

 		
 		</tr>

 		</table>
 		
 	</form>
 </center>

 <?php include 'footer.php' ?>