<?php
function n($n)
{
    for ($i = 0; $i < $n; $i++)
    {
        for($j = 0; $j <= $i; $j++ )
        {
            echo "* ";
        }
        echo "\n";
    }
}
    $n = 3;
    n($n);
?>