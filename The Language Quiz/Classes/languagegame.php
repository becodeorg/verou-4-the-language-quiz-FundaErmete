<?php

require_once 'data.php';
require_once 'word.php';
require_once 'player.php';

class LanguageGame
{
    private array $words;
    private ?Word $currentWord = null;
    private ?Player $player = null;

    public function __construct()
    {
        
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array
            $this->words[] = new Word($frenchTranslation, $englishTranslation);
        }   
    }

    public function run(): void
    {
        // TODO: check for option A or B
        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate
        // Option B: user has just submitted an answer

        if (!isset($_POST['answer'])) {
            $this->selectRandomWord();
        } else {
            $userAnswer = $_POST['answer'];
            $this->verifyAnswer($userAnswer);
        }
    }

    private function selectRandomWord(): void
    {
        $randomIndex = array_rand($this->words);
        $this->currentWord = $this->words[$randomIndex]; 
    }
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // TODO: generate a message for the user that can be shown

    }
