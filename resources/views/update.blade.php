<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Update Kangaroo</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/update.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="form">
            <div class="title">
                <h1>UPDATE KANGAROO</h1>
            </div>
            <div class="form-body">
                <div class="form-inline">
                    <label for="name">Name:<span class="required">*</span></label>
                    <input type="text" id="name" name="name" value="{{$result->name}}">
                    <label for="name" class="error" id="name-error"></label>
                </div>
                <div class="form-inline">
                    <label for="nickname">Nickname:</label>
                    <input type="text" id="nickname" name="nickname" value="{{$result->nickname}}">
                    <label for="name" class="error" id="nickname-error"></label>
                </div>
                <div class="form-inline">
                    <label for="weight">Weight:<span class="required">*</span></label>
                    <input type="number" id="weight" name="weight" placeholder="kg" step="0.01" value="{{$result->weight}}">

                    <label for="height">Height:<span class="required">*</span></label>
                    <input type="number" id="height" name="height" placeholder="ft" step="0.01" value="{{$result->height}}">
                    
                    <label for="name" class="error" id="weight-error"></label>
                    <label for="name" class="error" id="height-error"></label>
                </div>
                <div class="form-inline">
                    <label for="color">Color:</label>
                    <input type="text" id="color" name="color" value="{{$result->color}}">
                    <label for="name" class="error" id="color-error"></label>
                </div>
                <div class="form-inline">
                    <label for="gender">Gender:<span class="required">*</span></label>
                    <select name="gender" id="gender">
                        <option value="M" {{ ($result->gender === 'M') ? 'selected' : '' }}>Male</option>
                        <option value="F" {{ ($result->gender === 'F') ? 'selected' : '' }}>Female</option>
                    </select>
                    <label for="name" class="error" id="gender-error"></label>
                </div>
                <div class="form-inline">
                    <label for="friendliness">Friendliness:</label>
                    <select name="friendliness" id="friendliness">
                        <option value=""></option>
                        <option value="I" {{ ($result->friendliness === 'I') ? 'selected' : '' }}>Independent</option>
                        <option value="F" {{ ($result->friendliness === 'F') ? 'selected' : '' }}>Friendly</option>
                    </select>
                    <label for="name" class="error" id="friendliness-error"></label>
                </div>
                <div class="form-inline">
                    <label for="bday">Birthday:<span class="required">*</span></label>
                    <input type="text" id="birthday" name="bday" value="{{$result->birthday}}">
                    <label for="name" class="error" id="birthday-error"></label>
                </div>
                <div class="btn-holder">
                    <button id="Submit">Update</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    let result = @json($result);
    const id =  result.id;
</script>
</html>