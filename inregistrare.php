<html>
<html>
    <head>
    <link rel="icon" href="Fv.png" type="image/jpg">
        <style>
            nav li a{
    text-decoration: none;
    color:blueviolet;
    font-size:20px;
    text-align: center;
    display:inline;

}

nav li{
    height:70px;
    width:10px;
    text-align: center;
    display:inline;

}

nav li a:hover{
    color:#90bd2a;
    display:inline;
    background-color: #29104a;
}

a{
    text-decoration: none;
    color:white;
}

a:hover{
    color:azure;
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
<div style="color:white;text-align:center;font-size:20px;">
Bun venit pe Fizivision, <?php echo $_POST["Nume"]; ?><br>
Adresa ta de email este <?php echo $_POST["Email"]; ?><br>
Parola ta este <?php echo $_POST["Parolă"]; ?>
</div>
</body>
</html>