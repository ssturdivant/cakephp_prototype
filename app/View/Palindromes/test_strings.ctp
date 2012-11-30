<?php 
	$liPalindromeCounter = 0;
	
	while($liPalindromeCounter < count($iaPalindromeArray)): ?>

		<?php if($iaPalindromeArray[$liPalindromeCounter]->ibIsPalindrome): ?>
			<?php echo $iaPalindromeArray[$liPalindromeCounter]->icBaseString ?> is a Palindrome<br />
		<?php else: ?>
			<?php echo $iaPalindromeArray[$liPalindromeCounter]->icBaseString ?> is not a Palindrome<br />
		<?php endif; ?>
		
		<?php if($iaPalindromeArray[$liPalindromeCounter]->ibIsMirrored): ?>
			<?php echo $iaPalindromeArray[$liPalindromeCounter]->icBaseString ?> is Mirrored<br />
		<?php else: ?>
			<?php echo $iaPalindromeArray[$liPalindromeCounter]->icBaseString ?> is not Mirrored<br />
		<?php endif; ?>
		
		<br />

		<?php $liPalindromeCounter = $liPalindromeCounter + 1 ?>
	<?php endwhile ?>