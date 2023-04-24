<!-- view/menu/affichage.php -->

<ul>			
	<?php
		$i = 0;

		while ( $i < sizeof($menu) ) 
		{ 
			$rubrique = $menu[$i]["rubrique"];
	?>
			<li class="sousmenu">
				<a href="#"><span class="icon-home3"></span>
					<?php echo $menu[$i]["rubrique"]; ?>
				</a>
				<ul class="children">
			<?php
				while ( $rubrique == $menu[$i]["rubrique"] ) 
				{
			?>	
						<li><a href="<?php echo "controler/".strtolower($menu[$i]["rubrique"])."/".$menu[$i]["option"]->getLien().".php"; ?>"><?php echo $menu[$i]["option"]->getLibelle(); ?><span class="icon-dots-horizontal-double"</span></a></li>	
			<?php		
						/* 
							Si on est pas à la fin
							et la rubrique suivante est differente
						*/
						if ( $i + 1 != sizeof($menu) &&
							 $menu[$i+1]["rubrique"] != $rubrique ) 
						{
							$rubrique = "$$$***";
						}
						else
							$i++;
				}
			?>
				</ul>
			</li>
			<?php
			$i++;
			?>
	<?php	
		}
	?>
</ul>




















<?php
/*	
	<ul>
		<li><a href="#"><span class="icon-home3"></span>Accueil</a></li>
		<li class="sousmenu">
			<a href="#"><span class="icon-briefcase"></span>Travaux</a>
			<ul class="children">
				<li><a href="#">Sousmenu #1 <span class="icon-dots-horizontal-double"</span></a></li>
				<li><a href="#">Sousmenu #2 <span class="icon-dots-horizontal-double"></span></a></li>
				<li><a href="#">Sousmenu #3 <span class="icon-dots-horizontal-double"></span></a></li>
			</ul>
		</li>
		<li><a href="#"><span class="icon-rocket"></span>Projets</a></li>
		<li><a href="#"><span class="icon-sphere"></span>Services</a></li>
		<li><a href="#"><span class="icon-envelop"></span>Contact</a></li>
	</ul>*/
?>	
