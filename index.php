<?php require './connect.php'; ?> 
<?php require './header.php'; ?> 

<!--end of nav bar-->

<!--Goog Map-->
<h1>Map - Joes stuff will go here:</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<!--Script for the google map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt0A7sfi1JTRnBqJReQT8mOwXrTeoLkGg&callback=myMap"></script>

<?php
require './footer.php'; ?> 
