<?php

$link = mysql_connect ("localhost", "root","") or die ("Could not connect");
mysql_select_db("cidt", $link) or die("Could not select Database");

	$res = mysql_query("select * from tblyouth limit 5");

		while($result= mysql_fetch_array($res)) {
			echo $result['fname'] . "<br>";
		}

		echo "<input type='text' >";


?>
