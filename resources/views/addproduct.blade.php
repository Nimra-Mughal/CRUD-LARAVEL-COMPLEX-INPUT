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
            <div class="col-lg-10 mx-auto">
                <form action="insertproduct" method="post" class="shadow-lg p-3" enctype="multipart/form-data">
                    @csrf
                    <h1 class="text-center">ADD PRODUCT</h1>
                    <input type="text" name="name" id="" class="form-control mt-3">
                    <input type="number" name="price" id="" class="form-control mt-3">
                    <input type="file" name="image" id="" class="form-control mt-3">
                    <select name="brand" class="form-select mt-3" id="">
                        <option value="" selected>Select Brands</option>
                        <option value="J.">J.</option>
                        <option value="STYLO">STYLO</option>
                    </select>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control mt-3"></textarea>
                    <input type="submit" value="Insert" name="insert" class="btn btn-dark mt-3 mx-auto d-block">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>