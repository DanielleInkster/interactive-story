<?php
include "turn.php";

echo "Welcome stranger! What is your name?\n";
$name = readline("\n >> ");
echo "\nWelcome {$name}!\n";
echo "\nYou're just in time! The village of Thirnov is in great \nperil and needs a hero such as yourself to save them. \n\nWill you accept the quest?\n";
$answer = readline("\n >> ");


echo "\n Fantastic! Let's begin...\n\n";
echo "***\n\n You are brought to the mouth of a cave.\n You are handed a sword and shoved towards the opening. ";
echo "\n You enter the cave to see a fierce dragon!\n\n***";

take_turn();
;