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
                <form action="{{url('update_data',$data->id)}}" method="post" enctype="multipart/form-data">
                   @csrf
                   <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$data->name}}" id="">
                   </div>
                   <div class="mb-3">
                    <label for="" class="form-label">Image</label>
                    <input type="file" name="image" value="{{$data->image}}" id="" class="form-control">
                    <img src="storage/images/{{$data->image}}" height="100px" alt="">

                   </div>
                    <legend>Skills</legend>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="c++" class="form-check-input" name="" value="c++" id="" {{in_array('c++',explode(',',$data->skill))?'checked' : ''}}>
                        <label for="" class="form-check-label">C++</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="php" class="form-check-input" name="" id="" {{in_array('php',explode(',',$data->skill))?'checked' : ''}}>
                        <label for="" class="form-check-label">Php</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox"  name="skill[]" value="python" class="form-check-input" name="" id="" {{in_array('python',explode(',',$data->skill))?'checked' : ''}}>
                        <label for="" class="form-check-label" >python</label>
                    </div>
                    <legend>Gender</legend>
                    <div class="form-check">
                        <input type="radio" name="gender"  value="female" class="form-check-input" name="" id="" {{$data->gender === 'female' ? 'checked' : ''}}>
                        <label for="" class="form-check-label" value="python">Female</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gender"  value="male" class="form-check-input" name="" id="" {{$data->gender === 'male' ? 'checked' : ''}}>
                        <label for="" class="form-check-label" value="python">Male</label>
                    </div>
                    <select class="form-check" name="country" id="">
                        <option selected>Country</option>
                        <option value="Pakistan" {{$data->country === 'Pakistan' ? 'selected' : ''}}>Pakistan</option>
                        <option value="uae" {{$data->country === 'uae' ? 'selected' : ''}}>uae</option>
                        <option value="uk" {{$data->country === 'uk' ? 'selected' : ''}}>uk</option>
                    </select> 
                    <input type="submit" value="Add">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>