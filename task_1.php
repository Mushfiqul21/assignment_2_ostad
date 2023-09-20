<?php

function evenNumbersFor($start, $end)
{
for($start; $start<=$end; $start++)
{
    if($start%2==0)
    {
            echo $start."\n";
    }
}
}
evenNumbersFor(1, 20);
function evenNumbersWhile($start, $end)
{
while($start<=$end)
{
    if($start%2==0)
    {
            echo $start."\n";
    }
        $start++;
}
}
evenNumbersWhile(1, 20);
function evenNumbersDoWhile($start, $end)
{
    do {
        if ($start % 2 == 0) {
            echo $start . "\n";
        }
        $start++;
    } while ($start <= $end);
}
evenNumbersDoWhile(1, 20);

?>