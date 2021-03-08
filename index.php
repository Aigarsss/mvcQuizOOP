<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="public/css/main.css">

    <title>MVC OOP quiz</title>
</head>
<body class="body">
    <div class="container">
        <h1 class="mainHeader">Welcome Stranger!</h1>
        <h2 class="question">Are you ready for some questions? Select a quiz and test yourself</h2>

        <form action="." method="POST" class="quizSelect">
            <select name="quizSelect" id="quizSelect">
                <!-- <option disabled selected value></option> -->
                <option value="first">first</option>
                <option value="second">second</option>
            </select>
        <input type="submit" name="submit" value="GO" >
        </form>

    </div>
</body>
</html>