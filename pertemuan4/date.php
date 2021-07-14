<?php
    // date displat date for specific format
    echo date("l , d-M-Y");
    echo "<br>";
    // time
    // unix time stamp / epoch time
    echo time();
    echo "<br>";
    echo date('l', time()+(60*60*24*100));
    //mktime
    // created time alone
    //mktime(hour, minute, second, month, date, year)
    echo "<br>";
    echo mktime(0,0,0,11,3,1988);
    echo "<br>";
    echo date('l', mktime(0,0,0,11,3,1988));
    echo "<br>";
    echo date('l',strtotime("03 nov 1988"));

?>