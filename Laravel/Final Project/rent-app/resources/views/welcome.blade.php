@extends('layouts.main')
@section('content')

               
<section id='section1'>
    <div class="container mx-auto px-4 py-8 sm:py-12"> 
        <header class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 items-center">
        <div class="text-center sm:text-left">
            <h1 class="text-3xl sm:text-5xl font-bold mb-4 sm:mb-6 leading-tight text-gray-800 font-myfont">
            Unlock Your <span class="text-blue-500">Drive</span>. Choose from the Best.
            </h1>
            <p class="text-lg sm:text-xl text-gray-700 leading-relaxed mb-6 sm:mb-8 font-textfont">GoCarNow is your go-to destination for hassle-free car rentals and vehicle listings. Whether you're a car owner looking to list your car or a renter in search of the perfect ride, GoCarNow offers a seamless and convenient experience.</p>
            <a href="{{ url('/post') }}" class="inline-block px-6 py-3 text-lg sm:text-xl font-medium text-white bg-blue-500 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-green-500">
                Browse Your Car Today
            <svg class="ml-2 w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a3 3 0 01-4-4V3H17a3 3 0 014 4v9a3 3 0 01-4 4H7z"></path></svg>
            </a>
        </div>
        <div class="text-center sm:text-right">
            <img src="https://images.pexels.com/photos/13815219/pexels-photo-13815219.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Leafs" class="w-full h-auto rounded-lg shadow-md">
        </div>
        </header>
    </div>
</section>



<section id="section2">
    <div class="container mx-auto max-w-5xl flex gap-12 flex-wrap items-start justify-center md:justify-between mt-40">
        <div class="grid gap-4 justify-items-center text-center md:flex-1">
            <div class=" rounded-full border-8 border-amber-400 p-4 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-14 h-14">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z">
                    </path>
                </svg>
            </div>
            <h3 class="text-3xl font-bold">Safe</h3>
            <p>Our vehicles are secure and equipped with comprehensive safety features to ensure a safe and comfortable journey for our customers.</p>
        </div>
        <div class="grid gap-4 justify-items-center text-center md:flex-1">
            <div class=" rounded-full border-8 border-amber-400 p-4 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-14 h-14">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                </svg>
            </div>
            <h3 class="text-3xl font-bold">Efficient</h3>
            <p>Optimize your travel plans with our flexible rental durations and efficient fleet management</p>
        </div>
        <div class="grid gap-4 justify-items-center text-center md:flex-1">
            <div class=" rounded-full border-8 border-amber-400 p-4 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-14 h-14">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z">
                    </path>
                </svg>

            </div>
            <h3 class="text-3xl font-bold">Proven</h3>
            <p>Join the ranks of our satisfied customers who have experienced the proven value of our services."</p>
        </div>
    </div>
</section>



<section id="section3">
  <!--Image Card-->
  <div class="px-16 py-16">
    <h2 class="text-3xl sm:text-4xl leading-normal font-bold tracking-tight text-gray-900 text-center mt-40">
      Our<span class="text-indigo-600 "> Community</span>
    </h2>
    <div class="grid grid-cols-3 gap-4 justify-items-center text-center bg-cover mt-10 ">
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 duration-200 hover:-translate-x-4">
        <a href="#" >
            <img class="rounded-t-lg h-64" src="https://media.istockphoto.com/id/1344954981/photo/family-with-dog-in-the-car.jpg?s=612x612&w=0&k=20&c=LGMOaAbRYI6JyuhxcVxlAtjh4m64uHM_JotGgIQD3kg=" alt="customer" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">GoCarNow Rentals Commiunity </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"Here are the biggest dynamic rental community for quick access to quality vehicles, hassle-free bookings, and friendly service. Discover a diverse range of cars tailored to your needs and budget. Experience seamless rentals and explore the road with confidence. Join us today for a smoother ride tomorrow!".</p>
            <a href="/register" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Register
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>

      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 duration-200 hover:scale-110">
        <a href="#">
            <img class="rounded-t-lg" src="https://media.istockphoto.com/id/1303145841/photo/attractive-male-driver-using-the-gps-navigation-map-on-the-car.jpg?s=1024x1024&w=is&k=20&c=3sLousyxvRfK2ZPYO1nwpo7iPtkL_XPy3X1pjEW63bk=" alt="driver" />
        </a>
        <div class="p-5">
            <a href="">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">GoCarNow Driving Commiunity</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"Welcome to DriveWise! Join our thriving driving community for a journey filled with camaraderie, safety, and shared experiences. Connect with fellow drivers, share insights, and embark on memorable road trips. Discover resources for skill improvement and enjoy the open road with confidence. Join us and drive smarter together!".</p>
            <a href="/register" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Register
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>

      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 duration-200 hover:translate-x-4">
        <a href="#">
            <img class="rounded-t-lg h-64 w-full" src="https://images.pexels.com/photos/4321011/pexels-photo-4321011.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">GoCarNow VehicleOwner Commiunity</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"Welcome to WheelOwners! Join our vibrant community of vehicle owners for valuable insights, support, and resources. Connect with like-minded individuals, share maintenance tips, and explore opportunities for rental income. Whether you're a seasoned owner or new to the scene, discover a supportive network to maximize your ownership experience. Join us today!".</p>
            <a href="/register" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Register
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>
    </div>
  </div>
  
</section>




<!--About Us Section-->

<section id="section4"class="px-10 py-10">
<div id="about" class="relative bg-white overflow-hidden mt-16">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100"></polygon>
            </svg>

            <div class="pt-1"></div>

            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                  <h2 class="text-3xl sm:text-4xl leading-normal font-bold tracking-tight text-gray-900 ">
                    About<span class="text-indigo-600 "> Us</span>
                  </h2>

                    <p>
                    At GoCarNow, we understand the challenges and frustrations often associated with renting a vehicle. 
                    That's why we've built a user-friendly platform that empowers both owners and renters to connect and transact with confidence.
                    Whether you're a seasoned traveler seeking reliable transportation or a vehicle owner looking to earn extra income, 
                    GoCarNow provides the tools and support you need to achieve your goals.Join us as we redefine the car rental experience. Together, we can unlock new possibilities, create memorable journeys, 
                    and foster a community built on trust and mutual respect. Thank you for choosing GoCarNow as your trusted partner in mobility solutions. Let's hit the road and make every mile count!
                    </p>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover object-top sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://media.istockphoto.com/id/1450095848/photo/closeup-of-car-sale-and-buyer-shaking-hands-car-salesman-gives-keys-to-buyer-close-up-of-car.jpg?s=2048x2048&w=is&k=20&c=6OlTa222XLRV-s7mdlsddUOJUOpBsIUuuO-YzormwXU=" alt="">
    </div>
</div>
</section> 
       

@endsection
