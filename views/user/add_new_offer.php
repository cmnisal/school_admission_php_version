<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>
        Add new offers
    </title>
    <?php
    include ('header.php');
    ?>
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
            <form style="width: 600px;" action="../../includes/add_offer.php" method="post">
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
                echo " </div>";
                ?>
                <div class="form-group">
                    <label for="title" class="left">Offer Title:</label>
                    <input id='title' type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label for="description" class="left">Description:</label>
                    <input id='description' type="text" class="form-control" name="description" required ">
                </div>

                <button class="btn btn-default" type="submit">Submit</button>


                <!--<div class="form-group">
                    <label for="store_name" class="left">Store Name:</label>
                    <input id='store_name' type="text" class="form-control" name="store_name">
                </div>
                <div class="form-group">
                    <label for="type"> Type </label>
                    <div class="dropdown" >
                        <select id="type" name="type"  data-component="dropdown">
                            <option value="Service%20Center"> Service Center </option>
                            <option value="Spare%20Part%20Store">Spare Part Store</option>
                            <option value="Tyre%20Service%20Center">Tyre Service Center</option>
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
        </div>-->
        </form>
    </div>
</div>
</div>
</body>
</html>

