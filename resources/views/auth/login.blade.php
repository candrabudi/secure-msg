<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="ceKdwoQjZ4VuoGqoSQaSREwB7MD9sjwFnfhlp7MH">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Login - Secure Messanger</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <div
        class="p-3 sm:px-8 relative h-screen lg:overflow-hidden bg-primary xl:bg-white dark:bg-darkmode-800 xl:dark:bg-darkmode-600 before:hidden before:xl:block before:content-[''] before:w-[57%] before:-mt-[28%] before:-mb-[16%] before:-ml-[13%] before:absolute before:inset-y-0 before:left-0 before:transform before:rotate-[-4.5deg] before:bg-primary/20 before:rounded-[100%] before:dark:bg-darkmode-400 after:hidden after:xl:block after:content-[''] after:w-[57%] after:-mt-[20%] after:-mb-[13%] after:-ml-[13%] after:absolute after:inset-y-0 after:left-0 after:transform after:rotate-[-4.5deg] after:bg-primary after:rounded-[100%] after:dark:bg-darkmode-700">
        <div class="container relative z-10 sm:px-10">
            <div class="block grid-cols-2 gap-4 xl:grid">
                <div class="hidden min-h-screen flex-col xl:flex">
                    <a class="-intro-x flex items-center pt-5" href="#">
                        <img class="w-6" src="https://upload.wikimedia.org/wikipedia/commons/4/48/Insignia_of_the_Indonesian_National_Armed_Forces.svg" alt="BAIS">
                        <span class="ml-3 text-lg text-white"> BAIS</span>
                    </a>
                    <div class="my-auto">
                        <img class="-intro-x -mt-16 w-1/2" src="{{ asset('assets/images/illustration.svg') }}"
                            alt="BAIS">
                        <div class="-intro-x mt-10 text-4xl font-medium leading-tight text-white">
                            Security Data <br>
                            Masuk untuk mengelola data
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">
                            Semua data akan aman dalam website protect.
                        </div>
                    </div>
                </div>
                <div class="my-10 flex h-screen py-5 xl:my-0 xl:h-auto xl:py-0">
                    <div
                        class="mx-auto my-auto w-full rounded-md bg-white px-5 py-8 shadow-md dark:bg-darkmode-600 sm:w-3/4 sm:px-8 lg:w-2/4 xl:ml-20 xl:w-auto xl:bg-transparent xl:p-0 xl:shadow-none">
                        <h2 class="intro-x text-center text-2xl font-bold xl:text-left xl:text-3xl">
                            Login
                        </h2>
                        <form id="login-form" method="POST" action="{{ route('login.process') }}">
                            @csrf
                            <div class="intro-x mt-8">
                                <input data-tw-merge="" type="text" name="username" placeholder="Username"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 intro-x block min-w-full px-4 py-3 xl:min-w-[350px]">
                                <input data-tw-merge="" type="password" name="password" placeholder="Password"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 intro-x mt-4 block min-w-full px-4 py-3 xl:min-w-[350px]">
                            </div>
                            <div class="form-group mt-3">
                                <div>
                                    <img src="{{ captcha_src() }}" alt="captcha" class="captcha-img" data-refresh-config="default">
                                    <a href="#" id="refresh-captcha">
                                        <span class="glyphicon glyphicon-refresh"></span>
                                    </a>
                                </div>
                                <input type="text" id="captcha" class="form-control" name="captcha" required>
                                @if ($errors->has('captcha'))
                                    <span class="text-danger">{{ $errors->first('captcha') }}</span>
                                @endif
                            </div>
                
                            <div class="intro-x mt-5 text-center xl:mt-8 xl:text-left">
                                <button data-tw-merge=""
                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-full px-4 py-3 align-top xl:mr-3 xl:w-32">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/vendors/dom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tailwind-merge.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/lucide.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/modal.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/theme-color.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/lucide.js') }}"></script>
    <script>
        document.getElementById('refresh-captcha').addEventListener('click', function (e) {
            e.preventDefault();
            var captcha = document.querySelector('.captcha-img');
            var config = captcha.getAttribute('data-refresh-config');
            captcha.src = '/captcha/' + config + '?' + Math.random();
        });

        document.getElementById('captcha').addEventListener('input', function () {
            var captchaInput = this.value;
            validateCaptcha(captchaInput);
        });

        function validateCaptcha(captchaInput) {
            $.ajax({
                url: '{{ route("validate.captcha") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    captcha: captchaInput
                },
                success: function(response) {
                    if (response.valid) {
                        $('#submit-btn').prop('disabled', false);
                    } else {
                        $('#submit-btn').prop('disabled', true);
                    }
                }
            });
        }

        $(document).ready(function() {
            $('#submit-btn').prop('disabled', true); // Disable submit button initially
        });
    </script>
</body>

</html>
