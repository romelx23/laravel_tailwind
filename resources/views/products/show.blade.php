<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="">
    <!-- <h3>prodcucto</h3> -->
    <div class="bg-gradient-to-r
     from-indigo-500
      via-purple-500
       to-pink-500 
        p-5
        lg:h-screen
        md:h-full
        "
        style="background-image:url('https://pbs.twimg.com/media/FHOdYlQXwA8hE9Z?format=jpg&name=4096x4096');
        background-attachment:fixed
        "
        >
        <div className={style.Container}>
            <nav aria-label="Breadcrumb">
                <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-white">
                                Men
                            </a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-white-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-white">
                                Clothing
                            </a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-white-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li class="text-sm">
                        <a href="#" aria-current="page" class="font-medium text-yellow-50 hover:text-orange-700">
                            Basic Tee 6-Pack
                        </a>
                    </li>
                </ol>
            </nav>
            <!-- Image gallery -->
            <div class="mt-6 sm:px-6 lg:max-w-7xl lg:px-8 ">
                <h1 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl py-5 ">
                    Basic Tee 6-Pack
                </h1>
            </div>
            <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
                <div class="aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Two each of gray, white, and black shirts laying flat." class="w-full h-full object-center object-cover">
                </div>
                <div class="md:pb-8">
                    <h3 class="sr-only">Description</h3>
                    <h1 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">
                        Basic Tee 6-Pack
                    </h1>
                    <div class="space-y-6">
                        <p class="text-base text-white">The Basic Tee 6-Pack allows you to fully express your vibrant personality with three grayscale options. Feeling adventurous? Put on a heather gray tee. Want to be a trendsetter? Try our exclusive colorway: &quot;Black&quot;. Need to add an extra pop of color to your outfit? Our white tee has you covered.</p>
                        <p class="text-3xl text-white">$192</p>
                        <div class="mt-10">
                            <h3 class="text-sm font-medium text-white">Highlights</h3>

                            <div class="mt-4">
                                <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                                    <li class="text-white"><span class="text-white-600">Hand cut and sewn locally</span></li>

                                    <li class="text-white"><span class="text-white-600">Dyed with our proprietary colors</span></li>

                                    <li class="text-white"><span class="text-white-600">Pre-washed &amp; pre-shrunk</span></li>

                                    <li class="text-white"><span class="text-white-600">Ultra-soft 100% cotton</span></li>
                                </ul>
                            </div>
                        </div>
                        <button type="submit" class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add to bag</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>