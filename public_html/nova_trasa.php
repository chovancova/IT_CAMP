<script src="raphael.js"></script>
<script src="mapa.js"></script>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<div id="content">
        
    <div id="content_mapa">
        
        <h1>Vytvor trasu</h1>
        <h3>Nazov:</h3>      <input type="text" id="nazov">
        
        <div id="mapa"></div>
        
        <br>
           <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>     <br>   <br>
            <div> <form id="latlon-form">
           <input id="latlon" value="48 48 N 2 20 E">
           <button type="submit">Najdi</button>
        </form></div>
        
           Mesta na vyber: 
         <ol id="cities">
            <li><a href="#22 20 N 114 11 E">Hong Kong</a></li>
            <li><a href="#26° 12' 0&quot; S  28° 5' 0&quot; E">Johannesburg</a></li>
            <li><a href="#55 45 N 37 36 E">Moscow</a></li>
            <li><a href="#40° 45' 21″N 73° 59' 11″W">New York</a></li>
            <li><a href="#48 48 N 2 20 E">Paris</a></li>
            <li><a href="#22 57 S 43 12 W">Rio de Janeiro</a></li>
            <li><a href="#37° N 122° W">San Francisco</a></li>
            <li><a href="#33°51′35.9″S, 151°12′40″E">Sydney</a></li>
            <li><a href="#35 40 N 139 45 E">Tokyo</a></li>
            <li><a href="#48 14 N, 16 20 E">Vienna</a></li>
        </ol>
        
      
           <button type="button">Odoslat</button>
        
    </div>    
        
        
</div>

<?php include 'footer.php'; ?>