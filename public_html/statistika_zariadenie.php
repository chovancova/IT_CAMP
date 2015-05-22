<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<div id="content">
        
    <div id="content_stat_zar">
        
        <h1>Statistika zariadenia</h1>
        
        <h3>Vyber Zaradenie:</h3>
         Zariadenie <select>
                <option value="id1">3 - peter - android</option>
                <option value="id2">8 - jano - android</option>
                <option value="id3">10 - oli - windows</option>
            </select>
         
          <h2>Dátum:</h2> 
        <br>
        od:<input type="date" id="od">
         do:<input type="date" id="do">
             <button type="button">Vytvor Statistiku</button>
             
             
             <table style="width:100%">
    <tr>
        <td>Cas</td>
        <td>Suradnica: X</td>
            <td>Suradnica: Y</td>

            <td></td>
          </tr>
          <tr>

            <td>16:00</td>	
        <td>48 48 N</td>
        <td>2 20 E</td>
          </tr>
          <tr>
         <td>16:30</td>	
        <td>48 49 N</td>
        <td>2 25 E</td>
          </tr>
        </table>

                    <button type="button">Zobraz Mapu</button>
        
    </div>
        
        
</div>

<?php include 'footer.php'; ?>