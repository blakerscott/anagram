
<?php
	 class AnagramDetector
		{
			function checkAnagram($input, $otherWords)
			{
				$otherWordsArray = explode(" ", $otherWords);
				$inputArray = str_split($input);
				sort($inputArray); //["a", "c", "t"]
				$inputResult = implode("", $inputArray); //"act"

				$theAnswer = array();
				foreach ($otherWordsArray as $word) {
					$split_list_word = str_split($word);
					sort($split_list_word);
					$otherWordsResult = implode("", $split_list_word);
					if ($otherWordsResult == $inputResult)
					{
							array_push($theAnswer, "It is an Anagram");
					}
					else
					{
							array_push($theAnswer, "It is not an Anagram");
					}

			}
			$result = $theAnswer;
			return $result;//
		}
	}
 ?>
