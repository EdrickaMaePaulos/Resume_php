<?php
enum Suit{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function do_stuff(Suit $suit){
    switch($suit){
        case Suit::Hearts:
            echo "You chose hearts!";
            break;
        case Suit::Diamonds:
            echo "You chose diamonds!";
            break;
        case Suit::Clubs:
            echo "You chose clubs!";
            break;
        case Suit::Spades:
            echo "You chose spades!";
            break;
    }
}

do_stuff(Suit::Hearts);
do_stuff(Suit::Diamonds);
do_stuff(Suit::Clubs);  
do_stuff(Suit::Spades);

?>