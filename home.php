<?php
session_start();
require 'mysqlConnect.php';
require 'update_slots.php';
require "driver.details.php";
if (!$_SESSION['driver_email']) {
  header("location: index.php");
}
else {

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Smart Parking Web Portal</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="datatable/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="datatable/keyTable.bootstrap.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
    <style>



.area{
  margin-bottom: 15px;
}
.cart-nav ul li {
  margin:3%;
  padding: 3%;
  color: #0000 !important;
}
.row{
  margin: auto;
  width: 35%;
  padding: 10px;
}
.Head {
  text-transform: uppercase;
   
   color: 	#009688 !important;
}
.parkingLot{
  padding:6vh;
  margin-left:5vh;
}
.modal-backdrop {
    z-index: 1020 !important;
}

.parking_text {
  color: #2F4F4F !important;
  text-transform: uppercase;
}
.center-div {
    margin-left:15vh;
}
.total {
  color: #FF0000 !important;
}
.modal { background: rgba(000, 000, 000, 0.8); min-height:1000000px; }

.fa-circle {
  color: green;
}
    </style>
</head>
<body>
    <div >
      <div class="container">
         <div class="col-md-3"></div>
         <div class="col-md-8 center-div">
        <h1><a href="home.php" style="text-decoration: none; color:white;">SMART PARKING Portal</a></h1>
    </div>
         <div class="col-md-1"></div>
</div>

<div class="row">
   <div class="container">
     
         <div class="cart-nav col-xs-4">
           <ul>
             <li class="list-group-item" id="requests">           
                <div class="thumbnail">              
                      <div class="caption">
                  
                        <h3><?=$name?></h3>
                        <p>(<?=$email?>)</p>
                        <p><i id="#online" class="fa fa-circle" aria-hidden="true"></i> Online</p>
                        <p><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a></p>
                   
                      </div>
                    </div>                   
             </li> 

             <li class="list-group-item" >
               <select class="form-control" onchange="filter_park()" id="city">
                 <option value="Ekm">EKM</option>
                 <option value="Ktm">KTM</option>
                 <option value="Cgy">CGY</option>
               </select>
             </li>
             <li class="list-group-item">
               <select class="form-control" onchange="filter_park()" id="street">
                 <option value="">----[Search Street]----</option>
                 <option value="ekm">Lot a</option>
                 <option value="ekm">Lot b</option>
                 <option value="ekm">Lot c</option>
               </select>
             </li>
             <li class="list-group-item" id="requests"><a href="Notification.html"><span class="glyphicon glyphicon-envelope"></span> Notifications</a></li>
           </ul>
         </div>
         <div class="content col-xs-8">
            <div id = "home">

            </div>
         </div>

   </div>
</div>
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
        height: 200vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .parkingLot {
        display: flex;
        width: 100%;
        flex-direction: column;
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
                const isOccupied = parkingData[`space${i}`] == 0;

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
  </body>
</html>
<?php } ?>
