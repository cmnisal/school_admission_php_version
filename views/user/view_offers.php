<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>
        View Offers
    </title>
    <?php
    include('header.php');
    ?>
</head>
<body>
<?php
include('sidebar_user.php');
?>

<div class="content-wrapper" style="padding-top: 60px;">
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="page-header">
                <h1>View Offers</h1>
            </div>
<form style="width: 600px;" action="view_offers.php" method="post">
    <?php
    $result = mysqli_query($db,"SELECT name FROM stores where user='".$_SESSION['username']."'");
    echo "<div class=\"form-group\">";
    echo "<label for=\"store\"> Select Store </label>";
    echo "<div class=\"dropdown\" >";
    echo "<select id=\"store\" name=\"store\"  data-component=\"dropdown\">";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
    }
    echo "</select>";
    echo "  ";
    echo "<button class=\"btn btn-default\" type=\"submit\">Submit</button>";
    echo " </div>";
    ?>

</form>
            <div id="table">
                <?php
                if(isset($_POST['store'])){
                    echo '<h3> Offers from '.$_POST['store'].'</h3>';
                    $query="SELECT `offer_id`,`title`,`details` FROM `offers` WHERE `store_id`=
(SELECT stores.id from stores where stores.name=\"".$_POST['store']."\" and stores.user=\"".$_SESSION['username']."\")";
                    $result = mysqli_query($db,$query);
                    if(mysqli_num_rows($result)==0){
                        echo '<h4>No offers found! </h4>';
                    }else{
                        echo "<table class='table'>
                    <tr>
                    <thead class=\"thead-dark\">
                    <th>Offer Id</th>
                    <th>Offer Title</th>
                    <th>Description</th>
                    <th></th>
                    </thead>
                    </tr>";

                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>" . $row['offer_id'] . "</td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['details'] . "</td>";
                            //echo "<td>" ."<button class=\"btn btn-default\" style='background-color: green;' onclick='approve(".$row['id'].")'>Approve</button>". "</td>";
                            echo "<td>" ."<button class=\"btn btn-default\" style='background-color: red;' onclick='rej(".$row['offer_id'].")'>Delete</button>". "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
            mysqli_close($db);

                }else{
                    echo 'Select a store first';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">


    function rej(id) {
        var url = '../../includes/delete_offer.php?&id=' + id;
        downloadUrl(url, function (data, responseCode) {

            if (responseCode == 200 && data.length <= 1) {
            }
        });
        alert("Delete Success!!");
        window.location = 'approve_store.php';
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

</body>
</html>
