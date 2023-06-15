<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
</head>

<body>

    <div class="container">
        
        <table class="table" id="tabletest">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>Action</th>
                    <th><a href="{{url('form')}}"><button class="btn btn-primary">Add</button></a></th>
                </tr>
            </thead>

            <tbody>
                @foreach($user as $list)
                <tr>
                    <td>{{$list->Username}}</td>
                    <td>{{$list->password}}</td>
                    <td>{{$list->email}}</td>
                    <td>{{$list->mobile}}</td>
                    <td>{{$list->gender}}</td>
                    <td>{{$list->city}}</td>
                    <td>
                        <a href="{{url('/edit')}}/{{$list->id}}"><button class="btn btn-primary">Edit</button></a>
                        <a href="{{url('/delete')}}/{{$list->id}}"><button class="btn btn-danger delete-btn">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

    
</body>
</html>
