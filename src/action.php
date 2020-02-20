<?php
    $num_of_tries = 0;

    function choose_action($action){
        if(strtolower($action)=== 'speak'){
            echo speak_action();
        } elseif(strtolower($action)=== 'run'){
            echo run_action();
        } elseif(strtolower($action)=== 'fight'){
            echo fight_action();
        } 
    };

    function speak_action(){
        echo "\n'What do you want?' you ask.";
        echo "\n Answer my riddle and I'll spare your life' the dragon replies. \n'What's orange and sounds like a parrot?' ";
        $response = readline("\n >> ");
            while (strtolower($response) != "a carrot" && $num_of_turns < 3){ echo "\nWRONG! What's orange and sounds like *a parrot*?"; 
            $response = readline("\n >> ");
            $num_of_tries++;
                if($num_of_tries === 2){
                    echo "\nThe dragon grows impatient and swallows you whole. \n\n***GAME OVER***";
                    exit();
                }
            }
        echo "\n'Well done!' cries the dragon. \n'I should spare your life...but I'm a hungry dragon and kind of a jerk.'\n";
        echo "\nThe dragon swallows you whole. \nThat's what you get for trusting a dragon, I guess.\n";
        echo "\n\n ***GAME OVER***\n\n";
        exit();
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