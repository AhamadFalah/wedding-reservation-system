<?php
include_once '../header.php';
include_once 'config.php';
?>
<html>
    <head>
        <style>
            .Report-Button {
                border-width: 0px;
                border-radius: 23px;
                width: 150px;
                height: 40px;
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

            .transaction-button-l {
                color: white;
                border-width: 0px;
                height: 30px;
                width: 100px;
                border-top-left-radius: 10px;
                background-color: #b1b1b1;
                font-weight: normal;
                cursor: pointer;
            }

            .transaction-button-l:hover {
                background-color: #a1a1a1;
            }
            
            .transaction-button-l:active {
                background-color: #888888;
            }

            .transaction-button-r {
                color: white;
                border-width: 0px;
                height: 30px;
                width: 100px;
                border-top-right-radius: 10px;
                background-color: #b1b1b1;
                font-weight: normal;
                cursor: pointer;
            }

            .transaction-button-r:hover {
                background-color: #a1a1a1;
            }
            
            .transaction-button-r:active {
                background-color: #888888;
            }

            .box-1 {
                background-color: #d9d9d9;
                width: 100%;
                height: 80px;
                margin: 0px 0px 5px 0px;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .container-transaction {
                margin-top: 50px;
                background-color: #b1b1b1;
                padding: 5px;
                width: 100%;
                border-radius: 10px;
                display: flex;
                flex-direction: column;
            }

            .box-info {
                display: flex;
                justify-content: space-between;
            }

            .box-info-p {
                margin-top: 2px;
                margin-right: 20px;
            }

            .box-user {
                margin-top: 5px;
            }

            .manage-button {
                border-width: 0px;
                width: 100px;
                height: 23px;
                border-radius: 23px;
                margin-right: 10px;
                cursor: pointer;
            }
            .box-button button:hover {
                background-color: #a1a1a1;
            }
            
            .box-button button:active {
                background-color: #888888;
            }

            .box-transaction {
                margin-left: 10px;
            }

            .transaction-amount {
                width: 200px;
                margin-left: 10px;
                margin-right: 10px;
            }

            .amount-button{
                display: flex;
                align-items: center;
                justify-content: right;
            }

            .container-manage-transaction{
                margin-bottom: 25%;
            }
            .Report-Button{
                margin-top: 25px;
            }
        </style>
    </head>
    <body>
        <div class="container-manage-transaction">
            <div class="container-title">
                <h1>Manage Transactions</h1>
            </div>
            <div class="container-transaction">
                <?php
                $id=$_SESSION["UID"];
                $sql = "SELECT* FROM payments WHERE CID=$id";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        $id = $row["Payment_ID"];
                        $date = $row["P_Date"];
                        //$pid  = $row["PaymentA_ID"];
                        $rid = $row["RID"];
                        $cardNo=$row["cardNo"];
                        //$method  = $row["P_Method"];
                        $amount  = $row["P_Amount"];
                        $status  = $row["P_Status"];

                    
                
                echo '<div class="box-1">';               
                echo '    <div class="box-transaction">';  
                echo '        <h2 class="box-title">Transaction #' . $id .'</h2>';  
                echo '      <div class="box-info">';  
                echo '        <p class="box-info-p">Tranaction Date: <b>' . $date .'</b></p>';  
                echo '        <p class="box-info-p">Reservation ID: <b>' . $rid .'</b></p>';
                echo '        <p class="box-info-p">Card No: <b>' .$cardNo.'</b></p>';  
                echo '        <p class="box-info-p">Payment Status: <b>' . $status.'</b></p>'; 
                echo '      </div>';  
                echo '    </div>';  
                echo '    <div class="amount-button">';  
                echo '    <div class="box-button">';   
                echo '    </div>';  
                echo '    <h2 class="transaction-amount">Rs.' . $amount .'</h2>';  
                echo '    </div>';  
                echo '</div>';
            }
        } else {
            echo "No reservations found.";
        }
        
        $conn->close()
                ?>
            </div>
            <a href="../USER _profile.php"><button class="Report-Button"><h3>Back</h3></button></a>
        </div>
    </body>
</html>
<?php
include_once '../footer.php'
?>
