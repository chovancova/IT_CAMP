<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<div id="content">


    <form action="http://192.168.1.153:8080/IT_Camp/DriverWS?addDriver" method="post">
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
            <input type="password" name="heslo" >
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
            Trasa: 
        </p>
<p>
<select>
                <option value="trasa1"> Zilina - Bratislava</option>
                <option value="trasa2">Kosice - Presov</option>
                <option value="trasa3">Trennčín - Púchov - Žilina</option>
            </select>
</p>
        <p>
            <input type="submit" value="Registrovať" >
        </p>
    </form>

      



</div>

<?php include 'footer.php'; ?>