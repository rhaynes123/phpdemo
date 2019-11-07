<?php

	function GetAges()
	{
		$age = array("Rich"=>28
					,"Dick"=>2
					,"Richie"=>25
					,"Richard"=>28);
					
		if(isset($age["Richard"]))
		{
			print_r("Richard exists and is ".$age["Richard"]."\n");
		}
		else 
		{
			print_r("Richard doesn't exists\n");
		}
		if(isset($age["Dick"]))
		{
			print_r("Dick exists\n");
		}
		if(isset($age["Tim"]))
		{
			print_r("Tim does exists\n");
		}
		else 
		{
			print_r("Tim doesn't exists\n");
		}

	}
	
	GetAges();
?>