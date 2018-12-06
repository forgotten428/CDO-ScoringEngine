<meta http-equiv="refresh" content="5">
<title>CDO Mini Hack</title>
<b>Simple Scoring Engine -Andrew :)</b>
<h1>Ping = 5 points</h1>
<h1>Web = 5 points</h1>
<h1>Web Content = 10 Points</h1>
<h1>Team1:</h1>
<?php
	$team1="/var/www/html/teams/team101";
	if(file_exists($team1)){
	echo file_get_contents($team1);
}
?>
<h1>Team2:</h1>
<?php
        $team2="/var/www/html/teams/team102";
        if(file_exists($team2)){
        echo file_get_contents($team2);
        }
?>
<h1>Team3:</h1>
<?php
        $team3="/var/www/html/teams/team103";
        if(file_exists($team3)){
        echo file_get_contents($team3);
        }
?>
<h1>Team4:</h1>
<?php
        $team4="/var/www/html/teams/team104";
        if(file_exists($team4)){
        echo file_get_contents($team4);
        }
?>
<h1>Team5:</h1>
<?php
        $team5="/var/www/html/teams/team105";
        if(file_exists($team5)){
        echo file_get_contents($team5);
        }
?>
<h1>Team6:</h1>
<?php
        $team6="/var/www/html/teams/team106";
        if(file_exists($team6)){
        echo file_get_contents($team6);
        }
?>

