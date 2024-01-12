<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
   private string $frenchword;
   private string $englishAnswer;

   public function __construct(string $frenchWord, string $englishAnswer)
   {
    $this->frenchWord = $frenchWord;
    $this->englishAnswer = $englishAnswer;
   }

   
        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Allow answers with different casing
        // Allow answers with small typo's

    public function verify(string $answer): bool
    {
        return strtolower($answer) === strtolower($this->englishAnswer);  
    }

    public function getFrenchWord(): string
    {
        return $this->frenchWord;
    }

    public function getEnglishAnswer(): string
    {
        return $this->englishAnswer;
    }
}
?>
