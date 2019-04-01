<!DOCTYPE html>
<html lang="en-US">


<head>
    <title>TEST</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main.css">


</head>
<body>
<div>
    <form method="post" onsubmit="window.location.reload()" action="/about/culture" enctype="multipart/form-data" >
        <fieldset>
            <legend>Personal data</legend>
            <br>
            <input type="text" placeholder="Firstname" name="name" required>
            <br><br>
            <input type="text" placeholder="Lastname" name="surname">
            <br><br>

            <input type="email" placeholder="your e-mail adress" name="email" required>
            <br><br>
            <br>
            <textarea name="message" placeholder="Please leave your message:" rows="10" cols="40"></textarea> <br>


            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="5000"> -->

            <input type="file" name="fileup" required/>


            <input type="submit" name="submit" value="Send">

        </fieldset>
    </form>
</div>

</body>
</html>