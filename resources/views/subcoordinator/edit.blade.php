@extends('layouts.app')

@section('content')
    <div
        class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[1.3rem] bg-slate-100 px-4 pb-10 shadow-sm before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
        <div class="intro-y mt-8 flex items-center">
            <h2 class="mr-auto text-lg font-medium">Tambah Data Koordiantor</h2>
        </div>
        <form id="registration-form" action="{{ route('management.subcoordinator.update', $user->id) }}" method="POST">
            @csrf
            <div class="mt-5 grid grid-cols-12 gap-6">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="preview-component intro-y box">
                        <div
                            class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                            <h2 class="mr-auto text-base font-medium">
                                Informasi Data Koordiantor
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
                                        <label>Induk</label>
                                        <div class="mt-2">
                                            <select data-placeholder="Pilih Data Jika Perlu" class="tom-select w-full"
                                                name="parent_id">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Sub Induk</label>
                                        <div class="mt-2">
                                            <select data-placeholder="Pilih Data Jika Perlu" class="tom-select w-full"
                                                name="sub_parent_id">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Koordinator</label>
                                        <div class="mt-2">
                                            <select data-placeholder="Pilih Data Jika Perlu" class="tom-select w-full"
                                                name="coordinator_id">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Sub Koordinator</label>
                                        <div class="mt-2">
                                            <select data-placeholder="Pilih Data Jika Perlu" class="tom-select w-full"
                                                name="sub_coordinator_id">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Latitude</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" value="{{ $user->UserData->latitude }}" name="latitude" id="regular-form-1" type="text"
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
                                            <input data-tw-merge="" value="{{ $user->UserData->longtitude }}" name="longtitude" id="regular-form-1" type="text"
                                                placeholder="Isi Data Longtitude"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Keterangan</label>
                                        <div class="mt-2">
                                            <textarea data-tw-merge="" name="description" id="regular-form-1" type="text" placeholder=""
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">{{ $user->UserData->description }}</textarea>
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
                                Data Profile Koordiantor
                            </h2>
                        </div>
                        <div class="p-5">
                            <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">
                                <div class="input-form">
                                    <div>
                                        <label>Nama Lengkap</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" value="{{ $user->UserProfile->full_name }}" name="full_name" id="regular-form-1" type="text"
                                                placeholder="Masukan Nama Lengkap"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>NRP / NIK</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" value="{{ $user->UserProfile->national_id }}" name="nrp_nik" id="regular-form-1" type="text"
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
                                            <input data-tw-merge="" value="{{ $user->UserProfile->position }}" name="position" id="regular-form-1" type="text"
                                                placeholder="Masukan Jabatan"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>

                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Jenis Kelamin</label>
                                        <div class="mt-2">
                                            <select data-placeholder="Pilih Jenis Kelamin" class="tom-select w-full"
                                                name="gender">
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
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
                                Data Akun Koordiantor
                            </h2>
                        </div>
                        <div class="p-5">
                            <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">
                                <div class="input-form">
                                    <div>
                                        <label>Satgas Struktur</label>
                                        <div class="mt-2">
                                            <select data-placeholder="Pilih Jenis Kelamin" class="tom-select w-full"
                                                name="gender">
                                            </select>
                                        </div>

                                    </div>
                                </div>
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
                                        <label>Status</label>
                                        <div class="mt-2">
                                            <select data-placeholder="Pilih Jenis Kelamin" class="tom-select w-full"
                                                name="account_status">
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
                                            </select>
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
            </div>
            <button id="submit-btn" data-tw-merge="" type="submit"
                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-5">Tambah
                Data</button>
        </form>
    </div>
@endsection
@section('scripts')
@endsection
