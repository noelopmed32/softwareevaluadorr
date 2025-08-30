<?php
	
    $conn = new mysqli("localhost","root","","notificaciones2");
    $count = 0;
    $sql2 = "SELECT * FROM informarevaluador WHERE estado = 0";
    $result = mysqli_query($conn, $sql2);
    $count = mysqli_num_rows($result);
