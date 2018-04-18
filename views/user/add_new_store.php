
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
            <form style="width: 600px;">
                <div class="form-group">
                    <label for="store_name" class="left">Store Name:</label>
                    <input id='store_name' type="text" class="form-control" name="store_name">
                </div>
                <div class="form-group">
                    <label for="type"> Type </label>
                    <div class="dropdown" >
                        <select id="type" name="type"  data-component="dropdown">
                            <option value="Service center"> Service Centre </option>
                            <option value="Spare Part Store">Spare Part Store</option>
                            <option value="Tyre Service_Center">Tyre Service Center</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address_line_1">Address Line 1:</label>
                    <input id='address_line_1' type="text" class="form-control" name="address_line_1">
                </div>
                <div class="form-group">
                    <label for="address_line_2">Address Line 2:</label>
                    <input id='address_line_2' type="text" class="form-control" name="address_line_2">
                </div>
                <div class="form-group">
                    <label for="address_line_3">Address Line 3:</label>
                    <input id='address_line_3' type="text" class="form-control" name="address_line_3">
                </div>
                <div class="form-group">
                    <label for="telephone_no">Telephone NO:</label>
                    <input id='telephone_no' type="number" class="form-control" name="telephone_no" maxlength="10">
                </div>
                <div class="form-group">
                    <label for="map">Select Location on map:</label>
                    <div id="map" height="460px" width="500px"></div>
                </div>
                <button class="btn btn-default" onclick='saveData()'>Submit</button>
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
        var store_name = escape(document.getElementById('store_name').value);
        var address_line1 = escape(document.getElementById('address_line_1').value);
        var address_line2 = escape(document.getElementById('address_line_2').value);
        var address_line3 = escape(document.getElementById('address_line_3').value);
        var type = document.getElementById('type').value;
        var telephone_no = escape(document.getElementById('telephone_no').value);

        if(store_name==""){
            alert('Enter a Storename');
        }else if(address_line1=="" && address_line2=="" && address_line3==""){
            alert('Enter a address correctly');
        }else if(marker==null){
            alert("select a location");
        }else{
            var latlng = marker.getPosition();
            var url = '../../includes/add_store.php?store_name=' + store_name + '&address_line_1=' + address_line1 + '&address_line_2=' + address_line2 +
                '&address_line_3=' + address_line3 +'&type=' + type+'&telephone_no=' + telephone_no + '&lat=' + latlng.lat() + '&lng=' + latlng.lng();
            downloadUrl(url, function(data, responseCode) {

                if (responseCode == 200 && data.length <= 1) {
                    infowindow.close();
                    messagewindow.open(map, marker);
                }
            });
        }


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
