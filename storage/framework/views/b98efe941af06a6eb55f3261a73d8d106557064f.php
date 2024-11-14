

<?php $__env->startSection('head_title', trans('words.dashboard_text') . ' | ' . getcong('site_name')); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>
    <div class="general__modal" id="loginRegiModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="loginRegiModalLabel" aria-hidden="true" style="margin-top: 5rem; margin-bottom: 5rem;">
        <div class="container height-100 d-flex justify-content-center align-items-center">
            <div class="position-relative">
                <div class="card p-5 text-center">
                    <h6>Please enter the one time password <br> to verify your account</h6>
                    <div> <span>A code has been sent to</span> <small><?php echo e($email); ?></small> </div>
                    <form action="verify-otp" method="post" id="myForm">
                      <?php echo csrf_field(); ?>
                        <div id="otp" class="inputs d-flex flex-row justify-content-center mt-3">

                            <input type="hidden" name="email" value="<?php echo e($email); ?>">
                            <input class="m-3 text-center form-control rounded" type="text" id="first"
                                maxlength="1" />
                            <input class="m-3 text-center form-control rounded" type="text" id="second"
                                maxlength="1" />
                            <input class="m-3 text-center form-control rounded" type="text" id="third"
                                maxlength="1" />
                            <input class="m-3 text-center form-control rounded" type="text" id="fourth"
                                maxlength="1" />
                            <input class="m-3 text-center form-control rounded" type="text" id="fifth"
                                maxlength="1" />
                            <input class="m-3 text-center form-control rounded" type="text" id="sixth"
                                maxlength="1" />
                                <input type="hidden" id="combinedInput" name="combinedInput">

                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-danger px-4 validate">Validate</button>
                        </div>
                    </form>
                    <div class="card-2 mt-3">
                        <div class="content d-flex justify-content-center align-items-center"> <span>Didn't get the
                                code</span> <a href="#" class="text-decoration-none ms-3">Resend</a> </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            function OTPInput() {
                const inputs = document.querySelectorAll('#otp > *[id]');
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('keydown', function(event) {
                        if (event.key === "Backspace") {
                            inputs[i].value = '';
                            if (i !== 0) inputs[i - 1].focus();
                        } else {
                            if (i === inputs.length - 1 && inputs[i].value !== '') {
                                return true;
                            } else if (event.keyCode > 47 && event.keyCode < 58) {
                                inputs[i].value = event.key;
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            } else if (event.keyCode > 64 && event.keyCode < 91) {
                                inputs[i].value = String.fromCharCode(event.keyCode);
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            }
                        }
                    });
                }
            }
            OTPInput();


        });

        document.getElementById("myForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Get the values of the three input fields
        var input1Value = document.getElementById("first").value;
        var input2Value = document.getElementById("second").value;
        var input3Value = document.getElementById("third").value;
        var input4Value = document.getElementById("fourth").value;
        var input5Value = document.getElementById("fifth").value;
        var input6Value = document.getElementById("sixth").value;

        // Combine the values into a single string
        var combinedValue = input1Value + input2Value + input3Value + input4Value + input5Value + input6Value;

        // Set the combined value to the hidden input field
        document.getElementById("combinedInput").value = combinedValue;

        // Now, you can submit the form
        this.submit();
    });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/verify-otp.blade.php ENDPATH**/ ?>