<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="Fv.png" type="image/jpg">
    <link rel="stylesheet" href="Fizivision.css">
    <style>
        p{
            font-size:20px;
            text-align:center;
            display:block;
            width:98%;
        }
    li a{
        color:white;
        display:inline-block;
        width:8%;
        
    }
    li {
        display:inline;
    }
    input{
        display:block;
        margin:0 auto;
    }
    label{
        color:pink;
        font-size:20px;
    }
    button{
        height:60px;
        float:right;
    }
    </style>
    </head>
<body style="background-color:#29104a">
<li><a href="Fizivision.html">Acasă</a></li>
            <li><a href="Meca.html">Mecanică</a></li>
            <li><a href="Termodina.html">Termodinamică</a></li>
            <li><a href="Opti.html">Optică</a></li>
            <li><a href="Electri.html">Electricitate</a></li>
            <li><a href="LaboDigi.html">Laborator Digital</a></li>
            <li><a href="Contabili.html">Contact</a></li>
<div style="color:pink;text-align:center;font-size:20px;margin-top:100px;">
<?php
$n=$_POST['aspect'];
$m=$_POST['calitate'];
$p=$_POST['experimente'];
$q=$_POST['varietate'];
$maxim=-1;
$minim=11;
$numbers = [$n , $m, $p , $q];
foreach($numbers as $number)
{
    if($number>$maxim)
    $maxim=$number;
    if($number<$minim)
    $minim=$number;
}
$suma=$n+$m+$p+$q;
$media = $suma/4;
echo "Nota totala pentru site este" . " ".  $media . ".";
if($media<5)
echo " Ne pare rău pentru experiența dumneavoastră! Vom încerca să îmbunătățim serviciile!";
elseif ($media<8)
echo " Echipa fizivision își dă toată silința să vă aducă cele mai interesante actualizări în viitorul apropiat!";
else
echo " Mulțumim pentru note! Ne bucurăm că va plăcut!";
?>
<br>
<p>Nota maximă a fost <?php echo $maxim?>.</p>
<p>Nota minimă a fost <?php echo $minim?>.</p>
<progress min="0" max="40" value="<?php echo $suma?>"></progress>
</div>
</body>
</html>