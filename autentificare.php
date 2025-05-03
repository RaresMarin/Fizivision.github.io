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
        float:right
    }
    </style>
    </head>
<body style="background-color:#29104a">
    <nav>
<li><a href="Fizivision.html">Acasă</a></li>
            <li><a href="Meca.html">Mecanică</a></li>
            <li><a href="Termodina.html">Termodinamică</a></li>
            <li><a href="Opti.html">Optică</a></li>
            <li><a href="Electri.html">Electricitate</a></li>
            <li><a href="LaboDigi.html">Laborator Digital</a></li>
            <li><a href="Contabili.html">Contact</a></li>
</nav>
<div style="color:white;text-align:center;font-size:20px;margin-top:100px;color:pink;">
Bine ai revenit pe Fizivision,
Adresa ta de email este <?php echo $_POST["Email"]; ?><br>
Parola ta este <?php echo $_POST["Parolă"]; ?>
</div>
<h2>Rewiev</h2>
<form action="note.php" method="post">
<label>Aspectul site-ului</label>
<input type="number" name="aspect" placeholder="0" min="0" max="10" id="aspect"></input>
<br>
<label>Calitatea informațiilor</label>
<input type="number" name="calitate" placeholder="0" min="0" max="10" id="calitate"></input>
<br>
<label>Experimentelor</label>
<input type="number" name="experimente" placeholder="0" min="0" max="10" id="experimente"></input>
<br>
<label>Varietatea Quizurilor</label>
<input type="number" name="varietate" placeholder="0" min="0" max="10" id="varietate"></input>
<button style="border-radius:20px;background-color:blueviolet;color:pink">Trimite note</button>
</form>
</body>
</html>
