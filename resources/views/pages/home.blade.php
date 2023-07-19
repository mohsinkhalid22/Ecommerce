<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <x-boot_icons/> 
    <title>Ecommerce App</title>
    <style>
        .sidebar{
            transform: translateX(-100%);
            transition: 0.8s;
        }
        .show{
            transform: translateX(0);
        }
    </style>
</head>
<body>
    <x-flash/>
    <x-nav/>
    <div class="sidebar" style="width:300px;position:fixed;height:100vh;top:px;z-index:222;">
        <x-adminSidebar/>                
    </div>
    
    
            <div class="col-12">
                <x-slider/> 
                <h3 class="display-5 text-center">
                    Our Products
                </h3>
                <div class="row">
                @foreach ($products as $item)
                <div class="col-lg-4">
                    <img width="100%" height="200px" src="{{asset('storage/' . $item->image)}}" alt="">
                    <h5>
                        Product Name: <span class="display-5 d-block" style="color:rgb(236, 83, 83)">
                        {{$item->name}} 
                        </span>
                    </h5>
                    <h5>
                        Product Price: <span class="display-5 d-block" style="color:rgb(236, 83, 83)">
                        {{$item->price}} 
                        </span>
                    </h5>
                    <h5>
                        Product Category: <span class="display-5 d-block" style="color:rgb(236, 83, 83)">
                        {{$item->category}} 
                        </span>
                    </h5>
                    <a href="/single-product/{{ $item->id }}" class="btn btn-info text-light text-center m-auto d-flex justify-center" style="background:rgb(234, 83, 83)">
                    Show More
                    </a>
                </div>
                    
                @endforeach   
                {{$products->links("pagination::bootstrap-5")}}
                </div>    
            </div>
        </div>

    </div>

    <x-boot_js/>   
    <script>
        let menu = document.querySelector('.menu');
        let sidebar = document.querySelector('.sidebar');
        menu.addEventListener('click',()=>{
            sidebar.classList.toggle('show')
        })
    
    </script>

</body>
</html> 

