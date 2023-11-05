<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {margin:0;padding:0;}
    </style>
</head>
<body>
    <div id="guglmapa" style="width:100%;height:600px;">
    </div>
    <script type="text/javascript">

        const events = [
            @foreach ($places as $place)
                [{ lat: {{ $place->latitude }}, lng: {{ $place->longitude }} }, "<h3><a style='color:#958dd7' href='{{ route('places.show', $place->id) }}'>{{ $place->name }}</a></h3>", '/images/marker_icons/{{ $place->place_type->name }}.png'],
            @endforeach
        ];

        var myStyles =[
        {
                "featureType": "administrative.country",
                "elementType": "labels.text",
                "stylers": [
                    {
                    "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text",
                "stylers": [
                    {
                    "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative.locality",
                "elementType": "labels.text",
                "stylers": [
                    {
                    "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative.neighborhood",
                "elementType": "labels.text",
                "stylers": [
                    {
                    "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "elementType": "labels.text",
                "stylers": [
                    {
                    "visibility": "on"
                    }
                ]
            },
            {
                featureType: "poi",
                elementType: "labels",
                stylers: [
                    { visibility: "off" }
                ]
            }
        ];

        function myMap(){
          var myCenter = new google.maps.LatLng(43.323987, 21.911628);
          var mapCanvas = document.getElementById("guglmapa");
          var mapOptions = {
            center: myCenter,
            zoom: 14.2,
            styles: myStyles,
            panControl: true,
            zoomControl: true,
            mapTypeControl: false,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true,
            rotateControl: true,
            //mapTypeId: google.maps.MapTypeId.HYBRID
          }
          var map = new google.maps.Map(mapCanvas, mapOptions);

          const infoWindow = new google.maps.InfoWindow();
        
            events.forEach(([position, title, customIcon], i) => {
                const marker = new google.maps.Marker({
                position,
                map,
                title: `${title}`,
                optimized: false,
                type:'parking',
                icon:{url:customIcon, scaledSize: new google.maps.Size(30, 30)},
            });

            marker.addListener("click", () => {
                infoWindow.close();
                infoWindow.setContent(marker.getTitle());
                infoWindow.open(marker.getMap(), marker);
            });
        });
        }
        
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWzngxcS4_reS6OGgrTl_N8p7XMnYSa1Y&callback=myMap"></script>
</body>
</html>