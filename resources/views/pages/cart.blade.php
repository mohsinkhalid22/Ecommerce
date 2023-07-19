<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <title>Cart</title>
</head>
<body>
    <x-nav/>
    <div class="container">
        <h1 class="display-1 text-center">
            Your Products
        </h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Item Price</th>
                <th>Item Quantity</th>
                <th>Item Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <form action="/send-mail" method="POST">
            @foreach ($cartItems as $item)
                <tr>
                    <td>
                        {{ $item->product_name }}
                        <input type="text" name="name" value="{{$item->product_name}}">
                    </td>
                    <td>
                        {{ $item->product_price }}
                        <input type="text" name="price" value="{{$item->product_price}}">
                    </td>

                    <td>
                        {{ $item->product_quantity }}
                        <input type="text" name="quantity" value="{{$item->product_quantity}}">
                    </td>
                    <td>
                        <img width="50px" src="{{asset('storage/' . $item->product_image)}}" alt="">
                        <input type="text" name="image" value="{{$item->product_image}}">
                    </td>
                    

                    <td>
                        <button class="btn btn-info">Update</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                        
                </tr>
                
            @endforeach
        </tbody>
    </table>
                <button type="submit" class="btn btn-primary d-flex ms-auto w-25 justify-content-center">
                    CheckOut
                </button>
            </form>
</body>
</html>