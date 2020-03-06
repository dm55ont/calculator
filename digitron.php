<?php
	$izlaz = "";
	
	if(@$_POST['glavni']) {
		$broj1 = $_POST['br1'];
		$broj2 = $_POST['br2'];
		$operacija = $_POST['op'];
		
		$broj1 = trim(strip_tags($broj1));
		$broj2 = trim(strip_tags($broj2));	
		
		$resetporuka = '<a href="'.htmlentities($_SERVER['REQUEST_URI']).'">Resetuj</a>';
		
		// $operacija je $_POST['op'];
	 	if($operacija == "+"){
			$odgovor = $broj1 + $broj2;
		}
		if($operacija == "-"){
			$odgovor = $broj1 - $broj2;
		}		
		if($operacija == "*"){
			$odgovor = $broj1 * $broj2;
		}
		if($operacija == "/"){
			$odgovor = $broj1 / $broj2;
		}
		// Provera validnosti:
		if(strlen($broj1) > 5 || strlen($broj2) > 5){
			$izlaz = '<p class="error"><strong>Greska:</strong>
			Uneli ste broj sa 10 i vise cifara.'.$resetporuka.'			
			</p>';		
		}
		if(empty($broj1) || empty($broj2)){
			$izlaz = '<p class="error"><strong>Greska:</strong>
			Morate uneti vrednosti.'.$resetporuka.'			
			</p>';
		}
		if(!preg_match("([0-9])",$broj1) || !preg_match("([0-9])",$broj2) || preg_match("([a-z])i",$broj1) || preg_match("([a-z])i",$broj2) ){
			$izlaz = '<p class="error"><strong>Greska:</strong>
			Mozete uneti samo brojeve.'.$resetporuka.'			
			</p>';		
		}
		else{
            $izlaz = "<p><strong>Izlaz:</strong>"."$broj1"."$operacija"."$broj2"."="."$odgovor $resetporuka".
			"</p>";		
		}
	}

	
?>						
