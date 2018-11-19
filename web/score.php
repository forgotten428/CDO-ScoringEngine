<meta http-equiv="refresh" content="5">
<title>CDO Mini Hack</title>
<b>Simple Scoring Engine -Andrew :)</b>
<p>Ping = 5 points</p>
<p>Web = 5 points</p>
<p>Web Content = 10 Points</p>
<p>Team1:</p>
<?php
	$team1="/var/www/html/teams/team101";
	if(file_exists($team1)){
	echo file_get_contents($team1);
}
?>
<p>Team2:</p>
<?php
        $team2="/var/www/html/teams/team102";
        if(file_exists($team2)){
        echo file_get_contents($team2);
        }
?>
<p>Team3:</p>
<?php
        $team3="/var/www/html/teams/team103";
        if(file_exists($team3)){
        echo file_get_contents($team3);
        }
?>
<p>Team4:</p>
<?php
        $team4="/var/www/html/teams/team104";
        if(file_exists($team4)){
        echo file_get_contents($team4);
        }
?>
<p>Team5:</p>
<?php
        $team5="/var/www/html/teams/team105";
        if(file_exists($team5)){
        echo file_get_contents($team5);
        }
?>
<p>Team6:</p>
<?php
        $team6="/var/www/html/teams/team106";
        if(file_exists($team6)){
        echo file_get_contents($team6);
        }
?>

