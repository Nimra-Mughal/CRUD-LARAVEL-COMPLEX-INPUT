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
                <form action="store_data" method="post" enctype="multipart/form-data">
                   @csrf
                   <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="">
                   </div>
                   <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="file" name="image" id="" class="form-control">

                   </div>
                    <legend>Skills</legend>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="c++" class="form-check-input" name="" value="c++" id="">
                        <label for="" class="form-check-label">C++</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="php" class="form-check-input" name="" id="">
                        <label for="" class="form-check-label">Php</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox"  name="skill[]" value="python" class="form-check-input" name="" id="">
                        <label for="" class="form-check-label" >python</label>
                    </div>
                    <legend>Gender</legend>
                    <div class="form-check">
                        <input type="radio" name="gender"  value="female" class="form-check-input" name="" id="">
                        <label for="" class="form-check-label" value="python">Female</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gender"  value="male" class="form-check-input" name="" id="">
                        <label for="" class="form-check-label" value="python">Male</label>
                    </div>
                    <select class="form-check" name="country" id="">
                        <option selected>Country</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="uae">uae</option>
                        <option value="uk">uk</option>
                    </select>
                    <input type="submit" value="Add">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>