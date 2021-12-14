<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function game()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, {$name}!");
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    for ($i = 0; $i < 3; $i++) {
        $rnd = rand(1, 100);
        $rightAnswer = ($rnd % 2 === 0) ? "yes" : "no";
        line("Question: {$rnd}");
        $answer = prompt("Your answer");

        if ($rightAnswer === $answer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            return false;
        }
    }

    line("Congratulations, {$name}!");
    return true;
}
