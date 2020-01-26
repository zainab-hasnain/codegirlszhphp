<!-- Zainab Hasnain 2019394 -->
<?php

// 3 row asterick pattern pyramid
$spaceCount = 10;
    for($row = 1; $row <= 3; $row++)
    {
        for($space = 0; $space < $spaceCount; $space++)
        {
            echo "&nbsp";
        }
        for($star = 0; $star < ($row*2)-1; $star++) 
        {
            echo "*";
        }
        $spaceCount-=2;
        echo "</br>";
    }
?> 