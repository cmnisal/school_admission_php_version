<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>
        Add new admin
    </title>
    <?php
    include('header.php');
    ?>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 40%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<?php
include('sidebar_admin.php');
echo 'test';
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="jumbotron">
            <?php
            $result = mysqli_query($db,"SELECT id,user as Owner,name,add_1,add_2,add_3,type,lat,lng,telephone FROM stores where approved='0' and rejected='0'");
            echo "<table class='table'>
            <tr>
            <thead class=\"thead-dark\">
            <th>Owner</th>
            <th>Store name</th>
            <th>Address</th>
            <th>Telephone</th>
            <th>Type</th>
            <th>Location</th>
            <th>Approve</th>
            <th>Reject</th>
            </thead>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" . $row['Owner'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>".$row['add_1'].",".$row['add_2'].",".$row['add_3']."</td>";
                echo "<td>" . $row['telephone'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" ."<a href='#map'><button class=\"btn btn-default\" onclick='initMap(".$row['lat'].",".$row['lng'].")'>Show Location</button>". "</td></a>";
                echo "<td>" ."<button class=\"btn btn-default\" style='background-color: green;' onclick='approve(".$row['id'].")'>Approve</button>". "</td>";
                echo "<td>" ."<button class=\"btn btn-default\" style='background-color: red;' onclick='reject(".$row['id'].")'>Reject</button>". "</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($db);
            ?>
        </div>
    </div>
</div>

<div id="map"
</div>
<script type="text/javascript">
    var map;
    var lat,lng;
    function initMap(lat,lng) {
        var latitude = lat; // YOUR LATITUDE VALUE
        var longitude = lng; // YOUR LONGITUDE VALUE

        var myLatLng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};

        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 14
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            //title: 'Hello World'

            // setting latitude & longitude as title of the marker
            // title is shown when you hover over the marker
            title: latitude + ', ' + longitude
        });
    }
    function approve(id) {

            var url = '../../includes/approve_store.php?&id='+id;
            downloadUrl(url, function(data, responseCode) {

                if (responseCode == 200 && data.length <= 1) {
                }
            });
        alert("Approval Success!!");
        window.location='approve_store.php';
    }
    function reject(id) {

        var url = '../../includes/reject_store.php?&id='+id;
        downloadUrl(url, function(data, responseCode) {

            if (responseCode == 200 && data.length <= 1) {
            }
        });
        alert("Reject Success!!");
        window.location='approve_store.php';
    }

    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                request.onreadystatechange = doNothing;
                callback(request.responseText, request.status);
            }
        };



        request.open('GET', url, true);
        request.send(null);
    }
    function doNothing () {
    }


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDI067FsBeNZE6clYYiG7jJMa0b25CDkjI&callback=initMap"
        async defer></script>





</body>
</html>
