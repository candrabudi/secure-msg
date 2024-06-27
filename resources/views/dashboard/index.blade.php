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
@section('scripts')
<script>
    var map = L.map('map').setView([-2.548926, 118.0148634], 5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var markers = [];

    function updateLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var lat = position.coords.latitude;
                var lng = position.coords.longitude;
                var location = lat + ',' + lng;

                fetch('/update-location', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ location: location })
                });

                var currentLocationMarker;
                if (!currentLocationMarker) {
                    currentLocationMarker = L.marker([lat, lng]).addTo(map);
                }

                currentLocationMarker.on('click', function () {
                    currentLocationMarker.openPopup();
                });

                map.setView([lat, lng], 15);
            });
        }
    }

    setInterval(updateLocation, 30000);

    function fetchUsers() {
        fetch('/users')
            .then(response => response.json())
            .then(users => {
                markers.forEach(marker => map.removeLayer(marker));
                markers = [];

                users.forEach(user => {
                    var [lat, lng] = user.location.split(',');

                    var popupContent = `
                        <div style="width: 300px; height: 400px;">
                            <h3>${user.username}</h3>
                            <p>Status: ${user.status ? 'Online' : 'Offline'}</p>
                        </div>
                    `;

                    var marker = L.marker([lat, lng]).addTo(map)
                        .bindPopup(popupContent, { maxWidth: 'auto' });

                    markers.push(marker);
                    marker.on('click', function () {
                        marker.openPopup();
                    });
                });
            });
    }

    setInterval(fetchUsers, 30000);
    fetchUsers();
</script>
@endsection
