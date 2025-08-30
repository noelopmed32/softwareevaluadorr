<?PHP
$liga = $_POST['liga'];
$data = array("<a href=".$liga." target='_blank'>Ver archivo</a>");
echo json_encode($data);
?>
