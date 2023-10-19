<?php
include_once './header.php';
include_once 'includes/databasehandle.inc.php';
include_once 'includes/function.inc.php';
$id = $_GET["rid"];
$sql = "SELECT * FROM reservation_data WHERE Reservation_ID=$id";
$result = mysqli_query($con,$sql);
if($result){
  $row=mysqli_fetch_assoc($result);
  $amount=$row["total"];
}
if(isset($_POST["pay"])){
  $cardno=$_POST["cardNo"];
  $expiaryDate=$_POST["expiryDate"];
  $cvv=$_POST["cvv"];
  $name=$_POST["name"];
  $status='Pending';
  createpayment($con,$cardno,$name,$expiaryDate,$id,$cvv,$amount,$status);
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment Page</title>
  <style>
    body {
    }

    .container-payment {
      background-color: #d9d9d9;
      border-radius: 10px;
      padding: 0px 20px 20px 20px;
      margin-top: 70px;
      max-width: 500px;
      margin: 0 auto;
    }

    #title {
      margin-top: 70px;
      text-align: center;
    }

    form {
      margin-top: 30px;
    }

    .container-input {
      margin-bottom: 20px;
    }

    .container-input label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .container-input input[type="text"],
    .container-input input[type="number"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .container-input input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .container-input input[type="submit"]:hover {
      background-color: #45a049;
    }

  </style>
</head>
<body>
  <div class="container-payment" style="margin-bottom:20px;">
    <h2 id="title">PAYMENT PAGE</h2>
      <form action="" method="POST">  
        <div class="container-input">
          <label for="cardNumber">Card Number</label>
          <input type="text" id="cardNo" name="cardNo" placeholder="Enter your card number" pattern="[0-9]{16}" maxlength="16" title="Please enter a 16-digit card number" required>
        </div>
        <div class="container-input">
          <label for="expirationDate">Expiration Date</label>
          <input type="date" id="expiryDate" name="expiryDate" placeholder="MM/YYYY"  maxlength="6" title="Please enter a valid expiration date in the format MM/YYYY" required>
        </div>
        <div class="container-input">
          <label for="cvv">CVV</label>
          <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" pattern="[0-9]{3,4}" maxlength="4" title="Please enter a valid CVV (3 or 4 digits)" required>
        </div>
        <div class="container-input">
          <label for="nameOnCard">Name on Card</label>
          <input type="text" id="name" name="name" placeholder="Enter the name on your card" maxlength="40" pattern="[A-Za-z\s]{1,50}" title="Please enter a valid name on the card" required>
        </div>
        <div>
          <h1 id="amount">Rs.<?php echo $amount ?></h1>
        </div>
        <div class="container-input">
          <input type="submit" value="Confirm" name="pay">
        </div>
      </form>
  </div>
</body>
</html>
<?php
include './footer.php';
?>