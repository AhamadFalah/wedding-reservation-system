<?php
include_once 'header.php';
include_once 'includes/databasehandle.inc.php';
?>
<html>
    <head>
        <style>
            .Report-Button {
                border-width: 0px;
                border-radius: 23px;
                width: 150px;
                height: 40px;
                margin-top: 20px;
                margin-bottom: 20px;
                background-color: #b1b1b1;
                cursor: pointer;
            }

            .container-title button:hover {
                background-color: #a1a1a1;
            }
            
            .container-title button:active {
                background-color: #888888;
            }

            .container-title {
                margin-top: 70px;
                text-align: center;
                display: flex;
                align-items: center;
                width: 100%;
                justify-content: space-between;
            }

            .container-generate {
                margin-right: 50px;
            }

            .container-buttons {
                display: flex;
                margin-top: 50px;
                margin-left: 100px;
            }

            .reservation-button-l {
                border-width: 0px;
                height: 30px;
                width: 100px;
                border-top-left-radius: 10px;
                background-color: #b1b1b1;
                font-weight: normal;
                cursor: pointer;
            }

            .reservation-button-l:hover {
                background-color: #a1a1a1;
            }
            
            .reservation-button-l:active {
                background-color: #888888;
            }

            .reservation-button-r {
                border-width: 0px;
                height: 30px;
                width: 100px;
                border-top-right-radius: 10px;
                background-color: #b1b1b1;
                font-weight: normal;
                cursor: pointer;
            }

            .reservation-button-r:hover {
                background-color: #a1a1a1;
            }
            
            .reservation-button-r:active {
                background-color: #888888;
            }

            .box-1 {
                background-color: #d9d9d9;
                width: 100%;
                height: 110px;
                margin: 0px 0px 5px 0px;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .arrow-img {
                width: 90px;
                height: 90px;
                border-radius: 10px;
            }

            .image-box {
                padding: 5px 5px 5px 5px;
                margin: 5px 5px 5px 5px;
                background-color: #a1a1a1;
                width: 100px;
                height: 100px;
                border-radius: 10px;
                float: right;
            }

            .container-reservations {
                background-color: #b1b1b1;
                padding: 5px;
                width: 100%;
                border-radius: 10px;
                display: flex;
                flex-direction: column;
            }

            .box-info {
                display: flex;
                /* justify-content: space-between; */
            }

            .box-info-p {
                margin-top: 2px;
                margin-right: 20px;
                width: 130px;
            }

            .box-info-d {
                margin-top: 2px;
                margin-right: 10px;
            }

            .box-user {
                margin-top: 0px;
            }

            .manage-button {
                border-width: 0px;
                width: 100px;
                height: 23px;
                border-radius: 23px;
                margin-right: 10px;
                cursor: pointer;
            }

            .box-button {
                margin-left: 50px;
            }

            .box-button button:hover {
                background-color: #a1a1a1;
            }
            
            .box-button button:active {
                background-color: #888888;
            }

            .box-reservation {
                margin-left: 0px;
                justify-content: right;
            }
        </style>
        <script>
            function getPage(url) {
                window.location.href = url;
            }
        </script>
    </head>
    <body>
        <div class="container-manage-reservations">
            <div class="container-title">
                <h1>Inuiries</h1>
            </div>
            <div class="container-reservations">
                <?php
                $id=$_SESSION["UID"];
                $sql = "SELECT * FROM   contact_us WHERE UserID=$id";
                $result = $con->query($sql);
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id=$row["Contact_ID"];
                        $date=$row["Contact_date"];
                        $email=$row["C_email"];
                        $message=$row["C_Message"];
                        $answer=$row["answer"];
                        //$package=$row["R_venue"];
                        //$venue=$row["R_package"];
                        echo '<div class="box-1">';
                        echo '  <div class="image-box">';
                        echo '      <img class="arrow-img" src="images/arrow.jpg" alt="arrow-img">';
                        echo '  </div>';
                        echo '  <div class="asda">';
                        echo '      <div class="box-reservation">';
                        echo '          <h2 class="box-title">Inquiry #' . $id . '</h2>';
                        echo '          <div class="box-info">';
                        echo '              <p class="box-info-d"><b></b></p>';
                        //echo '              <p class="box-info-p">Email: <b>' .$email . '</b></p>';
                        echo '              <p class="box-info-p">Message: <b>' .$message. '</b></p>';
                        echo '              <p class="box-info-p">Answer: <b>' .$answer. '</b></p>';
                        echo '              <p class="box-info-p"><b></b></p>';
                        echo '              <p class="box-info-p"><b></b></p>';
                        echo '              <p class="box-info-p"><b></b></p>';
                        echo '          </div>';
                        echo '      </div>';
                        echo '  </div>';
                        echo '  <div class="box-button">';
                        //echo '<a href="updatereservation.php?updateID='.$id.'"><button class="manage-button" >Update</button></a>';
                //echo '<a href="PAYMENT_PAGE.php?rid='.$id.'"><button class="manage-button" >Payment</button></a>';
                        // echo '      <button class="manage-button" onclick="getPage()">Approve</button>';
                        // echo '      <button class="manage-button" onclick="getPage()">Manage</button>';
                        // echo '      <button class="manage-button" onclick="getPage()">Cancel</button>';
                        echo '  </div>';
                        echo '</div>';
                    }
                } else {
                    echo "No inquiries found.";
                }
                
                $con->close();
                ?>
                
                <!-- <div class="box-1">                Sample
                    <div class="image-box">
                        <img class="arrow-img" src="a.png" alt="arrow-img">
                    </div>

                    <div>
                        <div class="box-reservation">
                            <h2 class="box-title">Reservation #1</h2>
                            <div class="box-info">
                                <p class="box-info-p">Check-in: <b>DATE</b></p>
                                <p class="box-info-p">Venue: <b>VENUE</b></p>
                                <p class="box-info-p">Package: <b>Package</b></p>
                                <p class="box-info-p">Guests: <b>GUESTS</b></p>
                            </div>
                            <h4 class="box-user">By: <b>CUSTOMER NAME</b></h4>
                        </div>
                    </div>

                    <div class="box-button">
                        <button class="manage-button" onclick="getPage('')">Approve</button>
                        <button class="manage-button" onclick="getPage('')">Manage</button>
                        <button class="manage-button" onclick="getPage('')">Cancel</button>
                    </div>
                </div> -->
            </div>
        </div>
        <a href="USER _profile.php"><button class="Report-Button"><h3>Back</h3></button></a>

    </body>
</html>
<?php
include_once 'footer.php'
?>
