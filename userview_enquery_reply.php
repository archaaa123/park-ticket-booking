<?php include 'userheader.php'



 ?>
 <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg) ">

 <center>
 	<br><br><br><br>
 <h3>view enquery</h3>
 <form>
 	 <table> 
 	 	<tr>
 	 		<th>enquery</th>
 	 		<th>reply</th>
 	 		<th>date</th>
 	 	</tr>
 	 	<tr>
 	 		<?php
 	 		$g="select * from enquiry";
 	 		$res=select($g); 
 	 		foreach ($res as $key ) {
 	 			 ?>
 	 			 <tr>
 	 			 	<td><?php echo $key['enquiry'] ?></td>
 	 			 	<td><?php echo $key['reply'] ?></td>
 	 			 	<td><?php echo $key['date'] ?></td>
 	 			 </tr>
 	 	



 	 		<?php } ?>
 	 	</tr>
 	

	
 	</table>
  </form>
</center>
</div>

        
      </div>

     
    </div>
  </section>
 <?php include 'footer.php' ?>