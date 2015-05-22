<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<div id="content">


    <form action="tempconvert.asmx/FahrenheitToCelsius" onsubmit="return validateForm3()" method="post">
        <p>
            Prihlasovacie meno: 
        </p>
        <p>
            <input type="text" name="nickname" >
        </p>
        <p>
            Heslo: 
        </p>
        <p>
            <input type="text" name="heslo" >
            </p>
        <p>
            Meno vodiča: 
        </p>
         <p>
             <input type="text" name="meno" >
            </p>
        <p>
            Priezvisko vodiča: 
        </p>
         <p>
             <input type="text" name="priezvisko" >
            </p>
        <p>
            Trasa: <select>
                <option value="trasa1"> Zilina - Bratislava</option>
                <option value="trasa2">Kosice - Presov</option>
                <option value="trasa3">Trennčín - Púchov - Žilina</option>
            </select>
        </p>

        <p>
            <input type="submit" value="Registrovať" >
        </p>
    </form>

    <p>
        <a href="reg.php">Registrácia</a>
    </p>        



</div>

<?php include 'footer.php'; ?>