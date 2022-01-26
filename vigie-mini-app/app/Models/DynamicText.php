<?php

namespace App\Models;

class DynamicText
{
    private $possibleTexts = ["Some text", "I'm a button!", "Yesn't", "Idk", "ಥ_ಥ"];

    public function getNewText()
    {
        return $this->possibleTexts[rand(0, count($this->possibleTexts))];
    }
}