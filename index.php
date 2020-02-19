<?php
include "turn.php";

echo "Welcome stranger! What is your name?\n";
$name = readline("\n >> ");
echo "\nWelcome {$name}!\n";
echo "\nYou're just in time! The village of Thirnov is in great \nperil and needs a hero such as yourself to save them. \nWill you accept the quest?\n";
$answer = readline("\n >> ");
while (strtolower($answer) != "yes"){ echo "Please reconsider. Will you accept the quest?\n"; $answer = readline("\n >> ");}
echo "\n Fantastic! Let's begin...\n";
echo "***\n The villager leads you to the mouth of a cave.\n He hands you a sword and shoves you towards the opening. ";
echo "\n You enter the cave to see a fierce dragon!\n***";

take_turn();
;