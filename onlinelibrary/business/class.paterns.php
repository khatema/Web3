<?php

class paterns{
  	   

  	// paterns for names   
  	function namePaterns($name){
	 	return  preg_match("/[A-Za-z]{1,10}[0-9]{0,}\s?[A-Za-z]{0,10}[0-9]{0,}/",$name);
	}

	//paterns for Numbers 
	function numberPaterns($number){

		return  preg_match("/[0-9]{1,10}/",$number);
		
	}

	//Paterns For Emails
	function emailPaterns($email){
          return preg_match("/^(\w+\.)*\w+@(\w+\.)+[A-Za-z]+$/", $email);
	}

}

?>