<?php

class PalindromesController extends AppController
{
    public $helpers = array('Html', 'Form');

	public function index()
	{
		
	}
	
	public function test_strings()
	{
		$laStringArray = $this->split_string($_POST["text_to_test"]);
		
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
	
	protected function split_string($pcString)
	{
		$laStringParts = array();
		
		$loToken = strtok($pcString, "\n");
		
		while($loToken !== false)
		{
			array_push($laStringParts, trim($loToken));
			$loToken = strtok("\n");
		}
		
		return $laStringParts;
	}
}