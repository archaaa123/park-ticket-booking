<?php include 'staffheader.php';
extract($_GET);

if(isset($_POST['submit'])){
	extract($_POST);
	$h="select * from enquiry  where reply='$reply'";
$res=select($h);
if (sizeof($res)>0) {
alert("already exist");
}



else{

	$did=$_SESSION['staff_id'];
	$g="update enquiry set reply='$reply' where enquiry_id='$xid'";
	update($g);
	alert("send reply successfully");
	return redirect('staffview_enquery.php');

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
 	<h3>Send Reply</h3>
 	<form method="post">
 		<table  style="width: 500px;color: white;">
 			<tr>
 				<th>Reply:</th>
 				<td><input type="text" class="form-control" name="reply" value="reply"></td>
 			</tr>
 			<tr>
 				<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="send reply"></td>
 			</tr>
 			
 		</table>
 		
 	</form>
 </center>
 </div>

        
      </div>

     
    </div>
  </section>
 <?php include 'footer.php' ?>