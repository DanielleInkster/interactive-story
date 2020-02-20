<?php

function choose_action($action){
    if(strtolower($action)=== 'speak'){
        echo "'What do you want?' you ask.";
    } elseif(strtolower($action)=== 'run'){
        echo run_action();
    } elseif(strtolower($action)=== 'fight'){
        echo fight_action();
    } else {
        echo "\n***\nInvalid selection. \nChoices are 'run', 'fight' or 'speak'.\n***";
    }
};

function speak_action(){

};

function fight_action(){
    echo "\n You swing your sword at the dragon but it is too heavy. \n You miss by a wide margin.\n";
};

function run_action(){
    echo "You turn to run back to the opening of the cave. \nThe dragon burns you to a crisp. \n";
    echo "Better luck next time!\n\n ***GAME OVER***\n\n";
    exit();
};
;