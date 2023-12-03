<php 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de contaminación</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <!-- LeafLet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    
    <!-- Plugin Leaflet: Leaflet.Locate -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
    <!-- Plugin Leaflet: Leaflet.heat -->
    <script src="../clases/leaflet-heat.js"></script>

    <!-- contaminante.js -->
    <script src="../clases/contaminante.js"></script>
    <!-- mapa.CSS y mapa.JS -->
    <link rel="stylesheet" href="../css/mapa.css"/>
    <script src="../clases/mapa.js"></script>
</head>

<!-- Inicio Header -->
<header>
    <?php include("../template/cabecera.php"); ?>
</header>
<!-- Fin Header -->
<!------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------>
<!-- Inicio Body -->
<body>
    <div class="container-fluid">
        <div class="row align-items-center">

            <div class="col-sm ">
                <!-- Inicio Card -->
                <div class="card shadow border-light">
                    <!-- Inicio Card-Header -->
                    <div class="card-header text-md-center text-dark border-0 fs-3">
                        Mapa de Contaminación
                    </div>
                    <!-- Fin Card-Header -->

                    <!------------------------------------------------------------------------------------------------------------------->
                    <!------------------------------------------------------------------------------------------------------------------->
                    <!-- Inicio Card-Body -->
                    <div class="card-body ">
                        <div id="map"></div>

                        <button type="button" onclick="crearMarker()">Añadir Marcador</button>
                        <button type="button" onclick="crearCirculo()">Añadir Area Circular</button>
                        <button type="button" onclick="crearPoligono()">Añadir Polígono</button>
                        <button type="button" onclick="centrarEn()">CentrarEn</button>
                    </div>
                    <!-- Fin Card-Body -->
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Fin Body -->
<!------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------>
<!-- Inicio Footer -->
<footer>
    <?php include("../template/pie.php"); ?>
</footer>
<!-- Fin Footer -->

<script>
    //Inicializar mapa
    mapa('map');

//#region Ejemplos de funciones
    /* Crear mapa
    const map = L.map('map');
    map.setView([0, 0], 1); //Valores: [centro], zoom;
    L.tileLayer('https://api.maptiler.com/maps/openstreetmap/{z}/{x}/{y}.jpg?key=kIRP9eC6t8HxGCalVgc5', {
        attribution:
            '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
    }).addTo(map);
    */


    /* Añadir un Marcador
    var marker = L.marker([51.5, -0.09]).addTo(map);
    */    
    
    /*Añadir un area circular
    var circle = L.circle([51.508, -0.11], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(map);
    */

    /*Añadir un area poligonal
    var polygon = L.polygon([
        [51.509, -0.08],
        [51.503, -0.06],
        [51.51, -0.047]
    ]).addTo(map);
    */

    /*Añadir PopUps al marcador, circulo y polígono
    marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
    circle.bindPopup("I am a circle.");
    polygon.bindPopup("I am a polygon.");
    */

    /*function mapa(nombre){
    
    map = L.map(nombre);
    map.setView([0, 0], 1); //Valores: [centro], zoom;
    L.tileLayer('https://api.maptiler.com/maps/openstreetmap/{z}/{x}/{y}.jpg?key=kIRP9eC6t8HxGCalVgc5', {
        attribution:
            '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
    }).addTo(map);
}*/
    //#endregion
</script>

</html>