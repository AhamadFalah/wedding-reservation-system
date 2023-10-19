<?php
include_once 'header.php'
?>

<div class="contactusForum">
<script src="javascript/contactus.js"></script>
            <fieldset>
                <legend>Contact US</legend>
                <form method="post" action="includes/contactusform.php" onsubmit=" return validateForumData()">
                    <label>Name: </label>
                    <input type="text" name="Contact_name" id="contact_name"><br>
                    <label>Email</label>
                    <input type="email" name="Contact_email" id="contact_email"><br>
                    <label>Phone number:</label>
                    <input type="number" name="Contact_Number" id="contact_number" required><br>
                    <label>Message</label>
                    <textarea rows="4" cols="50" name="Conatact_message" id="contact_message"></textarea><br><br>
                    <input type="submit" id="submitbtn" value="Submit your inquiry">     <input type="reset" id="resetbtn" value="Reset">
                </form>
            </fieldset><br><br<br><br><br><br>
        </div>
        <center><div class="googlemap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.815187508914!2d79.84810437445958!3d6.912688093086815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596aaa8742d9%3A0xced655398fd4d621!2sSLIIT%20Metropolitan%20Campus!5e0!3m2!1sen!2slk!4v1685965819365!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p>Name:Asiri Jayawardena</p>
            <p>Contact No:0758264839</p>
            <p>Email:asirijayawardena@gmail.com</p>
        </div></center>
        </div>

<?php
include_once 'footer.php';
?>























