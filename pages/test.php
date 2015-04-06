<?php
require_once("../Personal/config.php");
require_once("../Lib/autoload.php");

$session = new session();

if (!accesslimited::isInAutorizedGroups(user::getUserName($session->getUserId()), array("admins", "users"))) {
    die("Accesso non autorizzato");
}



echo '<!DOCTYPE HTML>
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang = "it" lang = "it">
<head>
<title>ASAGesT</title>
<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
<meta name = "generator" content = "NetMDM" />
<link rel = "shortcut icon" type = "image/png" href = "../styles/page/images/cri.png" />
<link rel = "stylesheet" href = "../Lib/css/flick/jquery-ui.css" type = "text/css" media = "all" />
<link rel = "stylesheet" href = "../bootstrapn/css/bootstrap.min.css" type = "text/css" media = "all" />
<link rel = "stylesheet" href = "../styles/page/page.css" type = "text/css" media = "all" />
<link rel = "stylesheet" href = "../styles/orizontalmenu/orizontalmenu.css" type = "text/css" media = "all" />
<link rel = "stylesheet" href = "../Plugin/jquery.alerts-1.1/jquery.alerts.css" type = "text/css" media = "all" />
<link rel = "stylesheet" href = "../styles/block/block.css" type = "text/css" media = "all" />
<link rel = "stylesheet" href = "../styles/test/test.css" type = "text/css" media = "all" />
<link rel = "stylesheet" href = "../styles/block/print.css" type = "text/css" media = "print" />
<script type = "text/javascript" src = "../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="../Lib/Common/js/datepicker/ui.datepicker-it.js"></script>
<script type="text/javascript" src="../bootstrapn/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/fastsearch.js"></script>
<script type="text/javascript" src="../Plugin/jquery.alerts-1.1/jquery.alerts.js"></script>
<script type="text/javascript" src="js/block.js"></script>
</head>
<body>  



    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 redcolor">
                COLONNA 1 JJJJJJJJ JJJJJJJJJ JJJJJJJ HHHH JJJJJJ
            </div>
            <div class="col-xs-6 col-sm-6 greencolor">
                COLONNA 2 HUUUU UUIII II999 UUUUU
            </div>
        </div>
    </div>



</body>
</html>

';

//$allegati=new allegatin(1);

//$allegati->riaggiorna();

$db = new db();

$arr = $db->freeQuery("SELECT family_register_number from family WHERE num_indig=0");

$fid = array();

foreach($arr as $value){
    array_push($fid, $value["family_register_number"]);
}

$arr2=array();
foreach($fid as $value){
    $arr2 = $db->freeQuery("SELECT COUNT(id_person) from person WHERE family_register_number=".$value);

    $db->freeQuery("update family set num_indig = ".$arr2[0]['COUNT(id_person)']." where family_register_number =".$value." limit 1");
}




?>


