<meta http-equiv="refresh" content="5">
<title>CDO Mini Hack</title>
<b>Simple Services Engine -Andrew :)</b>
<h1>Ping = 5 points</h1>
<h1>Web = 5 points</h1>
<h1>Web Content = 10 Points</h1>
<h1>ROUTER:</h1>
/*<img src="image.jpeg" alt="Big tyler chungus" height="42" width="42">
*/
<?php
	$team1="/var/www/html/teams/LAN/services/1";
	if(file_exists($team1)){
	echo file_get_contents($team1);
	}
?>

<h1>LAN 17:</h1>
<?php
        $team2="/var/www/html/teams/LAN/services/17";
        if(file_exists($team2)){
        echo file_get_contents($team2);
        }
?>
<h1>LAN 25:</h1>
<?php
	$team3="var/www/html/teams/LAN/services/25";
	if(file_exists($team3)){
	echo file_get_contents($team3);
	}
?>
<h1>LAN 27:</h1>
<?php
        $team4="/var/www/html/teams/LAN/services/27";
        if(file_exists($team4)){
        echo file_get_contents($team4);
        }
?>
<h1>LAN 30:</h1>
<?php
	$team5="/var/www/html/teams/LAN/services/30";
	if(file_exists($team5)){
	echo file_get_contents($team5);
	}
?>
<h1>DMZ 5:</h1>
<?php
	$team6="/var/www/html/teams/DMZ/services/5";
	if(file_exists($team6)){
	echo file_get_contents($team6);
}
?>
<h1>DMZ 6:</h1>
<?php
        $team7="/var/www/html/teams/DMZ/services/6";
        if(file_exists($team7)){
        echo file_get_contents($team7);
        }
?>
<h1>DMZ 10:</h1>
<?php
        $team8="/var/www/html/teams/DMZ/services/10";
        if(file_exists($team8)){
        echo file_get_contents($team8);
        }
?>
<h1>DMZ 13:</h1>
<?php
        $team9="/var/www/html/teams/DMZ/services/13";
        if(file_exists($team9)){
        echo file_get_contents($team9);
        }
?>
