@extends('layouts.app')

@section('content')
    <div
        class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[1.3rem] bg-slate-100 px-4 pb-10 shadow-sm before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
        <div class="intro-y mt-8 flex items-center">
            <h2 class="mr-auto text-lg font-medium">Tambah Data Pusat</h2>
        </div>
        <form id="registration-form" action="{{ route('management.central.store') }}" method="POST">
            @csrf
            <div class="mt-5 grid grid-cols-12 gap-6">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="preview-component intro-y box">
                        <div
                            class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                            <h2 class="mr-auto text-base font-medium">
                                Informasi Data Pusat
                            </h2>
                        </div>
                        <div class="p-5">
                            <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">
                                <div class="input-form">
                                    <div>
                                        <label>Pusat</label>
                                        <div class="mt-2">
                                            <select data-placeholder="Pilih Data Pusat Jika Perlu" class="tom-select w-full"
                                                name="central_id">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Latitude</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="latitude" id="regular-form-1" type="text"
                                                placeholder="Isi Data Latitude"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Longtitude</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="longtitude" id="regular-form-1" type="text"
                                                placeholder="Isi Data Longtitude"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Keterangan</label>
                                        <div class="mt-2">
                                            <textarea data-tw-merge="" name="description" id="regular-form-1" type="text" placeholder=""
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"> </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Urutan</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="position" id="regular-form-1" type="number"
                                                placeholder="Isi Urutan"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Satgas Struktur</label>
                                        <div class="mt-2">
                                            <select data-placeholder="Pilih Satgas Struktur" name="structure_task_id"
                                                class="tom-select w-full">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="success-notif-create"
                        class="hidden py-5 pl-5 pr-14 bg-white border border-slate-200/60 rounded-lg shadow-xl dark:bg-darkmode-600 dark:text-slate-300 dark:border-darkmode-600 hidden flex">
                        <i data-tw-merge="" data-lucide="check-circle" class="stroke-1.5 w-5 h-5 text-success"></i>
                        <div class="ml-4 mr-4">
                            <div class="font-medium">Berhasil Menambahkan Data!</div>
                            <div class="mt-1 text-slate-500">
                                Silahkan Cek Kembali Data Yang Telah Di Tambahkan.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="preview-component intro-y box">
                        <div
                            class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                            <h2 class="mr-auto text-base font-medium">
                                Data Akun Pusat
                            </h2>
                        </div>
                        <div class="p-5">
                            <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Username</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="username" id="regular-form-1" type="text"
                                                placeholder="Masukan Username"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Password</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="password" id="regular-form-1" type="password"
                                                placeholder="Masukan Password"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Tanggal Expired</label>
                                        <div class="mt-2">
                                            <div data-tw-merge=""
                                                class="flex items-center mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                                                <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">
                                                    <input data-tw-merge="" name="expired_at" type="text" data-single-mode="true"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker mx-auto block w-56">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="preview-component intro-y box">
                        <div
                            class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                            <h2 class="mr-auto text-base font-medium">
                                Data Profile Pusat
                            </h2>
                        </div>
                        <div class="p-5">
                            <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Nama Lengkap</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="full_name" id="regular-form-1" type="text"
                                                placeholder="Masukan Nama Lengkap"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Nama Alias</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="aka_name" id="regular-form-1" type="text"
                                                placeholder="Masukan Nama Alias"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>NRP / NIK</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="nrp_nik" id="regular-form-1" type="text"
                                                placeholder="Masukan NRP / NIK"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Jabatan</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="position" id="regular-form-1" type="text"
                                                placeholder="Masukan Jabatan"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="submit-btn" data-tw-merge="" type="submit"
                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-5">Tambah
                Data</button>
        </form>
    </div>
    <div id="failed-notification-content"
        class="py-5 pl-5 pr-14 bg-white border border-slate-200/60 rounded-lg shadow-xl dark:bg-darkmode-600 dark:text-slate-300 dark:border-darkmode-600 hidden flex">
        <i data-tw-merge="" data-lucide="x-circle" class="stroke-1.5 w-5 h-5 text-danger"></i>
        <div class="ml-4 mr-4">
            <div class="font-medium">Gagal Tambah Data!</div>
            <div class="mt-1 text-slate-500">
                Tolong Cek Inputan Yang Ada.
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#registration-form').submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                // Disable submit button
                $('#submit-btn').prop('disabled', true);

                // Show processing modal
                $('#processing-modal').removeClass('hidden');

                // Simulate form data (replace with actual form data)
                var formData = {
                    // Add your form data here
                    // Example:
                    // 'name': $('#name').val(),
                    // 'email': $('#email').val(),
                    // 'message': $('#message').val()
                };

                // AJAX POST request
                $.ajax({
                    type: 'POST',
                    url: '/your-api-endpoint', // Replace with your actual API endpoint
                    data: formData,
                    success: function(response) {
                        // Hide processing modal
                        $('#processing-modal').addClass('hidden');

                        // Show success notification using Toastify or other notification library if needed
                        Toastify({
                            node: $("#success-notif-create").clone()
                                .removeClass("hidden")[0],
                            duration: -1,
                            newWindow: !0,
                            close: !0,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: !0
                        }).showToast()
                        // Reset form and enable submit button
                        $('#registration-form')[0].reset();
                        $('#submit-btn').prop('disabled', false);

                        // Redirect to another page or route after success (replace '/success-page' with your actual route)
                        window.location.href = '/success-page';
                    },
                    error: function(error) {
                        console.error('Error:', error);
                        // Handle error if needed
                    }
                });
            });
        });
    </script>
@endsection
