<script src="raphael.js"></script>
<script src="popup.js"></script>
<script src="jquery.js"></script>
<script src="graf.js"></script>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div id="content">
        
    <div id="content_stat_sofer">
        
        <h1> Drive State Report</h1>
        
        <h3> Meno Sofera:</h3> Ján Mrkva
        
        <h3>Dátum:</h3> 
        od:<input type="date" id="od">
         do:<input type="date" id="do">
         <button type="button">Zobraz State</button>
           <button type="button">Zobraz Score</button>
             <h3>Vyber den:</h3>
         Zariadenie <select>
                <option value="id1">pondelok</option>
                <option value="id2">utorok</option>
                <option value="id3">...</option>
            </select>
           
        <table id="data">
            <tfoot>
                <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>19</th>
                    <th>19</th>
                    <th>20</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
   
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                     <td>0</td>
                    <td>0</td>
                    <td>0</td>
              
             
          
                    <td>0</td>
                    <td>0</td>
                   
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
               
                   <td>2</td>
                    <td>2</td>
                
                    <td>2</td>
                   <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>0</td>
             
                    <td>0</td>
                </tr>
            </tbody>
        </table>
        <div id="holder"></div>
        
        </div>
        
</div>

<?php include 'footer.php'; ?>