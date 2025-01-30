<?php
    echo "<h1>Date<h2>";
    $date = date("Y-m-d");
    echo "<h4>Today is $date</h4>";

    echo '<h4>Today is '.date("d.m.Y").'</h4>';
    echo '<h4>Today is '.date("m/d/Y")."</h4>";
    echo "<h4>Today is ".date("d-m-Y")."</h4>";
    echo "<h4>Today is ".date("d M, Y")."</h4>";

    echo "<h2>Time</h2>";
    echo "<h4>The time is ".date("h:i:sa").'</h4>';
    echo date_default_timezone_get();

    date_default_timezone_set("Asia/Yangon");
    echo "<h4>The time is ".date("h:i:sa").'</h4>';

    echo "<h2>String to time</h2>";
    $today_strtotime = strtotime(date("d-m-y"));
    echo "Today is $today_strtotime";
    echo "<br>";

    $tomorrow = strtotime('tomorrow');
    echo "Today is $tomorrow";
    echo "<h3>Tomorrow is ".date('d-m-y',$tomorrow)."</h3>";

    $next_saturday = strtotime('next Saturday');
    echo "next satureday $next_saturday";
    echo "<h3>next satureday is ".date('d-m-y',$next_saturday)."</h3>";

    $two_weeks = strtotime('+2 week');
    echo "Next two week $two_weeks";
    echo "<h3>Next two week is ".date('d-m-Y',$two_weeks)."</h3>";




