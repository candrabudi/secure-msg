@extends('layouts.app')

@section('content')
    <div
        class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[1.3rem] bg-slate-100 px-4 pb-10 shadow-sm before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
        <div class="intro-y mt-8 flex items-center">
            <h2 class="mr-auto text-lg font-medium">Tambah Tipe User</h2>
        </div>
        <form method="POST" action="{{ route('masterdata.typeuser.store') }}">
            @csrf
            <div class="mt-5 grid grid-cols-12 gap-6">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="preview-component intro-y box">
                        <div
                            class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                            <h2 class="mr-auto text-base font-medium">
                                Detail Data
                            </h2>
                        </div>
                        <div class="p-5">
                            <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">
                                <div class="input-form">
                                    <div>
                                        <label>Pusat</label>
                                        <div class="mt-2">
                                            <select data-placeholder="Pilih Data Pusat Jika Perlu"
                                                class="tom-select w-full" name="central_id">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Induk</label>
                                        <div class="mt-2">
                                            <select data-placeholder="Pilih Data Pusat Jika Perlu"
                                                class="tom-select w-full" name="parent_id">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Logo</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="logo_image" id="regular-form-1" type="file"
                                                placeholder="Isi Data Longtitude"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Label</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="label" id="regular-form-1" type="text"
                                                placeholder="Isi Label"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Warna (Gunakan Hexa Warna)</label>
                                        <div class="mt-2">
                                            <input data-tw-merge="" name="color" id="regular-form-1" type="text"
                                                placeholder="Isi Warna Dengan Kode Hexa"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Tipe</label>
                                        <div class="mt-2">
                                            <select data-tw-merge="" name="type" aria-label="Default select example"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 sm:mr-2">
                                                <option value="ANGGOTA">ANGGOTA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-form mt-3">
                                    <div>
                                        <label>Show Hide</label>
                                        <div class="mt-2">
                                            <select data-tw-merge="" name="is_show" aria-label="Default select example"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 sm:mr-2">
                                                <option value="1">Tampilkan</option>
                                                <option value="0">Sembunyikan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-tw-merge="" type="submit"
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-5">Tambah
                                Data</button>
                        </div>
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
                </div>

            </div>

        </form>
    </div>
@endsection
@section('scripts')
@endsection
