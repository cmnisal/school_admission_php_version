
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>
        Add new store
    </title>
    <?php
    include ('header.php');
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
include ('sidebar_user.php');
?>

<div class="content-wrapper" style="padding-top: 60px;">
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="page-header">
                <h1>Add Details of the Store</h1>
            </div>
            <form action="../../includes/appicant_details_handler.php" method="post" style="width: 600px;">
                <div class="form-group">
                    <label for="store_name" class="left">Store Name:</label>
                    <input type="text" class="form-control" name="store_name">
                </div>
                <div class="form-group">
                    <label for="type"> Type </label>
                    <div class="dropdown" id="gender">
                        <select id="gender" name="gender"  data-component="dropdown">
                            <option value="service_center"> Service Centre </option>
                            <option value="store">Spare Part Store</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address_line_1">Addre Line 1:</label>
                    <input type="text" class="form-control" name="address_line_1">
                </div>
                <div class="form-group">
                    <label for="address_line_2">Address Line 2:</label>
                    <input type="text" class="form-control" name="address_line_2">
                </div>
                <div class="form-group">
                    <label for="address_line_3">Address Line 3:</label>
                    <input type="text" class="form-control" name="address_line_3">
                </div>
                <div class="form-group">
                    <label for="map">Select Location on map:</label>
                    <div id="map" height="460px" width="500px"></div>
                </div>
                <button type="Submit" class="btn btn-default">Submit</button>
        </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper--><script>
    var map;
    var marker;
    var infowindow;
    var messagewindow;

    function initMap() {
        var colombo = {lat: 6.9220039, lng: 79.8861639};
        map = new google.maps.Map(document.getElementById('map'), {
            center: colombo,
            zoom: 10
        });

        infowindow = new google.maps.InfoWindow({
            content: document.getElementById('form')
        });

        messagewindow = new google.maps.InfoWindow({
            content: document.getElementById('message')
        });

        google.maps.event.addListener(map, 'click', function(event) {
            placeMarker(event.latLng);



            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
        });
    }
    function placeMarker(location) {
        if ( marker ) {
            marker.setPosition(location);
        } else {
            marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    }

    function saveData() {
        var name = escape(document.getElementById('name').value);
        var address = escape(document.getElementById('address').value);
        var type = document.getElementById('type').value;
        var latlng = marker.getPosition();
        var url = 'phpsqlinfo_addrow.php?name=' + name + '&address=' + address +
            '&type=' + type + '&lat=' + latlng.lat() + '&lng=' + latlng.lng();

        downloadUrl(url, function(data, responseCode) {

            if (responseCode == 200 && data.length <= 1) {
                infowindow.close();
                messagewindow.open(map, marker);
            }
        });
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
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDI067FsBeNZE6clYYiG7jJMa0b25CDkjI&callback=initMap">
</script>




</body>
</html>
