<?php include 'userheader.php';
 



$qid=$_SESSION['user_id'];



if(isset($_GET['cid'])){
	extract($_GET);
   $r="select * from foodbookings where food_id='$cid'";
$res=select($r);
if(sizeof($res)>0){
  alert("already exist");
}else{



    

    $h="insert into foodbookings values(null,'$qid','$cid','$amount',curdate(),'booked')";
    insert($h);


 		alert("booked successfully");
 		return redirect("userview_food.php?qid=$qid");


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
 	<h2>View Food</h2>
 </center>
 	</div>

        
      </div>

     
    </div>
  </section>
  <center>
 	<form method="post" enctype="multipart/form-data">
 		<table style="width: 500px;">
 			<tr>
 				<th>staffname</th>
 				<th>foodname</th>
 				<th>amount</th>
 				<th>image</th>
 			
 			</tr>
 			<tr>
 				<?php 
 				$d="select * from food inner join staff using(staff_id)  ";
 				$res=select($d);
 				foreach ($res as $key ) {
 					 ?>
 					 <tr>
 					 	<td><?php echo $key['fname'] ?></td>
 					 	<td><?php echo $key['foodname'] ?></td>
 					 	<td><?php  echo $key['amount'] ?></td>
 					 	<td><img src="<?php echo $key['image'] ?>" width="100" height="100"	></td>
 					 
 					 	<td><a class="btn btn-success" href="?cid=<?php echo $key['food_id'] ?>&amount=<?php echo $key['amount'] ?>">book food</a></td>
 					 </tr>


			<?php } ?>
 			 </tr>
 		</table>
 		
 	</form>
 </center>
 
 <?php include 'footer.php' ?>