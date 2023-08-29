<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kangaroos</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Theme stylesheets (reference only one of them) -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/devextreme/23.1.4/css/dx.carmine.compact.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/devextreme/23.1.4/css/dx.greenmist.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn3.devexpress.com/jslib/19.1.16/js/dx.all.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</head>
<body>
    <h1 id="tracker-title">Kangaroo Tracker</h1>
    <div class="header">
        <ul>
            <a href="/add">
                <li>Add Kangaroo</li>
            </a>
        </ul>
    </div>
    <div class="container" id="gridContainer">
    </div>
</body>
</html>