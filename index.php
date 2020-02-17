<?php
include "turn.php";

echo "Welcome stranger! What is your name?\n";
$name = readline("\n >> ");
echo "\nWelcome {$name}!\n";
echo "\nYou're just in time! The village of Thirnov is in great peril \nand needs a hero such as yourself to save them. \nWill you accept the quest?\n";
$answer = readline("\n >> ");
while (strtolower($answer) != "yes"){ echo "Please reconsider. Will you accept the quest?\n"; $answer = readline("\n >> ");}
echo "\n Fantastic! Let's begin...";
take_turn();
;