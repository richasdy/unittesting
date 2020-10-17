<?php
// File : Utils.php
Class Utils
{
    public function countWords($sentence)
    {
        return count(explode(" ",$sentence));
    }

    public function getMark($grade)
    {
        if ($grade > 90) { return "A";} 
        elseif ($grade > 80) {return "AB";}
        elseif ($grade > 70) {return "B";}
        elseif ($grade > 60) {return "BC";}
        elseif ($grade > 50) {return "C";}
        elseif ($grade > 40) {return "D";}
        else {return "E";}

    }
}
?>