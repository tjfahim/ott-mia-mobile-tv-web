<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">



        {{-- meta data  --}}
        <meta name="author" content="">
        <meta name="description" content="">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('head_title', getcong('site_name'))</title>
        <link rel="shortcut icon" href="{{ URL::asset('upload/source/'.getcong('site_favicon')) }}">
        <meta name="description" content="@yield('head_description', getcong('site_description'))" />
        <meta name="keywords" content="@yield('head_keywords', getcong('site_keywords'))" />
        <link rel="canonical" href="@yield('head_url', url('/'))">

        <meta property="og:type" content="movie" />
        <meta property="og:title" content="@yield('head_title',  getcong('site_name'))" />
        <meta property="og:description" content="@yield('head_description', getcong('site_description'))" />
        <meta property="og:image" content="@yield('head_image', URL::asset('upload/source/'.getcong('site_logo')))" />
        <meta property="og:url" content="@yield('head_url', url('/'))" />
        <meta property="og:image:width" content="1024" />
        <meta property="og:image:height" content="1024" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image" content="@yield('head_image', URL::asset('upload/source/'.getcong('site_logo')))">
        <link rel="image_src" href="@yield('head_image', URL::asset('upload/source/'.getcong('site_logo')))">
        <link rel="image_src" href="@yield('head_image', URL::asset('upload/source/'.getcong('site_logo')))">



        <!-- Video JS -->
        <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />
        <script defer src="https://vjs.zencdn.net/8.16.1/video.min.js"></script>

        <!-- Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>

        <!-- Axios -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

        <!-- toastify-js -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

        <!-- Slick Carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

        <!-- Custom Styles -->
        <link rel="stylesheet" href="{{ URL::asset('frontend/style.css') }}">



        <style>
            [x-cloak] {
                display: none;
            }
        </style>
    </head>

<body class="font-manrope text-white relative"  x-data="{loginform: false, regform: false, contactForm: false, feedback: false}">


    <div class="bg-black">
        <div class="container mx-auto">
            <!-- nav section  start -->
            @include('client_site.components.navbar')
             <!-- nav section  end -->

        </div>
    </div>

    <div class="bg-black pb-20 z-0">
        <div class="container mx-auto">

            @yield('content')

        </div>
    </div>

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
                             <Button type="button" class="" @click="contactForm = true" >Contact Us</Button>
                             <Button type="button" @click="feedback = true" >Feedback</Button>

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

                            <a class=" bg-second_black border border-third_black p-3 rounded hover:scale-90 duration-200" href="{{ getcong('footer_fb_link') }}"><img class="size-5" src="{{ URL::asset('frontend/images/facebook-Icon.svg') }}" alt=""></a>
                            <a class=" bg-second_black border border-third_black p-3 rounded hover:scale-90 duration-200" href="{{ getcong('footer_twitter_link') }}"><img class="size-5" src="{{ URL::asset('frontend/images/x-Icon.svg') }}" alt=""></a>
                            <a class=" bg-second_black border border-third_black p-3 rounded hover:scale-90 duration-200" href="{{ getcong('footer_linkdin_link') }}"><img class="size-5" src="{{ URL::asset('frontend/images/linkdin-icon.svg') }}" alt=""></a>
                        </div>
                    </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-5 text-center justify-between py-5 text-white opacity-50">
                        <div>
                            {{  getcong('site_copyright') }}
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
    <div x-cloak class="popup-login bg-first_black rounded-md  p-10 absolute top-[120px] left-1/2 transform -translate-x-1/2" x-show="loginform"
        @click.away="loginform = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        >
        <section class="p-10 w-full ">
            <div class="text-center text-white space-y-5">
                <h2 class="text-2xl font-normal ">Login form</h2>
                <p class="opacity-50 text-sm">Enter following details to login.</p>
            </div>
            <div x-data="{
                email: '',
                password: '',
                error_find: false,
                error: '',
                url: '{{ URL::to('login') }}',
                csrfToken: '',
                submitForm() {
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
                        if(response.data.status == 401){
                            this.error = response.data.errors.email;
                            this.error_find = true;
                        }
                        if(response.data.status == 200){
                            location.reload()
                        }

                    })
                    .catch(error => {
                        console.log(error)
                        this.message = 'An error occurred!';
                        this.loading = false;
                    });
                }
            }"
            x-init="csrfToken = document.querySelector('meta[name=&quot;csrf-token&quot;]').getAttribute('content')">
                <form  class="flex gap-5 flex-col" method="post"
                    x-on:submit.prevent="submitForm"
                >


                    <div class="border border-[#FFFFFF1A]  hover:border-[#ED2024] rounded-md p-3   gap-3 flex items-center justify-start" >
                        <div class=" border-r pr-3 border-[#FFFFFF1A]">
                            <img src="./images/email.svg" alt="">
                        </div>
                        <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                            <label for="" class=" text-md">Email</label>
                            <input type="email" name="email" x-model="email" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="example@gmail.com" >

                                <small x-show="error_find" class="text-sm text-redColor" x-text="error"></small>

                        </div>
                        <div>
                            <img src="./images/success.svg" alt="">
                        </div>
                    </div>

                    <div class="border border-[#FFFFFF1A]  hover:border-[#ED2024] rounded-md p-3   gap-3 flex items-center justify-start" >
                        <div class=" border-r pr-3 border-[#FFFFFF1A]">
                            <img src="./images/email.svg" alt="">
                        </div>
                        <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                            <label for="" class=" text-md">Password</label>
                            <input type="password" name="email" x-model="password" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="example@gmail.com" >

                                <small x-show="error_find" class="text-sm text-redColor" x-text="error"></small>

                        </div>
                        <div>
                            <img src="./images/success.svg" alt="">
                        </div>
                    </div>

                    {{-- <div class="btn-login" >
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
                    </div> --}}
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

        <button @click="loginform = false" class="close-popup absolute top-3 right-3 p-3 hover:scale-90 duration-300 rounded-full bg-redcolor"><img src="{{ URL::asset('frontend/images/x.svg') }}" alt=""></button>
    </div>
    <!-- login section end -->


    <!-- registation start  -->
 <!-- registation start  -->
    <div x-data="{
        regform: false,  // Controls the popup visibility
        name: '',
        last_name: '',
        email: '',
        password: '',
        password_confirmation: '',
        errors: {},
        successMessage: '',
        loading: false,
        csrfToken: '',

        showModal: false,
        submitForm() {
            this.loading = true;
            axios.post('{{ URL::to('signup') }}', {
                name: this.name,
                last_name: this.last_name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation
            }, {
                headers: {
                    'X-CSRF-TOKEN': this.csrfToken,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            .then(response => {

                if (response.data.status === 200) {
                    location.reload()
                    this.successMessage = 'Registration successful! You can now login.';
                    this.errors = {};
                    this.regform = false;  // Close the modal on success
                    this.loading = false;
                }
            })
            .catch(error => {
                if (error.response && error.response.data.errors) {
                    this.errors = error.response.data.errors;
                    this.showModal = true;  // Open the error modal on error
                }
                this.loading = false;
            });
        },
        closeModal() {
            this.showModal = false;  // Close the error modal manually
        }
        }"  x-init="csrfToken = document.querySelector('meta[name=&quot;csrf-token&quot;]').getAttribute('content')" x-cloak>

        <!-- Registration Form Popup -->
        <div x-show="regform" @click.away="regform = false" class="popup-register bg-first_black rounded-md p-10 absolute top-[120px] left-1/2 transform -translate-x-1/2" >
            <section class="">
                <div class="text-center text-white space-y-5">
                    <h2 class="text-2xl font-normal">Create A New Account</h2>
                    <p class="opacity-50 text-sm">Enter following details to Signup.</p>
                </div>

                <!-- Registration Form -->
                <form @submit.prevent="submitForm" class="flex gap-5 flex-col">
                    <!-- First Name -->
                    <div class="flex gap-4">
                        <div class="border rounded-md p-3 border-[#FFFFFF1A] gap-3 flex items-center justify-start hover:border-[#ED2024]">
                            <div class="border-r pr-3 border-[#FFFFFF1A]">
                                <img class="text-black" src="./images/user.svg" alt="">
                            </div>
                            <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                                <label for="name" class="text-md">First Name</label>
                                <input type="text" x-model="name" name="name" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="First Name">
                                <span x-show="errors.name" class="text-red-500 text-sm" x-text="errors.name[0]"></span>
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="border rounded-md p-3 border-[#FFFFFF1A] gap-3 flex items-center justify-start hover:border-[#ED2024]">
                            <div class="border-r pr-3 border-[#FFFFFF1A]">
                                <img class="text-black" src="./images/user.svg" alt="">
                            </div>
                            <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                                <label for="last_name" class="text-md">Last Name</label>
                                <input type="text" x-model="last_name" name="last_name" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="Last Name">
                                <span x-show="errors.last_name" class="text-red-500 text-sm" x-text="errors.last_name[0]"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="border rounded-md p-3 border-[#FFFFFF1A] gap-3 flex items-center justify-start hover:border-[#ED2024]">
                        <div class="border-r pr-3 border-[#FFFFFF1A]">
                            <img src="./images/email.svg" alt="">
                        </div>
                        <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                            <label for="email" class="text-md">Email</label>
                            <input type="email" x-model="email" name="email" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="example@gmail.com">
                            <span x-show="errors.email" class="text-red-500 text-sm" x-text="errors.email[0]"></span>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="border rounded-md p-3 border-[#FFFFFF1A] gap-3 flex items-center justify-start hover:border-[#ED2024]">
                        <div class="border-r pr-3 border-[#FFFFFF1A]">
                            <img src="./images/lock-white.svg" alt="">
                        </div>
                        <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                            <label for="password" class="text-md">Password</label>
                            <input type="password" x-model="password" name="password" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="**********">
                            <span x-show="errors.password" class="text-red-500 text-sm" x-text="errors.password[0]"></span>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="border rounded-md p-3 border-[#FFFFFF1A] gap-3 flex items-center justify-start hover:border-[#ED2024]">
                        <div class="border-r pr-3 border-[#FFFFFF1A]">
                            <img src="./images/lock-white.svg" alt="">
                        </div>
                        <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                            <label for="password_confirmation" class="text-md">Confirm Password</label>
                            <input type="password" x-model="password_confirmation" name="password_confirmation" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="**********">
                            <span x-show="errors.password_confirmation" class="text-red-500 text-sm" x-text="errors.password_confirmation[0]"></span>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex gap-5 flex-col md:flex-row justify-between text-sm text-[#999999]">
                        <div>
                            <input type="checkbox" name="terms" value="" class="bg-red-500">
                            <label for="terms" class="text-sm text-[#999999]">By clicking register you agree to our <a href="#" class="text-white">Terms and Conditions</a></label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="bg-red-500 py-3 hover:bg-red-400 px-2 rounded-full text-white font-normal" :disabled="loading">
                        Register
                    </button>
                </form>


            </section>

            <!-- Close Button -->
            <button @click="regform = false" class="close-popup absolute top-3 right-3 p-3 hover:scale-90 duration-300 rounded-full bg-redcolor">
                <img src="{{ URL::asset('frontend/images/x.svg') }}" alt="">
            </button>
        </div>

    </div>

<!-- registation end  -->

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
           <div
                x-cloak
                x-show="contactForm"
                x-transition:enter="transform transition ease-out duration-300"
                x-transition:enter-start="-translate-x-full opacity-0"
                x-transition:enter-end="translate-x-0 opacity-100"
                x-transition:leave="transform transition ease-in duration-300"
                x-transition:leave-start="translate-x-0 opacity-100"
                x-transition:leave-end="translate-x-full opacity-0"
                @click.outside="contactForm = false"
                class=" fixed top-0 h-screen right-0 w-1/3 bg-first_black faq-div px-10 py-20 "
            >

                    <!-- close button  -->
                    <button @click="contactForm = false" class=" absolute top-3 left-3 p-2 hover:scale-90 duration-300 rounded-full bg-redcolor"><img src="{{ URL::asset('frontend/images/x.svg') }}" alt=""></button>


                <div class="flex flex-col h-full">
                    <div>
                        <h2 class="text-2xl bold">Contact Us</h2>
                        <p class="text-sm opacity-50 mb-10">Contact us if your have any query or issue</p>
                    </div>
                    <div class="flex flex-col gap-7">
                        <div class="flex gap-3">
                            <div class="p-3 bg-second_black rounded-full">
                                <img class="size-6" src="{{ URL::asset('frontend/images/mail-icon.svg') }}"  alt="">
                            </div>
                            <div>
                                <h2 class="opacity-80">Email:</h2>
                                <div class="font-semibold text-lg">info@silkroad.tv</div>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="p-3 bg-second_black rounded-full">
                                <img class="size-6" src="{{ URL::asset('frontend/images/web-icon.svg') }}" alt="">
                            </div>
                            <div>
                                <h2 class="opacity-80">Web:</h2>
                                <div class="font-semibold text-lg">www.silkroadtv.com</div>
                            </div>
                        </div>
                    </div>
                    <div x-data="{
                            contactForm: false,
                            form: {
                                first_name: '',
                                last_name: '',
                                email: '',
                                message: '',
                            },
                            errors: {},
                            successMessage: '',

                            // Method to toggle the modal visibility
                            openModal() {
                                this.contactForm = true;
                            },

                            async submit() {
                                // Reset previous success/error messages
                                this.successMessage = '';
                                this.errors = {};

                                try {
                                    // Send the form data to the server
                                    const response = await axios.post('{{ URL::to('contact') }}', this.form, {
                                        headers: {
                                            'X-CSRF-TOKEN': this.csrfToken,
                                            'Content-Type': 'application/json',
                                            'Accept': 'application/json',
                                        },
                                    });

                                    // If submission is successful
                                    if (response.data.status === 200) {
                                        // Show success message
                                        this.successMessage = 'Message sent successfully!';

                                        // Reset the form
                                        this.form.first_name = '';
                                        this.form.last_name = '';
                                        this.form.email = '';
                                        this.form.message = '';

                                        // Optionally close the modal here
                                        $root.contactForm = false;
                                    }

                                } catch (error) {
                                    // Handle any errors (validation or others)
                                    if (error.response && error.response.data.errors) {
                                        this.errors = error.response.data.errors;
                                    } else {
                                        this.errors = { message: ['An unexpected error occurred.'] };
                                    }
                                }
                            }
                            }">


                <!-- Contact Form -->
                        <form @submit.prevent="submit" class="flex-1 flex flex-col justify-between pt-10">
                            <div class="flex flex-col gap-5">
                                <div class="flex w-full gap-3 justify-stretch items-center">
                                    <div class="w-full">
                                        <input type="text" required x-model="form.first_name" name="first_name" placeholder="First name" class="w-full p-2 bg-second_black border border-third_black rounded-md focus:outline-none focus:ring-0">
                                    </div>
                                    <div class="w-full">
                                        <input type="text" required x-model="form.last_name" name="last_name" placeholder="Last name" class="w-full p-2 bg-second_black border border-third_black rounded-md focus:outline-none focus:ring-0">
                                    </div>
                                </div>
                                <div>
                                    <input type="email" required x-model="form.email" name="email" placeholder="Email" class="w-full p-2 bg-second_black border border-third_black rounded-md focus:outline-none focus:ring-0">
                                </div>
                                <div>
                                    <textarea name="message" required x-model="form.message" class="w-full p-2 bg-second_black border border-third_black rounded-md h-[150px] focus:outline-none focus:ring-0" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <button class="mt-5 bg-redcolor py-3 text-sm rounded-full text-center">Send</button>

                            <!-- Success Message -->
                            <div x-show="successMessage" class="mt-5 text-green-500 text-center">
                                <p x-text="successMessage"></p>
                            </div>

                            <!-- Error Messages -->
                            <div x-show="Object.keys(errors).length > 0" class="mt-5 text-red-500 text-center">
                                <ul>
                                    <template x-for="(error, key) in errors" :key="key">
                                        <li x-text="error[0]"></li>
                                    </template>
                                </ul>
                            </div>
                        </form>
                </div>
            </div>
            </div>
       <!-- contact us section  end-->


    <!-- feedback section start  -->
    <div x-cloak x-show="feedback" @click.outside="feedback=false" class="fixed top-0 h-screen right-0 w-1/3 bg-first_black faq-div px-10 py-20 "
            x-data="{
                form : {
                    rating: 0,
                    first_name: '',
                    last_name: '',
                    email: '',
                    message: '',
                },

                ratingS(e){
                    console.log(e.target)
                    let id = e.target.id
                    this.form.rating = id.replace('r_', '')
                    console.log(this.form.rating)
                },

                successMessage: '',
                errors: {},

                async submitFeedback(){

                    this.successMessage = '';
                    this.errors = {};

                    try {
                        // Send the form data to the server
                        const response = await axios.post('{{ URL::to('feedback') }}', this.form, {
                            headers: {
                                'X-CSRF-TOKEN': this.csrfToken,
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                            },
                        });

                        // If submission is successful
                        if (response.data.status === 200) {


                            this.successMessage = response.data.message;


                            this.form.first_name = '';
                            this.form.last_name = '';
                            this.form.email = '';
                            this.form.message = '';

                            // Optionally close the modal here
                            $root.contactForm = false;
                        }
                        if(response.data.status === 400){
                            this.errors = response.data.errors
                        }

                    } catch (error) {
                        // Handle any errors (validation or others)
                        if (error.response && error.response.data.errors) {
                            this.errors = error.response.data.errors;
                        } else {
                            this.errors = { message: ['An unexpected error occurred.'] };
                        }
                    }
                },
            }"
    >
        <!-- close button  -->
        <button @click="feedback=false" class="absolute top-3 left-3 p-2 hover:scale-90 duration-300 rounded-full bg-redcolor"><img src="{{ URL::asset('frontend/images/x.svg') }}" alt=""></button>
        <div class="flex flex-col h-full">
            <div>
                <h2 class="text-2xl bold">Feedback</h2>
                <p class="text-sm opacity-50 mb-10">Give us your feedback, it means a lot for us</p>
            </div>

            <div class="flex flex-col items-center gap-7">
                <h2 class="text-center text-lg">Add Rating</h2>
                <div class="flex items-center justify-evenly gap-2">

                    <div x-data="{ numbers: Array.from({ length: 5 }, (_, i) => i), rating: 0 }" class="flex items-center justify-evenly gap-2">
                        <template x-for="(number, index) in numbers" :key="number">



                                <img
                                    @click="ratingS"
                                    :id="'r_' + index"

                                    src="{{ URL::asset('frontend/images/start-icon.svg') }}"
                                    alt=""
                                    :class="{ 'bg-yellow-500': rating >= number }"
                                >

                        </template>
                    </div>


                    {{-- <img  @click="rating" id="r_2" src="{{ URL::asset('frontend/images/start-icon.svg') }}" alt="">
                    <img  @click="rating" id="r_3" src="{{ URL::asset('frontend/images/start-icon.svg') }}" alt="">
                    <img  @click="rating" id="r_4" src="{{ URL::asset('frontend/images/start-icon.svg') }}" alt="">
                    <img  @click="rating" id="r_5" src="{{ URL::asset('frontend/images/start-icon-w.svg') }}" alt=""> --}}
                </div>
            </div>

            <form class="flex-1 flex flex-col justify-between pt-10" @submit.prevent="submitFeedback">
                <div class="flex flex-col gap-5">
                    <div class="flex w-full gap-3 justify-stretch items-center">
                        <div class="w-full">
                            <input type="text" x-model="form.first_name" name="first_name" placeholder="first name" class="w-full p-2 bg-second_black border border-third_black rounded-md">
                        </div>
                        <div class="w-full">
                            <input type="text" x-model="form.last_name" name="last_name" placeholder="last name" class="w-full p-2 bg-second_black border border-third_black rounded-md">
                        </div>
                    </div>
                    <div>
                        <input type="email" x-model="form.email" name="email" placeholder="email" class="w-full p-2 bg-second_black border border-third_black rounded-md">
                    </div>
                    <div>
                        <textarea name="message" id="" x-model="form.message" class="w-full p-2 bg-second_black border border-third_black rounded-md h-[250px]" placeholder="message">

                        </textarea>
                    </div>
                </div>


                <div x-show="successMessage" class="mt-5 text-green-500 text-center">
                    <p x-text="successMessage"></p>
                </div>

                <div x-show="Object.keys(errors).length > 0" class="mt-5 text-red-500 text-center">
                    <ul>
                        <template x-for="(error, key) in errors" :key="key">
                            <li x-text="error[0]"></li>
                        </template>
                    </ul>
                </div>
                <button class="bg-redcolor py-3 text-sm rounded-full text-center">Submit</button>
            </form>
        </div>
     </div>
    <!-- feedback section end  -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


    <script src="{{ URL::asset('frontend/js/alpineJs.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/jquery-code.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/video.js') }}"></script>
</body>
</html>
