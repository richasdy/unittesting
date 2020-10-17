<?php
// File : Utils.php
class Utils
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
    }
}
?>