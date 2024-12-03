<?php $__env->startSection('content'); ?>

<!-- account section start  -->
<section class="py-[50px] flex flex-col sm:flex-row justify-between gap-5 items-start p-5">

    <?php echo $__env->make('frontend.user.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="bg-first_black rounded-md p-10  flex-1">
        <h2 class="text-2xl font-semibold text-white mb-3">Preferences</h2>
        <h3 class="text-white opacity-50 mb-10">Manage your account Preferences</h3>

        <div>
            <!-- about -->
             <div>
                <h2 class="text-white text-lg font-semibold mb-3">About:</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2  gap-10">
                    <div class="w-full  p-3 rounded-lg flex justify-between items-center bg-second_black">
                        <div class="flex gap-4">
                            <img class="size-10" src="./images/update-icon.svg" alt="">
                            <div class="text-white text-sm">
                                <div class="opacity-70">Update:</div>
                                <div>Update on 4 Oct, 2024</div>
                            </div>
                        </div>
                        <a href="" class="bg-redcolor py-2 px-3 rounded-full text-sm text-white">Check for update</a>
                    </div>
                    <div class="w-full  p-3 rounded-lg flex justify-between items-center bg-second_black">
                        <div class="flex gap-4">
                            <img class="size-10" src="./images/version-icon.svg" alt="">
                            <div class="text-white text-sm">
                                <div class="opacity-70">Version:</div>
                                <div>v34.3234</div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full  p-3 rounded-lg flex justify-between items-center bg-second_black">
                        <div class="flex gap-4">
                            <img class="size-10" src="./images/ip-address-icon.svg" alt="">
                            <div class="text-white text-sm">
                                <div class="opacity-70">IP Address:</div>
                                <div>192.32.4335</div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full  p-3 rounded-lg flex justify-between items-center bg-second_black">
                        <div class="flex gap-4">
                            <img class="size-10" src="./images/multi-device-icon.svg" alt="">
                            <div class="text-white text-sm">
                                <div class="opacity-70">Device:</div>
                                <div>Mac Book Pro</div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>

        <div class="py-10">
            <!-- Language -->
             <div>
                <h2 class="text-white text-lg font-semibold mb-3">Language:</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2  gap-10">
                    <div class="w-full  p-3 rounded-lg flex justify-between items-center bg-second_black">
                        <div class="flex gap-4">
                            <img class="size-10" src="./images/web-icon.svg" alt="">
                            <div class="text-white text-sm">
                                <div class="opacity-70">Display Language:</div>
                                <div>English</div>
                            </div>
                        </div>
                        <button><img class="size-4" src="./images/right-triangle.svg" alt=""></button>
                    </div>
                    <div class="w-full  p-3 rounded-lg flex justify-between items-center bg-second_black">
                        <div class="flex gap-4">
                            <img class="size-10" src="./images/web-icon.svg" alt="">
                            <div class="text-white text-sm">
                                <div class="opacity-70">Audio and Subtitle:</div>
                                <div>English</div>
                            </div>
                        </div>
                        <button><img class="size-4" src="./images/right-triangle.svg" alt=""></button>
                    </div>


                </div>
             </div>
        </div>

        <!-- play back setting  -->
        <div class="py-10">

             <div>
                <h2 class="text-white text-lg font-semibold mb-3 ">Playback Settings:</h2>
                <div class="flex gap-10">

                    <div class="p-7 bg-second_black rounded-lg w-full">
                        <div class="flex flex-col gap-3">
                            <div class="text-white opacity-50 text-base mb-2">Auto play Controls</div>
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" id="custom-checkbox" class="hidden peer" />
                                <label
                                    for="custom-checkbox"
                                    class="w-6 h-6 border-2 border-redcolor rounded flex items-center justify-center cursor-pointer peer-checked:bg-redcolor peer-checked:border-transparent"
                                >
                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M5 13l4 4L19 7"
                                    />
                                    </svg>
                                </label>
                                <span class="text-sm text-white">Auto play next episode in series on all device.</span>
                            </div>
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" id="custom-checkbox" class="hidden peer" />
                                <label
                                    for="custom-checkbox"
                                    class="w-6 h-6 border-2 border-redcolor rounded flex items-center justify-center cursor-pointer peer-checked:bg-redcolor peer-checked:border-transparent"
                                >
                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M5 13l4 4L19 7"
                                    />
                                    </svg>
                                </label>
                                <span class="text-sm text-white">Auto play preview while browsing on all device.</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-7 bg-second_black rounded-lg w-full">
                        <div class="flex flex-col gap-3">
                            <div class="text-white opacity-50 text-base mb-2">Data use per screen:</div>
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center">
                                    <input
                                      type="radio"
                                      id="radio-option-1"
                                      name="custom-radio"
                                      class="hidden peer"
                                    />
                                    <label
                                      for="radio-option-1"
                                      class="w-6 h-6 rounded-full border-2 border-redcolor flex items-center justify-center cursor-pointer peer-checked:bg-redcolor peer-checked:border-transparent"
                                    >
                                      <div class="w-3 h-3 rounded-full bg-white"></div>
                                    </label>
                                    <div class="ml-3">
                                        <div class="text-white text-sm">Auto</div>
                                        <div class="text-sm text-white opacity-90">Default video and audio, and data usage.</div>
                                    </div>

                                  </div>

                                  <div class="flex items-center">
                                    <input
                                      type="radio"
                                      id="radio-option-1"
                                      name="custom-radio"
                                      class="hidden peer"
                                    />
                                    <label
                                      for="radio-option-1"
                                      class="w-6 h-6 rounded-full border-2 border-redcolor flex items-center justify-center cursor-pointer peer-checked:bg-redcolor peer-checked:border-transparent"
                                    >
                                      <div class="w-3 h-3 rounded-full bg-white"></div>
                                    </label>
                                    <div class="ml-3">
                                        <div class="text-white text-sm">Low</div>
                                        <div class="text-sm text-white opacity-90">Basic video and audio quality, up to 0.3 GB per hour.</div>
                                    </div>

                                  </div>

                                  <div class="flex items-center">
                                    <input
                                      type="radio"
                                      id="radio-option-1"
                                      name="custom-radio"
                                      class="hidden peer"
                                    />
                                    <label
                                      for="radio-option-1"
                                      class="w-6 h-6 rounded-full border-2 border-redcolor flex items-center justify-center cursor-pointer peer-checked:bg-redcolor peer-checked:border-transparent"
                                    >
                                      <div class="w-3 h-3 rounded-full bg-white"></div>
                                    </label>
                                    <div class="ml-3">
                                        <div class="text-white text-sm">Medium</div>
                                        <div class="text-sm text-white opacity-90">Standard video and audio quality, up to 0.7 GB per hour.</div>
                                    </div>

                                  </div>

                                  <div class="flex items-center">
                                    <input
                                      type="radio"
                                      id="radio-option-1"
                                      name="custom-radio"
                                      class="hidden peer"
                                    />
                                    <label
                                      for="radio-option-1"
                                      class="w-6 h-6 rounded-full border-2 border-redcolor flex items-center justify-center cursor-pointer peer-checked:bg-redcolor peer-checked:border-transparent"
                                    >
                                      <div class="w-3 h-3 rounded-full bg-white"></div>
                                    </label>
                                    <div class="ml-3">
                                        <div class="text-white text-sm">High</div>
                                        <div class="text-sm text-white opacity-90">Best video and audio quality. up to 3GB per hour for HD, 7 GB per hour for Ultra HD.</div>
                                    </div>

                                  </div>

                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>


        <!-- notification  -->
        <div class="py-10">

            <div>
               <h2 class="text-white text-lg font-semibold mb-3 ">Notification:</h2>
               <div class="flex gap-10">

                   <div class="p-7 bg-second_black rounded-lg w-full">
                       <div class="flex flex-col gap-3">
                           <div class="text-white opacity-50 text-base mb-2">Push Notification</div>

                           <div>
                            <div>
                                <div>New season and episodes, you collections</div>
                                <div>button</div>
                            </div>
                           </div>
                       </div>
                   </div>
                   <div class="p-7 bg-second_black rounded-lg w-full">
                       <div class="flex flex-col gap-3">
                           <div class="text-white opacity-50 text-base mb-2">Email Notification:</div>
                           <div class="p-10 flex flex-col items-center gap-2">
                                <img class="size-15" src="./images/mail-inbox-icon.svg" alt="">
                                <div class="text-white opacity-90">No Email Added</div>
                                <a href="" class="px-5 py-2 bg-redcolor rounded-full hover:translate-x-1 duration-200 text-white text-sm">Add Email</a>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
       </div>


    </div>

 </section>
<!-- account section end  -->


<?php $__env->stopSection(); ?>


<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/frontend/user/preferences.blade.php ENDPATH**/ ?>