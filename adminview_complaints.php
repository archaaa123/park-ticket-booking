<?php include 'adminheader.php';
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
 	<h3>View Complaints</h3>
 
 </center>
  </div>
   
   </div>

    </div>
  </section>
  <center>
 	<form  method="post">
 		<table class="table" style="width: 500px">
 			<tr>
 				<th>username</th>
 				<th>compliant</th>
 				<th>reply</th>
 				<th>date</th>


 			</tr>
 			<tr>
 				<?php 
 				$e="select * from complaint inner join user using(user_id)";
 				$res=select($e);
 				foreach ($res as $key) {
 					 ?>
 					 <tr>
 					 	<td><?php echo $key['fname'] ?></td>
 					 	<td><?php echo $key['complaint'] ?></td>
            <?php 
        if ($key['reply']=="pending")
           {

          ?>
      <td><a class="btn btn-success" href="adminsend_reply.php?xid=<?php echo $key['complaint_id'] ?>">send reply</a></td>
<?php 
}
else
{
 ?>
        <td><?php echo $key['reply'] ?></td>
        <?php } ?>
 					 	
 					 	<td><?php echo $key['date'] ?></td>
 					
 					 </tr>
 			


 					<?php } ?>
 				
 			</tr>
 		</table>
 		
 	</form>
 </center>

 <?php include 'footer.php' ?>


