<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <title>Add Category</title>
</head>
<body>
    <x-flash/>
    <div class="row">
        <div class="col-lg-3">
            <x-adminSidebar/>
        </div>
    <div class="col-lg-9">
        <h1 class="display-1 text-center" style="color: rgb(224, 46, 46)">
            ADD CATEGORY
        </h1>
        <form action="/add-category" method="POST" enctype="multipart/form-data" style="border: 1px solid red;border-radius:10px" class="col-lg-7 m-auto p-5">
            @csrf 
            <label for="">Product Category</label>
            <input class="form-control my-1" type="text" name="category_name" id="">
            @error('name')
            <p class="text-danger fw-bolder">
                {{$message}}
            </p>
            @enderror
            <input type="file" name="category_image" id="" class="form-control">

            <input class="form-control my-1" type="submit" value="Add Product" class="btn" style="background: rgb(203, 54, 54) ">
            
        </form>
    </div>

    </div>

    
</body>
</body>
</html>