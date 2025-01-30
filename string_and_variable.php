<?php 
    $name = "Ye Aung";
    $address = "Hopong";

    echo $name;
    echo "<br>";
    echo "My name is $name";
    echo "<br>";
    echo 'My name is $name';
    echo "<br>";
    echo 'My name is'.$name;
    echo "<br>";
    echo $name.' Live in '.$address;


    $first_name = "Ye";
    $last_name = "Aung";
    echo "<h3>$first_name</h3>";
    $first_name = $last_name;
    echo "<h3>$first_name</h3>";

    $first_name .= $last_name;
    echo "<h3>$first_name</h3>";


    //trim()
    $singer_name = " Htoo Ein Thin ";
    echo "<h3> My favourite singer is$singer_name.";

    $trim_name = trim($singer_name);
    echo "<h3> My favourite singer is$trim_name.";

    echo strlen($first_name);
    echo "<br>";

    echo strtoupper($singer_name);
    echo "<br>";

    echo strtolower($singer_name);
    echo "<br>";

    echo substr("Hello My Student",7);
    echo "<br>";
    echo substr("Hello My Student",6,4);
    echo "<br>";
    echo substr("Hello My Student",-4);
    echo "<br>";
    // str_replace(search,replace,subject);
    echo str_replace("Mandalay","Smart City","Hello hpn ");
?>