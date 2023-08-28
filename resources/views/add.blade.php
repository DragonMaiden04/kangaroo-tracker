<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add Kangaroo</title>
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="form">
            <div class="title">
                <h1>ADD NEW KANGAROO</h1>
            </div>
            <div class="form-body">
                <div class="form-inline">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="form-inline">
                    <label for="nickname">Nickname:</label>
                    <input type="text" id="nickname" name="nickname">
                </div>
                <div class="form-inline">
                    <label for="weight">Weight:</label>
                    <input type="text" id="weight" name="weight">
                    <label for="height">Height:</label>
                    <input type="text" id="height" name="height">
                </div>
                <div class="form-inline">
                    <label for="color">Color:</label>
                    <input type="text" id="color" name="color">
                </div>
                <div class="form-inline">
                    <label for="gender">Gender:</label>
                    <select name="gender" id="gender">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                    <label for="friendliness">Friendliness:</label>
                    <select name="friendliness" id="friendliness">
                        <option value="I">Independent</option>
                        <option value="F">Friendly</option>
                    </select>
                </div>
                <div class="form-inline">
                    <label for="bday">Birthday:</label>
                    <input type="text" id="bday" name="bday">
                </div>
                <div class="btn-holder">
                    <button id="Submit">Add</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>