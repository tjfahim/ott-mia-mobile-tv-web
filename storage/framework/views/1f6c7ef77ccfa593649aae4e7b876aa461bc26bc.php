<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(URL::asset('frontend/style.css')); ?>">
    <title>Home Page</title>

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

</head>
<body class="font-manrope text-white relative"  x-data="{loginform: false, regform: false}">
    <div class="background">


    <div class="bg-black">
        <div class="container mx-auto">
            <!-- nav section  start -->
            <nav class="flex flex-col  sm:flex-row justify-between sm:items-center p-5 gap-5 h-[90px]">
                <a href=""><img src="<?php echo e(URL::asset('upload/source/'.getcong('site_logo'))); ?>" alt="logo"></a>
                <div class="flex flex-col sm:flex-row p-1.5  sm:bg-first_black sm:rounded-full text-white font-manrope ">
                    <!-- active class css bg-second_black -->
                    <a href="" class="px-5 py-2 bg-second_black rounded-full duration-200 hover:translate-x-1">Home</a>
                    <a href="" class="px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">TV Station</a>
                    <a href="" class="px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">Live</a>
                    <a href="" class="px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">VDO</a>
                    <a href="" class="px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">Notification</a>
                    <a href="" class="px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">Account</a>
                </div>
                <div class="flex justify-between gap-3">
                    <div class="hidden sm:flex gap-1">
                        <div class="relative" x-data="{open: false}" @click.away="open = false" >
                            <button @click="open = !open" x-cloak class="p-3 bg-second_black rounded-full hover:scale-110 duration-300"><img src="<?php echo e(URL::asset('frontend/images/search-icon.svg')); ?>" alt=""></button>
                            <div
                                x-cloak
                                x-show="open"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90"
                                class="bg-second_black  rounded-md w-[300px] absolute right-0 top-0 ">
                                <form action="relative">
                                    <input class="border border-third_black bg-second_black p-2 w-full focus:boreder-none  rounded-md" type="text" placeholder="search...">
                                    <button class="absolute top-1/2 trasnform -translate-y-1/2 hover:scale-95 duration-300 right-2"><img src="<?php echo e(URL::asset('frontend/images/search-icon.svg')); ?> " alt=""></button>
                                </form>
                            </div>
                        </div>
                        <button class="p-3 bg-second_black rounded-full hover:scale-110 duration-300" x-cloak ><img src="<?php echo e(URL::asset('frontend/images/notif-icon.svg')); ?>" alt=""></button>
                    </div>
                    <div class="flex justify-center gap-3 sm:items-center">

                        <?php if(auth()->guard()->check()): ?>
                            <div class="group flex gap-3 items-center cursor-pointer px-3 py-2 rounded-full bg-first_black ">
                                <img class="size-8 group-hover:scale-110 duration-300 transform " src="<?php echo e(URL::asset('frontend/images/user.png')); ?>" alt="">
                                <div>User</div>

                                <div class="relative " x-data="{open: false}" @click.away="open = false">
                                    <button @click="open = !open" class="bg-second_black rounded-full p-2 hover:scale-110 duration-300 transform ease-in"><img class="size-4" src="<?php echo e(URL::asset('frontend/images/3dot.svg')); ?>" alt=""></button>

                                    <div
                                        x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-90"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-90"

                                        class="bg-second_black p-5 absolute -right-4 mt-4 w-[250px] rounded-md flex flex-col gap-2">
                                        <div class="size-4 bg-second_black absolute -top-2 right-5 rotate-45 rounded-sm"></div>
                                        <a href="" class="py-2 px-3 text-md hover:scale-105 duration-300 ease-out">Account</a>
                                        <a href="" class="py-2 px-3 text-md hover:scale-105 duration-300 ease-out ">Settings</a>
                                        <a href="" class="py-2 px-3 text-md hover:scale-105 duration-300 ease-out ">Contacts</a>
                                        <a href="" class="py-2 px-3 text-md hover:scale-105 duration-300 ease-out ">Favorites</a>
                                        <a href="<?php echo e(URL::to('logout')); ?>" class="py-2 px-3 text-md hover:scale-105 duration-300 ease-out text-redcolor">Logout</a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(auth()->guard()->guest()): ?>
                        <button
                                @click="loginform = !loginform"
                                class="btn-login"
                        >
                                Login
                        </button>
                        <button
                                @click="regform = !regform"
                                class="btn-register"
                        >Register</button>
                        <?php endif; ?>

                    </div>
                </div>
            </nav>
             <!-- nav section  end -->

        </div>
    </div>


    <?php echo $__env->yieldContent('content'); ?>

    <!-- footer section start -->
    <div class="bg-first_black w-full ">
        <div class="container mx-auto ">
            <footer class="">
                <div class="px-10 text-white flex flex-col sm:flex-row justify-between items-start gap-8  py-10 border-b border-grayColor-500">
                    <div>
                        <h3 class="text-xl font-medium mb-2">Home</h3>
                        <div class="flex flex-col gap-2 opacity-75">
                            <a class="" href="">Category</a>
                            <a class="" href="">Devices</a>
                            <a class="" href="">Pricing</a>
                            <a class="" href="">FAQ</a>
                        </div>
                    </div>
                    <div class="">
                         <h3 class="text-xl font-medium mb-3">Movies</h3>
                         <div class="flex flex-col gap-2 opacity-75">
                             <a class="" href="">Games</a>
                             <a class="" href="">Trending</a>
                             <a class="" href="">New Release</a>
                             <a class="" href="">Popular</a>
                         </div>
                     </div>
                     <div class="col">
                         <h3 class="text-xl font-medium mb-2">Shows</h3>
                         <div class="flex flex-col gap-2 opacity-75">
                             <a class="" href="">Games</a>
                             <a class="" href="">Trending</a>
                             <a class="" href="">New Release</a>
                             <a class="" href="">Popular</a>
                         </div>
                     </div>
                     <div class="col">
                         <h3 class="text-xl font-medium mb-2">Support</h3>
                         <div class="flex flex-col gap-2 opacity-75 ">
                             <a class="" href="">Contact Us</a>

                         </div>
                     </div>
                     <div class="col">
                         <h3 class="text-xl font-medium mb-2">Subscription</h3>
                         <div class="flex flex-col gap-2 opacity-75  ">
                             <a class="" href="">Plans</a>
                             <a class="" href="">Features</a>

                         </div>
                     </div>
                     <div class="col">
                         <h3 class="text-xl font-medium mb-2">Contact With Us</h3>
                         <div class="flex gap-2 opacity-75">
                             <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="./images/facebook-Icon.svg" alt=""></a>
                             <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="./images/x-Icon.svg" alt=""></a>
                             <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="./images/linkdin-icon.svg" alt=""></a>
                         </div>
                     </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-5 text-center justify-between py-5 text-white opacity-50">
                        <div>
                            @2023  streamvib, All Rights Reserved
                        </div>
                        <div class="px-3">
                            <a class="px-2 border-r" href="">Terms of Use</a>
                            <a class="px-2 border-r" href="">Private Policy</a>
                            <a class="" href="">Cookie Policy</a>
                        </div>
                    </div>

            </footer>
        </div>
    </div>



     <!-- login section start -->
    <div x-cloak class="popup-login bg-first_black rounded-md  p-10 absolute top-[120px] left-1/2 transform -translate-x-1/2" x-show="loginform" @click.away="loginform = false">
        <section class="p-10 w-full ">
            <div class="text-center text-white space-y-5">
                <h2 class="text-2xl font-normal ">Login form</h2>
                <p class="opacity-50 text-sm">Enter following details to login.</p>
            </div>
            <div  x-data="{
                email: '',
                password: '',
                error: ''
                url: '<?php echo e(URL::to('login')); ?>',
                csrfToken: '',
                submitForm(){

                    axios.post(this.url, {
                        email: this.email,
                        password: this.password
                    }, {
                        headers: {
                            'X-CSRF-TOKEN': this.csrfToken,
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => {
                        console.log(response)
                        this.message = 'Form submitted successfully!';
                        this.loading = false;
                    })
                    .catch(error => {
                        console.log(error)
                        this.message = 'An error occurred!';
                        this.loading = false;
                    });
                }
            }"  x-init="csrfToken = document.querySelector('meta[name=&quot;csrf-token&quot;]').getAttribute('content')">

                <form  class="flex gap-5 flex-col" method="post"
                    @submit.prevent="submitForm"
                >

                    <div class="border border-[#FFFFFF1A]  hover:border-[#ED2024] rounded-md p-3   gap-3 flex items-center justify-start" >
                        <div class=" border-r pr-3 border-[#FFFFFF1A]">
                            <img src="./images/email.svg" alt="">
                        </div>
                        <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                            <label for="" class=" text-md">Email</label>
                            <input type="email" name="email" x-model="email" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="example@gmail.com" >
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-sm text-redColor"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div>
                            <img src="./images/success.svg" alt="">
                        </div>
                    </div>

                    <div class="btn-login" >
                        <div class=" border-r pr-3 border-[#FFFFFF1A]">
                            <img src="./images/email.svg" alt="">
                        </div>
                        <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                            <label for="" class=" text-md">Password</label>
                            <input type="password" x-model="password" name="password" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="**********">
                        </div>
                        <div>
                            <img src="./images/eye-off.svg" alt="">
                        </div>
                    </div>
                    <div  class="flex gap-5 flex-col md:flex-row justify-between text-sm text-[#999999]">
                        <div>
                            <input type="checkbox" name="" value="" class="bg-red-500">
                            <label for="" class="text-sm text-[#999999]">Remember me</label>
                        </div>
                        <a href="" class="hover:underline hover:underline-offset-2">Forget Password</a>
                    </div>
                    <button type="submit" class="bg-red-500 py-3 hover:bg-red-400 px-2 rounded-full text-white font-normal ">Login</button>
                    <a href="" class="text-white text-center hover:underline hover:underline-offset-2 decoration-red-500">Registation</a>
                </form>
            </div>
            <div class="flex gap-2 opacity-70 mx-auto">
                <a class=" bg-gray-300 opacity-90 p-2 rounded-full" href="">
                    <img style="height: 24px; width: 24px;" src="./images/facebook-Icon.svg" alt="">
                </a>
                <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="./images/x-Icon.svg" alt=""></a>
                <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="./images/linkdin-icon.svg" alt=""></a>
            </div>
        </section>

        <button @click="loginform = false" class="close-popup absolute top-3 right-3 p-3 hover:scale-90 duration-300 rounded-full bg-redcolor"><img src="<?php echo e(URL::asset('frontend/images/x.svg')); ?>" alt=""></button>
    </div>
    <!-- login section end -->


    <!-- registation start  -->
    <div x-cloak class="popup-register bg-first_black rounded-md  p-10 absolute top-[120px] left-1/2 transform -translate-x-1/2" x-show="regform" @click.away="regform = false">
    <section class=" ">
        <div class="text-center text-white space-y-5">
            <h2 class="text-2xl font-normal ">Create A New Account</h2>
            <p class="opacity-50 text-sm">Enter following details to Signup.</p>
        </div>
        <form action="" class="flex gap-5 flex-col">
            <div class="border  rounded-md p-3 border-[#FFFFFF1A]    gap-3 flex items-center justify-start hover:border-[#ED2024]" >
                <div class=" border-r pr-3  border-[#FFFFFF1A]">
                    <img class="text-black" src="./images/user.svg" alt="">
                </div>
                <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                    <label for="" class=" text-md">User</label>
                    <input type="email" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="Name" >
                </div>
                <div>

                </div>
            </div>

            <div class="border  rounded-md p-3 border-[#FFFFFF1A]    gap-3 flex items-center justify-start hover:border-[#ED2024]" >
                <div class=" border-r pr-3 border-[#FFFFFF1A]">
                    <img src="./images/email.svg" alt="">
                </div>
                <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                    <label for="" class=" text-md">Email</label>
                    <input type="email" class="border-none  bg-[#141414] p-2 w-full focus:outline-none" placeholder="example@gmail.com" >
                </div>
                <div>

                </div>
            </div>

            <div class="border  rounded-md p-3 border-[#FFFFFF1A]    gap-3 flex items-center justify-start hover:border-[#ED2024]" >
                <div class=" border-r pr-3 border-[#FFFFFF1A]">
                    <img src="./images/lock-white.svg" alt="">
                </div>
                <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                    <label for="" class=" text-md">Password</label>
                    <input type="email" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="**********">
                </div>
                <div>
                    <img src="./images/eye-off.svg" alt="">
                </div>
            </div>

            <div class="border  rounded-md p-3 border-[#FFFFFF1A]    gap-3 flex items-center justify-start hover:border-[#ED2024]" >
                <div class=" border-r pr-3 border-[#FFFFFF1A]">
                    <img src="./images/lock-white.svg" alt="">
                </div>
                <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                    <label for="" class=" text-md">Confirm Password</label>
                    <input type="email" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="**********">
                </div>
                <div>
                    <img src="./images/eye-off.svg" alt="">
                </div>
            </div>
            <div  class="flex gap-5 flex-col md:flex-row justify-between text-sm text-[#999999]">
                <div>
                    <input type="checkbox" name="" value="" class="bg-red-500">
                    <label for="" class="text-sm text-[#999999]">By clicking register you agree to our <a href="" class="text-white">Terms and Conditions</a> of Use</label>
                </div>

            </div>
            <button class="bg-red-500 py-3 hover:bg-red-400 px-2 rounded-full text-white font-normal ">Singup</button>
            <a href="" class="text-white text-center hover:underline hover:underline-offset-2 decoration-red-500">Singup With</a>
        </form>
        <div class="flex gap-2 opacity-70 mx-auto">
            <a class=" bg-gray-300 opacity-90 p-2 rounded-full" href="">
                <img style="height: 24px; width: 24px;" src="./images/facebook-Icon.svg" alt="">
            </a>
            <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="./images/x-Icon.svg" alt=""></a>
            <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="./images/linkdin-icon.svg" alt=""></a>
        </div>

        <button @click="regform = false" class="close-popup absolute top-3 right-3 p-3 hover:scale-90 duration-300 rounded-full bg-redcolor"><img src="<?php echo e(URL::asset('frontend/images/x.svg')); ?>" alt=""></button>
    </section>
    </div>
    <!-- registation end  -->



</div>





    <!-- faq ask question sidebar start  -->
     <div class="hidden absolute top-0 h-screen right-0 w-1/3 bg-second_black faq-div px-10 py-20 ">
        <!-- close button  -->
        <button class="faq-close absolute top-3 left-3 p-2 hover:scale-90 duration-300 rounded-full bg-redcolor"><img src="./images/x.svg" alt=""></button>
        <div>
            <h2 class="text-2xl bold">FAQ</h2>
            <p class="text-sm opacity-50 mb-10">Answers to most frequently asked questions</p>

            <div class="flex flex-col gap-2">
                <div class="p-5 mb-3 rounded-md duration-300 transform">
                    <div class="flex justify-between items-center ">
                        <h2 class="text-bold">Why do we use Silk Road?</h2>
                        <button class="btn-q duration-300 transform"><img src="./images/faq-icon.svg" alt=""></button>
                    </div>
                    <div class="faq text-sm opacity-50 duration-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci debitis quam ipsa ducimus mollitia labore error sit sapiente. Quam, veniam.
                    </div>
                </div>

                <div class="p-5 mb-3 rounded-md duration-300 transform">
                    <div class="flex justify-between items-center ">
                        <h2 class="text-bold">Why do we use Silk Road?</h2>
                        <button class="btn-q duration-300 transform"><img src="./images/faq-icon.svg" alt=""></button>
                    </div>
                    <div class="faq text-sm opacity-50 duration-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci debitis quam ipsa ducimus mollitia labore error sit sapiente. Quam, veniam.
                    </div>
                </div>

                <div class="p-5 mb-3 rounded-md duration-300 transform">
                    <div class="flex justify-between items-center ">
                        <h2 class="text-bold">Why do we use Silk Road?</h2>
                        <button class="btn-q duration-300 transform"><img src="./images/faq-icon.svg" alt=""></button>
                    </div>
                    <div class="faq text-sm opacity-50 duration-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci debitis quam ipsa ducimus mollitia labore error sit sapiente. Quam, veniam.
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- faq ask question sidebar end  -->


    <!-- contact us section  start-->
    <div class="hidden absolute top-0 h-screen right-0 w-1/3 bg-first_black faq-div px-10 py-20 ">
        <!-- close button  -->
        <button class="faq-close absolute top-3 left-3 p-2 hover:scale-90 duration-300 rounded-full bg-redcolor"><img src="./images/x.svg" alt=""></button>
        <div class="flex flex-col h-full">
            <div>
                <h2 class="text-2xl bold">Contact Us</h2>
                <p class="text-sm opacity-50 mb-10">Contact us if your have any query or issue</p>
            </div>
            <div class="flex flex-col gap-7">
                <div class="flex gap-3">
                    <div class="p-3 bg-second_black rounded-full">
                        <img class="size-6" src="./images/mail-icon.svg" alt="">
                    </div>
                    <div>
                        <h2 class="opacity-80">Email:</h2>
                        <div class="font-semibold text-lg">info@silkroad.tv</div>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="p-3 bg-second_black rounded-full">
                        <img class="size-6" src="./images/web-icon.svg" alt="">
                    </div>
                    <div>
                        <h2 class="opacity-80">Web:</h2>
                        <div class="font-semibold text-lg">www.silkroadtv.com</div>
                    </div>
                </div>
            </div>

            <form class="flex-1 flex flex-col justify-between pt-10">
                <div class="flex flex-col gap-5">
                    <div class="flex w-full gap-3 justify-stretch items-center">
                        <div class="w-full">
                            <input type="text" name="first_name" placeholder="first name" class="w-full p-2 bg-second_black border border-third_black rounded-md">
                        </div>
                        <div class="w-full">
                            <input type="text" name="last_name" placeholder="last name" class="w-full p-2 bg-second_black border border-third_black rounded-md">
                        </div>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="email" class="w-full p-2 bg-second_black border border-third_black rounded-md">
                    </div>
                    <div>
                        <textarea name="message" id="" class="w-full p-2 bg-second_black border border-third_black rounded-md h-[250px]" placeholder="message">

                        </textarea>
                    </div>
                </div>
                <button class="bg-redcolor py-3 text-sm rounded-full text-center">Send</button>
            </form>
        </div>
     </div>
    <!-- contact us section  end-->


    <!-- feedback section start  -->
    <div class="hidden absolute top-0 h-screen right-0 w-1/3 bg-first_black faq-div px-10 py-20 ">
        <!-- close button  -->
        <button class="faq-close absolute top-3 left-3 p-2 hover:scale-90 duration-300 rounded-full bg-redcolor"><img src="./images/x.svg" alt=""></button>
        <div class="flex flex-col h-full">
            <div>
                <h2 class="text-2xl bold">Feedback</h2>
                <p class="text-sm opacity-50 mb-10">Give us your feedback, it means a lot for us</p>
            </div>

            <div class="flex flex-col items-center gap-7">
                <h2 class="text-center text-lg">Add Rating</h2>
                <div class="flex items-center justify-evenly gap-2">
                    <img src="./images/start-icon.svg" alt="">
                    <img src="./images/start-icon.svg" alt="">
                    <img src="./images/start-icon.svg" alt="">
                    <img src="./images/start-icon.svg" alt="">
                    <img src="./images/start-icon-w.svg" alt="">

                </div>
            </div>

            <form class="flex-1 flex flex-col justify-between pt-10">
                <div class="flex flex-col gap-5">
                    <div class="flex w-full gap-3 justify-stretch items-center">
                        <div class="w-full">
                            <input type="text" name="first_name" placeholder="first name" class="w-full p-2 bg-second_black border border-third_black rounded-md">
                        </div>
                        <div class="w-full">
                            <input type="text" name="last_name" placeholder="last name" class="w-full p-2 bg-second_black border border-third_black rounded-md">
                        </div>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="email" class="w-full p-2 bg-second_black border border-third_black rounded-md">
                    </div>
                    <div>
                        <textarea name="message" id="" class="w-full p-2 bg-second_black border border-third_black rounded-md h-[250px]" placeholder="message">

                        </textarea>
                    </div>
                </div>
                <button class="bg-redcolor py-3 text-sm rounded-full text-center">Submit</button>
            </form>
        </div>
     </div>
    <!-- feedback section end  -->


    <script src="<?php echo e(URL::asset('frontend/js/jquery-code.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>