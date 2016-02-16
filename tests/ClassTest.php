<?php

	require_once 'src/Anagram.php';

	class AnagramTest extends PHPUnit_Framework_TestCase
	{

		function test_anagram_oneLetter()
		{
				//Arrange
				$test_Anagram_Detector = new AnagramDetector;
				$input = 'abc';
				$otherwords = 'abc';

				//Act
				$result = $test_Anagram_Detector->checkAnagram($input, $otherwords);

				//Assert
				$this->assertEquals('a', $result);
		}
	}

?>
