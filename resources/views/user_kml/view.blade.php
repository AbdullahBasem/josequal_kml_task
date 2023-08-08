@extends('layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Kml on map</h1>

    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body" id="map" style="height:500pt;">

                </div>
            </div>
        </div>

    </div>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: { lat: 41.876, lng: -87.624 },
            });
            const georssLayer = new google.maps.KmlLayer({
                url: "{{$file->path}}",
            });
            georssLayer.setMap(map);
        }
        window.initMap = initMap;

    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{config('filesystems.google_key')}}=initMap&v=weekly"
        defer></script>
@endsection
