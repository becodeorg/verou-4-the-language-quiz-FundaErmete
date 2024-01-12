<?php

require_once 'data.php';
require_once 'word.php';
require_once 'player.php';

class LanguageGame
{
    private array $words;
    private ?Word $currentWord = null;
    private ?Player $player = null;

    public function __construct(string $playerName)
    {
        $this->player = new Player($playerName);
        $this->initializeWords();
    }

    private function initializeWords(): void
    {
        foreach (Data::words() as $frenchWord => $englishAnswer) {
            $this->words[] = new Word($frenchWord, $englishAnswer);
        }
    }

    public function run(): void
    {
        // TODO: check for option A or B
        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate
        // Option B: user has just submitted an answer

        if (!isset($_POST['user_answer'])) {
            $this->selectRandomWord();
        } else {
            $userAnswer = $_POST['user_answer'];
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

        private function verifyAnswer(string $userAnswer): void
        {
            if ($this->currentWord && $this->currentWord->verify($userAnswer)) {
                $this->player->increaseScore();
                $message = 'Correct! Well done!';
            } else {
                $message = 'Oops! That\'s not correct. Try again!';
            }
    
            // Display the results in the view.php file
            require 'view.php';
        }
    
        public function getCurrentWord(): ?Word
        {
            return $this->currentWord;
        }
    
        public function getPlayer(): ?Player
        {
            return $this->player;
        }
    }
?>