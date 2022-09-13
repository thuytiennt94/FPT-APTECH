<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FPT-APTECH Library</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            margin-top: 50px;
            padding: 0;
        }
        .col-lg-12, .col-lg-6{
            padding: 0;
            float: left;
        }
        .head-left{
            text-align: center;
        }
        .ipSearch{
            width: 100%;
            padding-left: 20px;
            padding-top: 3px;
            padding-bottom: 3px;
        }
        .table{
            text-align: center;
            border: 1px solid #000;
        }
        .table th{
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="head-left col-lg-6">
                    <h3>FPT - APTECH LIBRARY</h3>
                </div>
                <div class="head-right col-lg-6">
                    <input type="text" name="Search" class="ipSearch" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="table table-bordered">
            <tr>
                <th>Bookid</th>
                <th>Authorid</th>
                <th>Title</th>
                <th>ISBN</th>
                <th>Pub_year</th>
                <th>Available</th>
            </tr>
            @foreach($library as $libraries)
            <tr>
                <td>{{$libraries->bookid}}</td>
                <td>{{$libraries->bookid}}<</td>
                <td>{{$libraries->bookid}}<</td>
                <td>{{$libraries->bookid}}<</td>
                <td>{{$libraries->bookid}}<</td>
                <td>{{$libraries->bookid}}<</td>
            </tr>
            @endforeach
        </div>
    </div>
</body>
</html>
