<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;

        }

        .container {
            text-align: left;
            display: table-cell;
            vertical-align: top;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
  {{  Form::open(['url'=>'/doRegister', 'method'=>'POST'])}}
  {{  Form::label('username', 'USERNAME:')}}
  {{  Form::text('username')}} <br />
  {{  Form::label('password', 'PASSWORD:')}}
  {{  Form::text('password')}} <br />
  {{  Form::label('email', 'EMAIL:')}}
  {{  Form::text('email')}} <br />
  {{  Form::submit('Register')}}
  {{  Form::close()}}
</body>
</html>
