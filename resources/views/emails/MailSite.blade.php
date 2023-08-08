<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: #f7f7f7;font-family:arial;padding:30px">

    <div style="background: #fff;border:2px solid #eee; width: 600px; margin: 0 auto; padding: 20px">
        <h4>Dear Admin,</h4>
        <p>There is new email with the following data:</p>
        <p><b>Name:</b> {{ $data['name'] }}</p>
        <p><b>Email:</b> {{ $data['email'] }}</p>
        <p><b>Phone:</b> {{ $data['phone'] }}</p>
        <p><b>teypservices:</b> {{ $data['teypservices'] }}</p>
        <p><b>comments:</b> {{ $data['comments'] }}</p>
        <br>
        <br>
        <p>Best Regards.</p>
    </div>

</body>
</html>