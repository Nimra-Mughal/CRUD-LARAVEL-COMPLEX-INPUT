<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-lg-10 mx-auto ">
                <a href="/form" class="btn btn-success w-25 ms-5">Add Record</a>
                <form action="search_data" method="GET">
                    <input type="text" name="search">
                    <button type="submit">search</button>
                </form>
                <table class="table p-4 shadow-lg">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Skill</th>
                            <th>Gender</th>
                            <th>Country</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            
                       
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td><img src="storage/images/{{$item->image}}" alt="" height="50px"></td>
                            <td>{{$item->skill}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->country}}</td>
                            <td><a href="update/{{$item->id}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="delete/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $data->links('pagination::bootstrap-5') }} --}}
            </div>
        </div>
    </div>
</body>
</html>