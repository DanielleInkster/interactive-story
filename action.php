<?php

function choose_action($action){
    if(strtolower($action)=== 'speak'){
        echo "'What do you want?' you ask.";
    } elseif(strtolower($action)=== 'run'){
        echo run_action();
    }
};

function speak_action(){

};

function fight_action(){
    
};

function run_action(){
    echo "You turn to run back to the opening of the cave. \nThe dragon burns you to a crisp. \n";
    echo "Better luck next time!";
    exit();
};
;