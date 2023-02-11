<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="image/favicon.ico" type="image/x-icon">
    <title>Data Table</title>
</head>
<body>
{{ View::make('header') }}

    <div class="box">
    <table class="table">
        <thead>
             <tr>
                <th>customer_id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Message</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>
            {{ $count=0 }}
            @foreach ($customers as $customers)
                {{ $count= $count+1 }}
              <tr>
                <td>{{ $count }}</td>
                <td>{{ $customers ['name'] }}</td>
                <td>{{ $customers ['email'] }}</td>
                <td>{{ $customers ['number'] }}</td>
                <td>{{ $customers ['text'] }}</td>
                {{-- <td><a href={{ "/delete/".$customers['id']}}><button class="btn btn-danger">Delete</button></a></td> --}}
               </tr>
            @endforeach
        </tbody>
    </table>

</div>
</body>
<style>
    .box{
        background-color: #b6b6b6;
    color: #b6b6b6;
    width: 100vw;
    height: 81vh;
    }
</style>
</html>
