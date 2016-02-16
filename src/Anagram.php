<?php
	 class AnagramDetector
		{
			function checkAnagram($input, $otherWords)
			{
				$inputArray = str_split($input);
				$otherWordsArray = str_split($otherWords);
				sort($inputArray);
				sort($otherWordsArray);
				$inputResult = implode("", $inputArray);
				$otherWordsResult = implode("", $otherWordsArray);

				if ($inputResult == $otherWordsResult)
				{
						$result = "It is an Anagram";
				}
				else
				{
						$result = "It is not an Anagram";
				}
				return $result;
			}


		}

 ?>
