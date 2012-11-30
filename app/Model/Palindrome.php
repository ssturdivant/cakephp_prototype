<?php

class Palindrome {
	public $icBaseString = "";
	public $ibIsPalindrome = false;
	public $ibIsMirrored = false;
	
	private $ihMirrorMatches = array("A" => "A","B" => NULL,"C" => NULL,"D" => NULL,"E" => "3","F" => NULL,"G" => NULL,"H" => "H","I" => "I","J" => "L","K" => NULL,"L" => "J","M" => "M","N" => NULL,"O" => "O","P" => NULL,"Q" => NULL,"R" => NULL,"S" => NULL,"T" => "T","U" => "U","V" => "V","W" => "W","X" => "X","Y" => "Y","Z" => NULL, "3" => "E");
	
	public function __construct($pcString)
	{	
		if(!is_array($pcString))
		{
			$this->icBaseString = $pcString;

			$this->is_palindrome();
			$this->is_mirrored();
		}
	}
	
	private function is_palindrome()
	{	
		$lcReversedString = strrev($this->icBaseString);
		
		$this->ibIsPalindrome = $lcReversedString == $this->icBaseString;
	}
	
	private function is_mirrored()
	{
		$liStringLength = strlen($this->icBaseString);
		
		$liHalfLength = floor($liStringLength / 2);
		
		$lcFirstHalf = substr($this->icBaseString, 0, $liHalfLength);
		
		if(($liStringLength % 2) == 0)
		{	
			$lcSecondHalf = substr($this->icBaseString, $liHalfLength, $liStringLength);
		}
		else
		{
			$lcSecondHalf = substr($this->icBaseString, ($liHalfLength + 1), $liStringLength);
		}
		
		$lcSecondHalf = strrev($lcSecondHalf);
		
		$laFirstHalfCharacters = str_split($lcFirstHalf);
		$laSecondHalfCharacters = str_split($lcSecondHalf);
		
		$liCharacterIndex = 0;
		
		while($liCharacterIndex < $liHalfLength)
		{	
			$lcFirstCharacterMap = $this->ihMirrorMatches[$laFirstHalfCharacters[$liCharacterIndex]];
			
			if(is_null($lcFirstCharacterMap))
			{
				$this->ibIsMirrored = false;
				return;
			}
			
			$lcSecondCharacter = $laSecondHalfCharacters[$liCharacterIndex];

			if($lcSecondCharacter != $lcFirstCharacterMap)
			{
				$this->ibIsMirrored = false;
				return;
			}
			
			$liCharacterIndex = $liCharacterIndex + 1;
		}
		
		$this->ibIsMirrored = true;
	}
}