<?php
	
	// procedural
	require_once "connection.php";

	$sql = "select firstname, lastname from employees";

    $result = mysqli_query($conn,$sql);
    // print_r($result);

    echo '<br>';

    if(mysqli_num_rows($result) > 0) {
    	// $r[] = mysqli_fetch_assoc($result);
    	// print_r($r);

    	while ($row = mysqli_fetch_assoc($result)) {
    		echo $row['firstname'] . ' ' . $row['lastname'] . '<br>';
    	}

    } else {
    	echo "0 results";
    }


    $sql = "select * from employees";

    $result = mysqli_query($conn,$sql);
    // print_r($result);

    echo '<br>';

    if(mysqli_num_rows($result) > 0) {
    	// $r[] = mysqli_fetch_assoc($result);
    	// print_r($r);

    	echo '<ul>';
    	while ($row = mysqli_fetch_assoc($result)) {
    		extract($row);
    		echo '<li>';
    		echo $firstName . ' ' . $lastName . '<br>';
    		echo '</li>';
    	}
    	echo '</ul>';
    	
    } else {
    	echo "0 results";
    }


?>