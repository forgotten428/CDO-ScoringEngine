<meta http-equiv="refresh" content="5">
<title>CDO Mini Hack</title>
<b>Simple Services Engine -Andrew :)</b>
<p>Please dont be alarmed when Apache disappears, the script rewrites the file each time...</p>
<p>This just means, if Apache is UP you will continue to score even if it isnt shown here...</p>
<p>Team1:</p>
<?php
	$team1="/var/www/html/teams/teamservice101";
	if(file_exists($team1)){
	echo file_get_contents($team1);	
}
?>
<p>Team2:</p>
<?php
        $team2="/var/www/html/teams/teamservice102";
        if(file_exists($team2)){
        echo file_get_contents($team2);
}
?>
<p>Team3:</p>
<?php
        $team3="/var/www/html/teams/teamservice103";
        if(file_exists($team3)){
        echo file_get_contents($team3);
}
?>
<p>Team4:</p>
<?php
        $team4="/var/www/html/teams/teamservice104";
        if(file_exists($team4)){
        echo file_get_contents($team4);
        }
?>
<p>Team5:</p>
<?php
        $team5="/var/www/html/teams/teamservice105";
        if(file_exists($team5)){
        echo file_get_contents($team5);
        }
?>
<p>Team6:</p>
<?php
        $team6="/var/www/html/teams/teamservice106";
        if(file_exists($team6)){
        echo file_get_contents($team6);
        }
?>

