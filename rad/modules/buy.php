<div id="velikibaner">
<img src="images/baner3.jpg" alt="vesti">
</div>
<div class="sredina" id="najnovije">


<div class="sredina" id="random">

<?php
	$id=isset($_GET["bid"]) && is_numeric($_GET["bid"])?$_GET["bid"]:0;
	$q= mysqli_query($conn,"select * from books where id={$id}");
    $rw=mysqli_fetch_object($q);
	
	if(!($rw)){
		echo "Ne postoji knjiga";
	}else{
?>
<div class="bestitems">
<h4><?php echo $rw->title; ?></h4>
<img src="images/<?php echo $rw->image; ?>" alt="koeljo">
<h5>Autor:</h5>
<p><?php echo $rw->author; ?></p>
<h5>Izdavac:</h5>
<p><?php echo $rw->publisher; ?></p>
<h5>Kategorija:</h5>
<p><?php echo $rw->category; ?></p>	
<h5>Cena:</h5>
<p><?php echo $rw->price; ?> rsd</p>
	<form action="?page=3" method="post"> 
			<input class="float" type="hidden" name="bid" value="<?php echo $rw->id; ?>"  />
			<input class="float" type="number" name="quantity" value="1" /> <input type="submit" value="dodaj" />
			</form>
        </div>  	

	
</div>

<?php
      }
	?>


</div>




<?php
	/*
       $q= mysqli_query($conn,"select * from books");
		   
       while($rw=mysqli_fetch_object ($q)){
?>
<div class="newitems">
<h4><?php echo $rw->title; ?></h4>
<img src="images/<?php echo $rw->image; ?>" alt="koeljo">
<h5>Autor:</h5>
<p><?php echo $rw->author; ?></p>
<h5>Izdavac:</h5>
<p><?php echo $rw->publisher; ?></p>
<h5>Kategorija:</h5>
<p><?php echo $rw->category; ?></p>	
<h5>Cena:</h5>
<p><?php echo $rw->price; ?> rsd</p>
	<button name="u korpu"><i class="fa fa-shopping-cart" aria-hidden="true">dodaj u korpu</i></button>	

	
</div>


<?php
	   }*/
?>




