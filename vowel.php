<?php
$source_string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$separated_words = explode(' ', $source_string);
$vowel_letters = ['a', 'e', 'i', 'o', 'u', 'y' ,'A', 'E', 'I', 'O', 'U', 'Y'];
foreach($separated_words as $separated_word)
{
	$vowel_matches = 0;
	foreach($vowel_letters as $vowel_letter)
	{
		$vowel_matches += substr_count($separated_word, $vowel_letter);
	}
	if($vowel_matches % 2 == 0)
		$changed_array [] = $separated_word;
}
$changed_string = implode(' ', $changed_array);
echo '<pre>';
var_dump($changed_string);
echo '</pre>';
?>