<html>
<head><title>wtf</title></head>
<body>
<h1>hello</h1>
<?php $old = $_POST["account"] ?? " ";
?>
<form method="post">
    <p> <label for = "account">Account number:</label>
    <input type="text" name="account" id="account" value="<?= htmlentities($old) ?>"></p>
    <p><label for = "password">Password:</label>
    <input type="password" name="password" id="password"></p>
    <p>
        <label for="time">What is time:</label>
        <input type="radio" name="time" value="am" id="time">AM
        <input type="radio" name="time" value="pm" id="time">PM
    </p>
    <p>
        <label for="location">Where are you:</label>
        <select name="location" id="location">
            <option value="0">rohtak</option>
            <option value="1">hisar</option>
            <option value="2">gurgaon</option>
            <option value="3">new delhi</option>
        </select>
    </p>
    <p>
        <label for="text">Comment:<br></label>
        <textarea rows="10" cols="40" id="text" name="text">
            HI.
        </textarea>
    </p>

    <input type="submit" value="Submit" name="result">
    <input type="button" onclick="location.href='http://localhost/code/first/hello.html'; " value="die">


</form>
</body>
</html>
