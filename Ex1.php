<!-- 
Write a program to show day of the week using switch
Description:

Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements.

Conditions:

You can pass 1 to 7 number in switch
Day 1 will be considered as Monday
If number is not between 1 to 7, show invalid number in default 
-->

<html>

<head>
    <title></title>
</head>

<body>
    <?php

        $day = "5";

        switch ($day) {
            case '1':
                echo "The day is Sunday";
                break;
            
                case '2':
                    echo "The day is Monday";
                    break;

                    case '3':
                        echo "The day is Tuesday";
                        break;

                        case '4':
                            echo "The day is Wednesday";
                            break;

                            case '5':
                                echo "The day is Thursday";
                                break;

                                case '6':
                                    echo "The day is Friday";
                                    break;

                                    case '7':
                                        echo "The day is Saturday";
                                        break;
            default:
                                        echo "Your number is not valid between 1 and 7";
                break;
        }
        ?>
</body>

</html>