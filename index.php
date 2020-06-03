<?php

	$br = "<br />";	

//	echo "<!-- $color $color $color $color -->\n";
//	echo "<!-- $color $color $color $color -->\n";
//	echo "<!-- $color $color $color $color -->\n";

	echo "<div id='serverheader'><h3>server</h3></div>";
	echo "<div id='serverinfo' style=\"display:block\">";
	//echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . $br;
	
	// for apache use:
	echo "POD IP: " . $_SERVER['SERVER_ADDR'] . $br;
        echo "POD DNS: " . gethostbyaddr($_SERVER['SERVER_ADDR']) . $br . $br;
	echo "Client IP: " . $_SERVER['REMOTE_ADDR'] . $br;
        echo "Client DNS: " . gethostbyaddr($_SERVER['REMOTE_ADDR']) . $br;
	echo "Client Port: " . $_SERVER['REMOTE_PORT'] . $br;
	echo "</div>";

	echo "<div id='serverheadersheader'><h3>server headers</h3></div>";
	echo "<div id='serverheadersinfo' style=\"display:block\">";
	$headers = headers_list();
	if (!empty($headers)) foreach ($headers as $header => $value) {
		echo "$value $br";
	} else {
                echo "no server headers $br";
        }
	echo "</div>";

	echo "<div id='clientrequestheader'><h3>client request</h3></div>";
	echo "<div id='clientrequestinfo' style=\"display:block\">";
	echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . $br;
	echo "Requested URI: " . $_SERVER['REQUEST_URI'] . $br;
	echo "</div>";


	echo "<div id='clientheadersheader'><h3>client headers</h3></div>";
	echo "<div id='clientheadersinfo' style=\"display:block\">";
	$headers = getallheaders(); //$_SERVER['PHP_SELF']; 
	if (!empty($headers)) foreach ($headers as $header => $value) {
		echo "$header: $value $br";
	        } else {
                echo "no client headers $br";
        }
	echo "</div>";

?>
