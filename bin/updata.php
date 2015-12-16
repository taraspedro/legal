<?php
    $db = mysql_connect("localhost", "root", "");
    mysql_select_db("lenews", $db);

    $nameUk = $_POST['nameUk'];
    $addressUk = $_POST['addressUk'];
    $bankUk = $_POST['bankUk'];
    $phoneUk = $_POST['phoneUk'];
    $emailUk = $_POST['emailUk'];
    if(isset($nameUk)){
        $contUk = mysql_query("UPDATE contacts SET name='$nameUk', address='$addressUk', bank='$bankUk', phone='$phoneUk', email='$emailUk' WHERE id='1' ");
    }

    $nameEng = $_POST['nameEng'];
    $addressEng = $_POST['addressEng'];
    $bankEng = $_POST['bankEng'];
    $phoneEng = $_POST['phoneEng'];
    $emailEng = $_POST['emailEng'];    
    if(isset($nameEng)){
        $contEng = mysql_query("UPDATE contacts SET name='$nameEng', address='$addressEng', bank='$bankEng', phone='$phoneEng', email='$emailEng' WHERE id='2' ");
    }

    $namePl = $_POST['namePl'];
    $addressPl = $_POST['addressPl'];
    $bankPl = $_POST['bankPl'];
    $phonePl = $_POST['phonePl'];
    $emailPl = $_POST['emailPl'];    
    if(isset($namePl)){
        $contPl = mysql_query("UPDATE contacts SET name='$namePl', address='$addressPl', bank='$bankPl', phone='$phonePl', email='$emailPl' WHERE id='3' ");
    }
    
    
    $soleUk = $_POST['soleUk'];
    $regUk = $_POST['regUk'];
    $investUk = $_POST['investUk'];
    $rentUk = $_POST['rentUk'];
    $exchangeUk = $_POST['exchangeUk'];
    $infoUk = $_POST['infoUk'];
    $liquidUk = $_POST['liquidUk'];
    $bankruptcyUk = $_POST['bankruptcyUk'];
    $accountUk = $_POST['accountUk'];
    $trademarkUk = $_POST['trademarkUk'];
    $stockUk = $_POST['stockUk'];

    if(isset($regUk)){
        $query = mysql_query("UPDATE services SET sole='$soleUk', reg='$regUk', invest='$investUk', rent='$rentUk', info='$infoUk', liquid='$liquidUk', bankruptcy='$bankruptcyUk', account='$accountUk', trademark='$trademarkUk', stock='$stockUk', exchange='$exchangeUk' WHERE id='1' ");
    }
        

    $soleEng = $_POST['soleEng'];
    $regEng = $_POST['regEng'];
    $investEng = $_POST['investEng'];
    $rentEng = $_POST['rentEng'];
    $exchangeEng = $_POST['exchangeEng'];
    $infoEng = $_POST['infoEng'];
    $liquidEng = $_POST['liquidEng'];
    $bankruptcyEng = $_POST['bankruptcyEng'];
    $accountEng = $_POST['accountEng'];
    $trademarkEng = $_POST['trademarkEng'];
    $stockEng = $_POST['stockEng'];

    if(isset($regEng)){
        $query = mysql_query("UPDATE services SET sole='$soleEng', reg='$regEng', invest='$investEng', rent='$rentEng', info='$infoEng', liquid='$liquidEng', bankruptcy='$bankruptcyEng', account='$accountEng', trademark='$trademarkEng', stock='$stockEng', exchange='$exchangeEng' WHERE id='2' ");
    }
    
    $solePl = $_POST['solePl'];
    $regPl = $_POST['regPl'];
    $investPl = $_POST['investPl'];
    $rentPl = $_POST['rentPl'];
    $exchangePl = $_POST['exchangePl'];
    $infoPl = $_POST['infoPl'];
    $liquidPl = $_POST['liquidPl'];
    $bankruptcyPl = $_POST['bankruptcyPl'];
    $accountPl = $_POST['accountPl'];
    $trademarkPl = $_POST['trademarkPl'];
    $stockPl = $_POST['stockPl'];

    if(isset($regPl)){
        $query = mysql_query("UPDATE services SET sole='$solePl', reg='$regPl', invest='$investPl', rent='$rentPl', info='$infoPl', liquid='$liquidPl', bankruptcy='$bankruptcyPl', account='$accountPl', trademark='$trademarkPl', stock='$stockPl', exchange='$exchangePl' WHERE id='3' ");
    }

    $titleUk = $_POST['titleUk'];
    $textUk = $_POST['textUk'];
    $dateUk = $_POST['dateUk'];
    if(isset($textUk)){
        $newsquery = mysql_query("INSERT INTO newsUk (titleUk,textUk,dateUk) VALUES ('$titleUk', '$textUk', '$dateUk') ");
    }
    

    $aboutUk = $_POST['aboutUk'];
    if(isset($aboutUk)){
        $aboutquery = mysql_query("UPDATE about SET about='$aboutUk' WHERE id='1' "); 
    }
    
    $aboutEng = $_POST['aboutEng'];
    if(isset($aboutEng)){
        $aboutquery = mysql_query("UPDATE about SET about='$aboutEng' WHERE id='2' "); 
    }

    $aboutPl = $_POST['aboutPl'];
    if(isset($aboutPl)){
        $aboutquery = mysql_query("UPDATE about SET about='$aboutPl' WHERE id='3' "); 
    }
?>