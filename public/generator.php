
<?php
$code = '<center><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$_REQUEST['name'].$_REQUEST['address'].$_REQUEST['phone'].$_REQUEST['age'].$_REQUEST['gender'].'" title="Link to Google.com"></center>';


echo $code;


?>