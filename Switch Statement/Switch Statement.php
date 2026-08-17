<?php 

$day = trim(readline("Enter a day of the week: "));


switch (mb_strtolower($day)) {
    case "monday":
        echo "It's the first of the week -_-";
        break;
    case "tuesday":
        echo "It's Tuesday not bad...";
        break;
    case "wednesday":
        echo "Wednesday... just a little more...";
        break;
    case "thursday":
        echo "finally Thursday 1 more day!";
        break;
    case "friday":
        echo "FRIDAY NA!!!!! AAAAAAAA";
        break;
    case "saturday":
    case "sunday":
        echo "Finally!!!!!";
    default:
        echo"Invalid input. Please enter a valid day.";
}   
?>
