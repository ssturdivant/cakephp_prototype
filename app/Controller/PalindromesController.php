<?php

class PalindromesController extends AppController
{
    public $helpers = array('Html', 'Form');

	public function index()
	{
		
	}
	
	public function test_strings()
	{
		$laStringArray = explode("\n", $_POST["text_to_test"]);
		
		$liStringIndex = 0;
		
		$laPalindromeArray = array();
		
		while($liStringIndex < count($laStringArray))
		{
			$lcString = $laStringArray[$liStringIndex];
		
			array_push($laPalindromeArray, new $this->Palindrome(strtoupper($lcString)));
			$liStringIndex = $liStringIndex + 1;
		}
		
		$this->set("iaPalindromeArray", $laPalindromeArray);
	}
}