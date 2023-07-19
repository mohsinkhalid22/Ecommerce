<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <title>Your Item</title>
</head>
<body>
    <x-nav/>
    <h1 class="display-1 fw-bold text-center">
        Your Product
    </h1>
        
        <div class="row">
            <div class="col-lg-6">
                <img width="100%" src="{{asset('storage/'. $item->image)}}" alt="">
            </div>
            <div class="col-lg-6">
                
            <form action="/add-to-cart" method="POST">
                @csrf
                <h1>Name:{{$item->name}}</h1>
                <input type="hidden" name="product_name" value="{{ $item->name }}">
                <h4>Price:{{$item->price}}</h4>
                <input type="hidden" name="product_price" value="{{ $item->price  }}">
                <input type="hidden" name="product_image" value="{{ $item->image  }}">
                <div class="d-flex">
                    <button class="btn btn-danger">
                        -
                    </button>
                    <input name="quantity" class="quantity form-control" style="width:10%" type="hidden number">
                    <button class="btn btn-success">
                        +
                    </button>

                </div>
                <button class="btn w-100 my-2" style="background:rgb(156, 25, 25)">
                    Add to Cart
                </button>
            </form>

                
                
            </div>
        </div>
    </div>
</body>

<script>
    let decrease = document.querySelector('.btn-danger')
    let increase = document.querySelector('.btn-success')
    let quantity = document.querySelector('.quantity')

    count = 0;
    quantity.value = count;
    decrease.addEventListener('click',(e)=>{
        e.preventDefault();
        count --;
        if(count < 0){
            count = 0;
            quantity.value = count
        }
        quantity.value = count
    })
    increase.addEventListener('click',(e)=>{
        e.preventDefault();
        count ++;
        quantity.value = count
    })
        
</script>
        
            





</html>