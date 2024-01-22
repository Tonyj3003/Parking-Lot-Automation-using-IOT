<?php session_start();
require 'update_slots.php';
if (!$_SESSION['email']) {
  header("location: admin_login.php");
}
else{

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>smart-parking</title>
    <link rel="icon" href="assets/img/ny.jpg" />
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>


    <style>
    a {
    display: block;
    padding: 8px 20px;
}

.left-links li a{
    color:#b3e5fc !important;
    font-weight:bold;
    font-family: tahoma;
    border-bottom:1px solid #b2ebf2;
}

.left-links li a:hover{
    color:#ff5252 !important;
}
    </style>
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <header class="header black-bg">

            <!--logo start-->
            <a href="index.php" class="logo"><b>Smart-parking</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php" style="background-color:#ffd777;">Logout</a></li>
            	</ul>
            </div>
        </header>
     
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="assets/img/assistant-144.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"> <?php echo $_SESSION['email']; ?> </h5>
                     </ul>
                     <div class="list">


                  <ul class="left-links">
                      <li><a  href="blank.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Upload New Parkings</a></li>
                      <li><a  href="attendant.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Add new Parking Attendant</a></li>
                      <li><a  href="basic_table.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Parkings</a></li>
                        <li><a  href="basic_table2.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Attendants</a></li>
                          <li><a  href="admin_request.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Requests</a></li>
                  </ul>
                   </div>

              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">

                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
				<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
				
                      </div>
                      <!--custom chart end-->
					</div><!-- /row -->

                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  <!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-database-compat.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking</title>
</head>

<body>
    <div class="parkingLot">
        <div class="sectionOne">
            <div id="space1" class="space"> </div>
            <div id="space2" class="space"> </div>
            <div id="space3" class="space"> </div>
            <div id="space4" class="space"> </div>
            <div id="space5" class="space"> </div>
        </div>
        <div class="sectionTwo">
            <div class="road"></div>
            <div class="controlArea">
                <div class="roadBlock">
                    <div class="line"></div>
                    <h2> EXIT </h2>
                </div>
                <img src="solar.png" />
                <div class="roadBlock">
                    <div class="line"></div>
                    <h2> ENTRY </h2>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url(cars_parking_backlight_171698_3840x2160.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .parkingLot {
        padding: 0;
        display: flex;
        width: 90%;
        flex-direction: column;
        margin-left:10vh;
        
    }

    .sectionOne {
        display: flex;
        width: 100%;
    }

    .space {
        border: 2px solid black;
        width: 100%;
        height: 15vw;
        border-bottom-color: white;
        border-top: none;
        background-color: #362d2d;
    }

    .empty:hover {
        background: linear-gradient(111.4deg, rgb(2, 255, 4) 18.4%, rgb(0, 232, 237) 100.2%);
    }

    .parked:hover {
        background: linear-gradient(98.3deg, rgb(0, 0, 0) 10.6%, rgb(255, 0, 0) 97.7%);
    }

    .space img {
        width: 30%;
        display: block;
        margin: 3vh auto;
    }

    .sectionTwo {
        display: flex;
        flex-direction: column;
    }

    .road {
        width: 100%;
        height: 13vw;
        background-size: contain;
        background-color: rgb(27, 26, 26);
    }

    .controlArea {
        display: flex;
        height: 100%;
    }

    .controlArea img {
        width: 70%;
        height: 15vw;
    }

    .roadBlock {
        width: 15%;
        height: 15vw;
        color: white;
        text-align: center;
        line-height: 11vw;
        background-size: contain;
        background-color: rgb(27, 26, 26);
    }

    .roadBlock h2 {
        font-size: 1.5rem;
        letter-spacing: 2px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .line {
        width: 100%;
        height: 3vw;
        border-bottom: 2px solid rgb(238, 255, 0);
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const firebaseConfig = {
            apiKey: "AIzaSyC0FkGppUryvdMCvPmZ26tu3sw0ejZzbw4",
  authDomain: "parking-11c32.firebaseapp.com",
  databaseURL: "https://parking-11c32-default-rtdb.firebaseio.com",
  projectId: "parking-11c32",
  storageBucket: "parking-11c32.appspot.com",
  messagingSenderId: "829075419774",
  appId: "1:829075419774:web:5932ff01522aa7cebf1e2f"
        };
        const app = firebase.initializeApp(firebaseConfig);
        console.log(app);

        // Reference the Firebase Realtime Database
        const database = app.database();
        const parkingRef = database.ref("parking");

        // Function to update the parking spaces based on data
        function updateParkingSpaces(parkingData) {
            for (let i = 1; i <= 5; i++) {
                const spaceElement = document.getElementById(`space${i}`);
                if (!spaceElement) {
                    continue; // Skip if the element is not found
                }
                const isOccupied = parkingData[`space${i}`] == 1;

                if (isOccupied) {
                    spaceElement.classList.remove("empty");
                    spaceElement.classList.add("parked");
                    spaceElement.innerHTML = `<img src="car1.png" />`;
                } else {
                    spaceElement.classList.remove("parked");
                    spaceElement.classList.add("empty");
                    spaceElement.innerHTML = "";
                }
            }
        }

        // Listen for changes in the database and update parking spaces
        parkingRef.on("value", (snapshot) => {
            const parkingData = snapshot.val();
            if (parkingData) {
                updateParkingSpaces(parkingData);
            }
        });
    });
</script>
                      </div>

                  </div><!-- /col-lg-3 -->
              </div><!--/row -->
          </section>
      </section>

      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
	<script src="assets/js/zabuto_calendar.js"></script>

	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to smart-parking!',
            // (string | mandatory) the text inside the notification
            text: 'Makes your parking easier.'
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


  </body>
</html>
<?php } ?>
