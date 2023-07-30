<?php include 'userheader.php';


    $qid=$_SESSION['user_id'];

   
if(isset($_GET['aid'])){
 		extract($_GET);
     $r="select * from categorybookings where user_id='$qid'";
$res=select($r);
if(sizeof($res)>0){
  alert("already exist");
}else{



 		

    $h="insert into categorybookings values(null,'$qid','$aid','$amount',curdate(),'booked')";
    insert($h);
 		alert("booked successfully");
  	return redirect('userview_category.php?qid=$qid');
 	 }
  }




 ?>
   <section id="hero" >
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

       <!--   Slide 1 -->
         <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg) "> 
 <center>
 	<br><br><br><br><br><br><br><br><br><br>
 	<h2>View Category</h32>
 </center>
 	</div>

        
      </div>

     
    </div>
  </section>
  <center>
 	<form method="post">
 		<table  class="table" style="width: 500px">
 			<tr>
 			<th>category</th>
 			<th>description</th>
 			<th>amount</th>
 			
 			<th></th>
 		</tr>
 		<tr>
 			<?php 
 			$s="select * from category ";
 			$res=select($s);
 			foreach ($res as $key ) {
 					 ?>
 					 <tr>
 					 	<td><?php echo $key['category'] ?></td>
 					 	<td><?php echo $key['description'] ?></td>
 					 	<td><?php echo $key['amount'] ?></td>
 					 	<th></th>
 					 	<td><a class="btn btn-success" href="?aid=<?php echo $key['category_id'] ?>&amount=<?php echo $key['amount'] ?>&description=<?php echo $key['description'] ?>">book ticket</a></td>
 					 </tr>
 					<?php } ?>
 		



 		
 		</tr>
 		</table>
 		
 	</form>
 </center>
 
 <?php include 'footer.php' ?>