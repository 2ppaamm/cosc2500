<script type="text/javascript">
    <!--
    function verify_clicks(numberOfBlanks) {

        var chkBoxCount = numberOfBlanks.length; // Total number of checkboxes, used in for loop
        var totalChecked=0; // default to zero
        for (var i = 0; i < chkBoxCount; i++) {  // loop through each checkbox
            if (eval("numberOfBlanks[" + i + "].checked") == true) { // see if it's checked
                totalChecked += 1; // if so, incriment the counter
            }
        }
        if(totalChecked > 2) {  // now test the results
            alert("More than 2 checked");
        }
        else {
            alert("2 or less checked");
        }
    }
    -->
</script>

<body>
<form>
    <input id="numberOfBlanks" name="numberOfBlanks" type="checkbox" value="" /> 1st checkbox
    <input id="numberOfBlanks" name="numberOfBlanks" type="checkbox" value="" /> 2nd checkbox
    <input id="numberOfBlanks" name="numberOfBlanks" type="checkbox" value="" /> 3rd checkbox
    <input id="numberOfBlanks" name="numberOfBlanks" type="checkbox" value="" /> 4th checkbox
    <input id="numberOfBlanks" name="numberOfBlanks" type="checkbox" value="" /> 5th checkbox
    <input type=button onclick="verify_clicks(numberOfBlanks)" value="Check">
</form>
</body>
