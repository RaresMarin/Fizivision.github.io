<html>
    <head>
    <link rel="icon" href="Fv.png" type="image/jpg">
    <link rel="stylesheet" href="Fizivision.css">
    <style>

    li a{
        color:white;
        display:inline-block;
        width:10%;
        
    }
    li {
        display:inline;
    }
    </style>
    </head>
    <body>
    <nav>
<li><a href="Fizivision.html">Acasă</a></li>
            <li><a href="Meca.html">Mecanică</a></li>
            <li><a href="Termodina.html">Termodinamică</a></li>
            <li><a href="Opti.html">Optică</a></li>
            <li><a href="Electri.html">Electricitate</a></li>
            <li><a href="LaboDigi.html">Laborator Digital</a></li>
            <li><a href="Contabili.html">Contact</a></li>
</nav>
<div style="color:pink;text-align:center;font-size:20px;margin-top:100px;">
<?php
$n=$_POST['aspect'];
$m=$_POST['calitate'];
$p=$_POST['experimente'];
$q=$_POST['varietate'];
$media = ($n+$m+$p+$q)/4;
echo "Nota totala pentru site este" . " ".  $media . ".";
if($media<5)
echo " Ne pare rău pentru experiența dumneavoastră! Vom încerca să îmbunătățim serviciile!";
elseif ($media<8)
echo " Echipa fizivision își dă toată silința să vă aducă cele mai interesante actualizări în viitorul apropiat!";
else
echo " Mulțumim pentru note! Ne bucurăm că va plăcut!"
?>
</div>
</body>
</html>