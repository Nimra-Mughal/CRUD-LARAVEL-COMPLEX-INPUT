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
            <div class="col-lg-10 mx-auto p-3 shadow-lg mt-5">
                <h1 class="text-center">VIEW DATA</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>BARCODE</th>
                            <th>IMAGE</th>
                            <th>BRAND</th>
                            <th>description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{!!  DNS1D::getBarcodeHTML($item->barcode, 'PHARMA',2,100)!!}
                            P- {{$item->barcode}}
                            </td>
                            <td><img src="images/{{$item->image}}" height="50px" alt=""></td>
                            <td>{{$item->brand}}</td>
                            <td>{{$item->description}}</td>
                            <td><a href="" class="btn btn-update">update</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>