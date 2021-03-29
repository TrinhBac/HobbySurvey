<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Hobby Survey</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <style>
        .text-alert{
        margin: 0 auto;
        position: relative;
        text-align: center;
        color: #dc5795;
        font-size: 25px;
        font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="wapper">
        <h1>Hobby Survey</h1>
        <?php
            $message = Session::get('message');
            if($message){
                echo '<p class="text-alert">'.$message.'</p>';
                Session::put('message',null);
            }
        ?>
        <form action="{{ URL::to('/save-infor') }}" method="post">
            {{ csrf_field() }}
            <div class="txt_field">
                <input type="text" name="name" id="" placeholder="Name" />
            </div>
            <div class="txt_field">
                <input type="text" name="gender" id="" placeholder="Gender" />
            </div>
            <div class="txt_field">
                <input type="text" name="phoneNumber" id="" placeholder="Phone number" />
            </div>
            <div class="txt_field">
                <input type="text" name="email" id="" placeholder="Email" />
            </div>
            <div class="txt_field">
                <input type="text" name="age" id="" placeholder="Age" />
            </div>
            <div class="txt_field">
                <input type="text" name="address" id="" placeholder="Address" />
            </div>
            <div class="txt_field">
                <input type="text" name="petHobby" id="" placeholder="Pet hobby" />
            </div>
            <div class="txt_field" id="last_txt_field">
                <input type="text" name="foodHobby" id="" placeholder="Food hobby" />
            </div>
            <input type="submit" value="Submit" />
        </form>
    </div>
</body>

</html>
