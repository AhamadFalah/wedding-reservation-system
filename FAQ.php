<?php
include_once 'header.php';
?>
<script src="javascript/contactus.js"></script>
<div class="automatedQaA">
            <fieldset>
                <legend>Automated QaA</legend>
                <form method="post" action="contactusform.php">
                    <label>Select question:  </label>
                    <select id="QAquestion">
                        <option value="How many venues offered by the hotel?">How many venues offered by the hotel?</option>
                        <option value="How many staff available?">How many staff available?</option>
                        <option value="What is the best venue offered by the hotel?">What is the best venue offered by the hotel?</option>
                        <option value="What is the best package?">What is the best package?</option>
                        <option value="Who is the price of the basic package per person?">Who is the price of the basic package per person?</option>
                        <option value="Are there are any special rates offered to the room when booking a hotel?">Are there are any special rates offered to the room when booking a hotel?</option>
                        <option value="What is the venue which offeres the highes capacity?">What is the venue which offers the highest capacity?</option>
                        <option value="How many packages offered by the hotel?">How many packages offered by the hotel?</option>
                    </select><br>
                    <button type="button" value="Generate automated answer" id="Automatedbtn" onclick="generateAnswer()">Generate automated answer</button>
                    <p id="answer"></p>
                </form>
            </fieldset>
        </div>

<?php
include_once 'footer.php';
?>