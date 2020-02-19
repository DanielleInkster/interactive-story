<?php

include "action.php";
$num_of_turns = 0;

function take_turn(){
   while ($num_of_turns < 3){
   echo "\n*** \nWhat will you do? \n***";
   $action = readline("\n >> ");
  echo "{$action}";
   $num_of_turns++;
   echo "{$num_of_turns}";
   }
};