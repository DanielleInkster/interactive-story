<?php

include "action.php";
$num_of_turns = 0;

function take_turn(){
   while($num_of_turns < 3){
   echo "\n\n*** \n\nWhat will you do? ";
   echo  "\nChoices are 'run', 'fight' or 'speak'.\n\n***";
   $action = readline("\n >> ");
      if($action === 'speak'||$action === 'fight'||$action === 'run'){ 
      echo choose_action($action);
      $num_of_turns++;
      }else{
         echo "\n***Invalid selection.***\n";
      }
   }
   echo "\nThe dragon grows impatient and swallows you whole. \n\n***GAME OVER***";
   exit();
};