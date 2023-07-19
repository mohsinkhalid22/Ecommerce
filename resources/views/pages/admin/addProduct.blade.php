<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <x-boot_icons/>
    <title>Add Product</title>
</head>
<body>
    <x-flash/>
    <div class="row">
        <div class="col-lg-3">
            <x-adminSidebar/>
        </div>
    <div class="col-lg-9">
        <h1 class="display-1 text-center" style="color: rgb(224, 46, 46)">
            Add Product
        </h1>
        <form action="/add-product" method="POST" enctype="multipart/form-data" style="border: 1px solid red;border-radius:10px" class="col-lg-7 m-auto p-5">
            @csrf 
            <label for="">Product Name</label>
            <input class="form-control my-1" type="text" name="name" id="">
            @error('name')
            <p class="text-danger fw-bolder">
                {{$message}}
            </p>
            @enderror
                
            <label for="">Product Price</label>
            <input class="form-control my-1" type="number" name="price" id="">
            @error('price')
            <p class="text-danger fw-bolder">
                {{$message}}
            </p>
            @enderror

            <label for="">Product Category</label>
            <select class="form-control my-1" name="category" id="">
                @foreach ($categories as $item)
                    <option value="{{$item->category_name}}">
                        {{ $item->category_name }}
                    </option>
                    
                @endforeach
            </select>
            @error('category')
            <p class="text-danger fw-bolder">
                {{$message}}
            </p>
            @enderror

            <input class="form-control my-1" type="file" name="image" id="">
            @error('image')
            <p class="text-danger fw-bolder">
                {{$message}}
            </p>
            @enderror

            <input class="form-control my-1" type="submit" value="Add Product" class="btn" style="background: rgb(203, 54, 54) ">
            
        </form>
    </div>

    </div>

    <x-boot_js/>
</body>
</html>