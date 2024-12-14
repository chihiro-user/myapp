@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
<style>
    #map { height: 500px; }
</style>
<div id="map"></div>
<script>
    var map = L.map('map').setView([35.6772387,139.7219223], 16);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([35.6772387,139.7219223]).addTo(map);
 </script>
 @endsection