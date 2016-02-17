<?php

	require_once 'src/Anagram.php';

	class AnagramTest extends PHPUnit_Framework_TestCase
	{

		function test_anagram_oneWord()
		{
				//Arrange
				$test_Anagram_Detector = new AnagramDetector;
				$input = "ahyrt";
				$otherwords = "tryha";

				//Act
				$result = $test_Anagram_Detector->checkAnagram($input, $otherwords);

				//Assert
				$this->assertEquals(array("It is an Anagram"), $result);
		}

		function test_anagram_multipleWords()
		{
				//Arrange
				$test_Anagram_Detector = new AnagramDetector;
				$input = "large";
				$otherwords = "regal lager brunted poop";


				//Act
				$result = $test_Anagram_Detector->checkAnagram($input, $otherwords);

				//Assert
				$this->assertEquals(array("It is an Anagram", "It is an Anagram", "It is not an Anagram", "It is not an Anagram"), $result);
		}



	}

?>
