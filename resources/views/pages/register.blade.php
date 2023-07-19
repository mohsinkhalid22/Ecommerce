<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <title>Register</title>
</head>
<body>
    <x-nav/>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 d-flex justify-content-center">
        <form class="d-flex flex-column justify-content-center p-2" action="/register" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" id="" value="{{ old('name') }}">
            @error('name')
                <p class="text-danger fw-bold">
                    {{ $message }}
                </p>
            @enderror
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" id="" value="{{ old('email') }}">
            @error('email')
                <p class='text-danger fw-bold'>
                    {{ $message }}
                </p>
            @enderror
            <label for="">Password</label>
            <input class="form-control" type="password"name="password" id="">
            @error('password')
                <p class="text-danger fw-bold">
                    {{ $message }}
                </p>
            @enderror
            <label for="">Profile Image</label>
            <input class="form-control" type="file" name="image" id="">
            @error('image')
                <p class="text-danger fw-bold">
                    {{ $message }}
                </p>
            @enderror    
            <input class="form-control" type="submit" value="Register" style="background: rgb(235, 93, 93)">                
        </form>
    </div>
    <div class="col-lg-6">
        <img width="100%" src="https://img.freepik.com/free-vector/summer-clothes-set_74855-446.jpg" alt="">
    </div>
</div>
</div>            
</body>
</html>