<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Voting Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .navbar {
        position: fixed;
        top: 0px;
        right: -1px;
        left: -1px;
        z-index: 9;

    }



    .form-group input {
        font-family: 'Baloo Bhai', cursive;
        text-align: center;
        display: block;
        width: 400px;
        padding: 1px;
        border: 2px solid black;
        margin: 11px auto;
        font-size: 25px;
        border-radius: 8px;
    }

    .form-group label {
        font-family: 'Baloo Bhai', cursive;
        text-align: left;
        display: block;
        width: 400px;
        padding: 1px;

        margin: 11px auto;
        font-size: 20px;

    }

    .form-group small {
        font-family: 'Baloo Bhai', cursive;
        text-align: left;
        display: block;
        width: 400px;
        margin: 11px auto;

    }

    .form-group button {
        font-family: 'Baloo Bhai', cursive;
        text-align: center;
        display: block;
        margin: 11px auto;


    }
</style>

<body>

    <div class="jumbotron text-center" style=" background-color:#cdd4d4">
        <h1>National E-voting Portal</h1>
        <p>राष्ट्रीय मतदान सेवा पोर्टल</p>
        <img src="ashoka logo.jpg" alt="" width="60px" height="100px">
    </div>


    <div class="navbar">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">E-Voting</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li data-toggle="tooltip" title="click here to check eligiblity rules"><a href="#">Eligiblity</a>
                    </li>
                    <li data-toggle="tooltip" title="Click here to know more about us"><a href="#">About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <form action="insert.php" method="POST">
        <div class="form-group">
            <label for="FirstName">First Name</label>
            <input type="Firstname" class="form-control" name="firstname" required
                placeholder="Enter your first name ">

        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="Lastname" class="form-control" name="lastname" required placeholder="Enter your last name ">

        </div>
        <div class="form-group">
            <label for="voterID">voterID</label>
            <input type="voterID" class="form-control" name="voter" required placeholder="Enter your voterID">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" required placeholder="Enter email">

        </div>
        <div class="form-group">
            <label for="Contact Number">Contact Number</label>
            <input type="Contact Number" class="form-control" name="number" required
                placeholder="Enter your contact number ">
            <small class="form-text text-muted">We'll never share your contact number with anyone else.</small>

        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>



    </form>


</body>