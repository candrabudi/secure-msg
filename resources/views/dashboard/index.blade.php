@extends('layouts.app')

@section('content')
    
    <div class="col-span-12 2xl:col-span-9">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 mt-8">
                <div class="intro-y flex h-10 items-center">
                    <h2 class="mr-5 truncate text-lg font-medium">MAPS INDONESIA</h2>
                </div>
            </div>
        </div>
        <div id="map"></div>
    </div>
@endsection
