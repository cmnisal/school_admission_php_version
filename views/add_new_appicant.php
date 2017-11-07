<?php session_start();
//session_regenerate_id();
if(!isset($_SESSION['login_user']))      // if there is no valid session
{
header("Location: ../index.php");
}
?>
<html>
<head>
    <title><?php
        session_start();
        echo $_SESSION['login_user'];
        ?>
    </title>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <link rel = "stylesheet"
          type = "text/css"
    <!--          href = "../stylesheets/myStyle.css" />-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../public/stylesheets/sb-admin.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="">
    <a class="navbar-brand" href="index.html">School Admissions</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Home</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="add_new_appicant.php">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Add new Applicant</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="tables.html">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Tables</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Components</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="navbar.html">Navbar</a>
                    </li>
                    <li>
                        <a href="cards.html">Cards</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Example Pages</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                    <li>
                        <a href="register.html">Registration Page</a>
                    </li>
                    <li>
                        <a href="forgot-password.html">Forgot Password Page</a>
                    </li>
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Menu Levels</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                        <ul class="sidenav-third-level collapse" id="collapseMulti2">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Link</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
                    <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">New Messages:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>David Miller</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>Jane Smith</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>John Doe</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for...">
                        <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../includes/logout.php">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="content-wrapper" style="padding-top: 60px;">
    <div class="container-fluid">
        <div class="container" style="width: 400px; ">
            <div class="page-header">
                <h1>Add Details of the Applicant</h1>
            </div>
            <form action="add_new_applicant_2.php" method="post">
                <div class="form-group">
                    <label for="first_name" class="left">First Name:</label>
                    <input type="text" class="form-control" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name">
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" name="dob">
                </div>
                <div class="form-group">
                    <label for="nationality"> Nationality </label>
                    <div class="dropdown" id="nationality">
                        <select id="input_3" name="nationality"  data-component="dropdown">
                            <option value="">Select Nationality  </option>
                            <option value="Afghan"> Afghan </option>
                            <option value="Albanian"> Albanian </option>
                            <option value="Algerian"> Algerian </option>
                            <option value="American"> American </option>
                            <option value="Andorran"> Andorran </option>
                            <option value="Angolan"> Angolan </option>
                            <option value="Antiguans"> Antiguans </option>
                            <option value="Argentinean"> Argentinean </option>
                            <option value="Armenian"> Armenian </option>
                            <option value="Australian"> Australian </option>
                            <option value="Austrian"> Austrian </option>
                            <option value="Azerbaijani"> Azerbaijani </option>
                            <option value="Bahamian"> Bahamian </option>
                            <option value="Bahraini"> Bahraini </option>
                            <option value="Bangladeshi"> Bangladeshi </option>
                            <option value="Barbadian"> Barbadian </option>
                            <option value="Barbudans"> Barbudans </option>
                            <option value="Batswana"> Batswana </option>
                            <option value="Belarusian"> Belarusian </option>
                            <option value="Belgian"> Belgian </option>
                            <option value="Belizean"> Belizean </option>
                            <option value="Beninese"> Beninese </option>
                            <option value="Bhutanese"> Bhutanese </option>
                            <option value="Bolivian"> Bolivian </option>
                            <option value="Bosnian"> Bosnian </option>
                            <option value="Brazilian"> Brazilian </option>
                            <option value="British"> British </option>
                            <option value="Bruneian"> Bruneian </option>
                            <option value="Bulgarian"> Bulgarian </option>
                            <option value="Burkinabe"> Burkinabe </option>
                            <option value="Burmese"> Burmese </option>
                            <option value="Burundian"> Burundian </option>
                            <option value="Cambodian"> Cambodian </option>
                            <option value="Cameroonian"> Cameroonian </option>
                            <option value="Canadian"> Canadian </option>
                            <option value="Cape Verdean"> Cape Verdean </option>
                            <option value="Central African"> Central African </option>
                            <option value="Chadian"> Chadian </option>
                            <option value="Chilean"> Chilean </option>
                            <option value="Chinese"> Chinese </option>
                            <option value="Colombian"> Colombian </option>
                            <option value="Comoran"> Comoran </option>
                            <option value="Congolese"> Congolese </option>
                            <option value="Congolese"> Congolese </option>
                            <option value="Costa Rican"> Costa Rican </option>
                            <option value="Croatian"> Croatian </option>
                            <option value="Cuban"> Cuban </option>
                            <option value="Cypriot"> Cypriot </option>
                            <option value="Czech"> Czech </option>
                            <option value="Danish"> Danish </option>
                            <option value="Djibouti"> Djibouti </option>
                            <option value="Dominican"> Dominican </option>
                            <option value="Dominican"> Dominican </option>
                            <option value="Dutch"> Dutch </option>
                            <option value="Dutchman"> Dutchman </option>
                            <option value="Dutchwoman"> Dutchwoman </option>
                            <option value="East Timorese"> East Timorese </option>
                            <option value="Ecuadorean"> Ecuadorean </option>
                            <option value="Egyptian"> Egyptian </option>
                            <option value="Emirian"> Emirian </option>
                            <option value="Equatorial Guinean"> Equatorial Guinean </option>
                            <option value="Eritrean"> Eritrean </option>
                            <option value="Estonian"> Estonian </option>
                            <option value="Ethiopian"> Ethiopian </option>
                            <option value="Fijian"> Fijian </option>
                            <option value="Filipino"> Filipino </option>
                            <option value="Finnish"> Finnish </option>
                            <option value="French"> French </option>
                            <option value="Gabonese"> Gabonese </option>
                            <option value="Gambian"> Gambian </option>
                            <option value="Georgian"> Georgian </option>
                            <option value="German"> German </option>
                            <option value="Ghanaian"> Ghanaian </option>
                            <option value="Greek"> Greek </option>
                            <option value="Grenadian"> Grenadian </option>
                            <option value="Guatemalan"> Guatemalan </option>
                            <option value="Guinea-Bissauan"> Guinea-Bissauan </option>
                            <option value="Guinean"> Guinean </option>
                            <option value="Guyanese"> Guyanese </option>
                            <option value="Haitian"> Haitian </option>
                            <option value="Herzegovinian"> Herzegovinian </option>
                            <option value="Honduran"> Honduran </option>
                            <option value="Hungarian"> Hungarian </option>
                            <option value="I-Kiribati"> I-Kiribati </option>
                            <option value="Icelander"> Icelander </option>
                            <option value="Indian"> Indian </option>
                            <option value="Indonesian"> Indonesian </option>
                            <option value="Iranian"> Iranian </option>
                            <option value="Iraqi"> Iraqi </option>
                            <option value="Irish"> Irish </option>
                            <option value="Irish"> Irish </option>
                            <option value="Israeli"> Israeli </option>
                            <option value="Italian"> Italian </option>
                            <option value="Ivorian"> Ivorian </option>
                            <option value="Jamaican"> Jamaican </option>
                            <option value="Japanese"> Japanese </option>
                            <option value="Jordanian"> Jordanian </option>
                            <option value="Kazakhstani"> Kazakhstani </option>
                            <option value="Kenyan"> Kenyan </option>
                            <option value="Kittian and Nevisian"> Kittian and Nevisian </option>
                            <option value="Kuwaiti"> Kuwaiti </option>
                            <option value="Kyrgyz"> Kyrgyz </option>
                            <option value="Laotian"> Laotian </option>
                            <option value="Latvian"> Latvian </option>
                            <option value="Lebanese"> Lebanese </option>
                            <option value="Liberian"> Liberian </option>
                            <option value="Libyan"> Libyan </option>
                            <option value="Liechtensteiner"> Liechtensteiner </option>
                            <option value="Lithuanian"> Lithuanian </option>
                            <option value="Luxembourger"> Luxembourger </option>
                            <option value="Macedonian"> Macedonian </option>
                            <option value="Malagasy"> Malagasy </option>
                            <option value="Malawian"> Malawian </option>
                            <option value="Malaysian"> Malaysian </option>
                            <option value="Maldivan"> Maldivan </option>
                            <option value="Malian"> Malian </option>
                            <option value="Maltese"> Maltese </option>
                            <option value="Marshallese"> Marshallese </option>
                            <option value="Mauritanian"> Mauritanian </option>
                            <option value="Mauritian"> Mauritian </option>
                            <option value="Mexican"> Mexican </option>
                            <option value="Micronesian"> Micronesian </option>
                            <option value="Moldovan"> Moldovan </option>
                            <option value="Monacan"> Monacan </option>
                            <option value="Mongolian"> Mongolian </option>
                            <option value="Moroccan"> Moroccan </option>
                            <option value="Mosotho"> Mosotho </option>
                            <option value="Motswana"> Motswana </option>
                            <option value="Mozambican"> Mozambican </option>
                            <option value="Namibian"> Namibian </option>
                            <option value="Nauruan"> Nauruan </option>
                            <option value="Nepalese"> Nepalese </option>
                            <option value="Netherlander"> Netherlander </option>
                            <option value="New Zealander"> New Zealander </option>
                            <option value="Ni-Vanuatu"> Ni-Vanuatu </option>
                            <option value="Nicaraguan"> Nicaraguan </option>
                            <option value="Nigerian"> Nigerian </option>
                            <option value="Nigerien"> Nigerien </option>
                            <option value="North Korean"> North Korean </option>
                            <option value="Northern Irish"> Northern Irish </option>
                            <option value="Norwegian"> Norwegian </option>
                            <option value="Omani"> Omani </option>
                            <option value="Pakistani"> Pakistani </option>
                            <option value="Palauan"> Palauan </option>
                            <option value="Panamanian"> Panamanian </option>
                            <option value="Papua New Guinean"> Papua New Guinean </option>
                            <option value="Paraguayan"> Paraguayan </option>
                            <option value="Peruvian"> Peruvian </option>
                            <option value="Polish"> Polish </option>
                            <option value="Portuguese"> Portuguese </option>
                            <option value="Qatari"> Qatari </option>
                            <option value="Romanian"> Romanian </option>
                            <option value="Russian"> Russian </option>
                            <option value="Rwandan"> Rwandan </option>
                            <option value="Saint Lucian"> Saint Lucian </option>
                            <option value="Salvadoran"> Salvadoran </option>
                            <option value="Samoan"> Samoan </option>
                            <option value="San Marinese"> San Marinese </option>
                            <option value="Sao Tomean"> Sao Tomean </option>
                            <option value="Saudi"> Saudi </option>
                            <option value="Scottish"> Scottish </option>
                            <option value="Senegalese"> Senegalese </option>
                            <option value="Serbian"> Serbian </option>
                            <option value="Seychellois"> Seychellois </option>
                            <option value="Sierra Leonean"> Sierra Leonean </option>
                            <option value="Singaporean"> Singaporean </option>
                            <option value="Slovakian"> Slovakian </option>
                            <option value="Slovenian"> Slovenian </option>
                            <option value="Solomon Islander"> Solomon Islander </option>
                            <option value="Somali"> Somali </option>
                            <option value="South African"> South African </option>
                            <option value="South Korean"> South Korean </option>
                            <option value="Spanish"> Spanish </option>
                            <option value="Sri Lankan"> Sri Lankan </option>
                            <option value="Sudanese"> Sudanese </option>
                            <option value="Surinamer"> Surinamer </option>
                            <option value="Swazi"> Swazi </option>
                            <option value="Swedish"> Swedish </option>
                            <option value="Swiss"> Swiss </option>
                            <option value="Syrian"> Syrian </option>
                            <option value="Taiwanese"> Taiwanese </option>
                            <option value="Tajik"> Tajik </option>
                            <option value="Tanzanian"> Tanzanian </option>
                            <option value="Thai"> Thai </option>
                            <option value="Togolese"> Togolese </option>
                            <option value="Tongan"> Tongan </option>
                            <option value="Trinidadian or Tobagonian"> Trinidadian or Tobagonian </option>
                            <option value="Tunisian"> Tunisian </option>
                            <option value="Turkish"> Turkish </option>
                            <option value="Tuvaluan"> Tuvaluan </option>
                            <option value="Ugandan"> Ugandan </option>
                            <option value="Ukrainian"> Ukrainian </option>
                            <option value="Uruguayan"> Uruguayan </option>
                            <option value="Uzbekistani"> Uzbekistani </option>
                            <option value="Venezuelan"> Venezuelan </option>
                            <option value="Vietnamese"> Vietnamese </option>
                            <option value="Welsh"> Welsh </option>
                            <option value="Welsh"> Welsh </option>
                            <option value="Yemenite"> Yemenite </option>
                            <option value="Zambian"> Zambian </option>
                            <option value="Zimbabwean"> Zimbabwean </option>
                        </select>
                    </div>
                </div>

                <div></div>
                <button type="next" class="btn btn-default">Next</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->




</body>
</html>
