
<?php 
	$theme = 0;
	$aaa;
	?>

	
		<?php   
		 	
			if ($theme==1)
			{ 	
				$aaa = 'img/tn-01.jpg';		
			}
			else {
				
				$aaa = 'img/bg.jpg';
			}
			
		?>

<div class="img" style="background-image :url(<?php echo $aaa; ?>);">
	

  	<!-- HETHI TETBADDEL POUR LE THEME BLANC EN ARRIERE PLAN 
		<div  class="img" style="background-image: url(img/tn-01.jpg);" >   -->
  
 <!--	///////////////////////////////////////////////////////////////////////////////	-->































































<!-- POUR LE THEME -->
				<?php
				function light()
				{
					$theme=1;
				}
				
				function dark()
				{
					$theme=0;
				}


				?>

				<button  class="btn btn-danger" onclick= " light()" > Toggle light mode </button>

				<button  class="btn btn-danger" onclick=  "dark()" > Toggle dark mode</button>


					<!-- POUR LE THEME -->