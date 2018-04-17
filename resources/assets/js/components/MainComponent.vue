<style scoped>
    .google-map {
        width: 101%;
        height: 720px;
        margin: 0 auto;
        background: gray;
    }
</style>

<template>

    <div class="col-md-10">
        <div class="google-map" :id="mapName"></div>
    </div>

</template>


<script>
    import Rx from 'rxjs/Rx';

    export default {
        name: 'google-map',
        props: ['name'],
        data: () => {
            return {
                mapName: this.name + "-map",

                markerCoordinates: [{
                    latitude: 51.501527,
                    longitude: -0.1921837
                }, {
                    latitude: 51.505874,
                    longitude: -0.1838486
                }],
                map: null,
                bounds: null,
                marker: null,
                markers: [],
                coords_n: [
                    {latitude: 51.50161592009493, longitude: -0.19157997085812895},
                    {latitude: 51.50176284951284, longitude: -0.191129359743627},
                    {latitude: 51.50309854976581, longitude: -0.19160142853024809},
                    {latitude: 51.506384205776804, longitude: -0.19439092590573637},
                    {latitude: 51.50621186493112, longitude: -0.19433463693155772},
                    {latitude: 51.50758750127104, longitude: -0.19465650201334483},
                    {latitude: 51.509430521753465, longitude: -0.19392694116129405},
                    {latitude: 51.50967091023312, longitude: -0.1926823961783839},
                    {latitude: 51.50981781367961, longitude: -0.19160951257242687},
                    {latitude: 51.50981781367961, longitude: -0.19160951257242687},
                    {latitude: 51.509644200464685, longitude: -0.1910945284415675},
                    {latitude: 51.509644200464685, longitude: -0.1910945284415675},
                    {latitude: 51.50853573126533, longitude: -0.19053662896646983},
                    {latitude: 51.505650913920384, longitude: -0.18851960778727062}
                ]
            }
        },
        methods: {

            itemClick(node) {

            },
            Play_back() {
                console.log('oke');
            },
            CenterControl(controlDiv, map) {

                // Set CSS for the control border.
                var controlUI = document.createElement('div');
                controlUI.style.backgroundColor = '#fff';
                controlUI.style.border = '2px solid #fff';
                controlUI.style.borderRadius = '3px';
                controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
                controlUI.style.cursor = 'pointer';
                controlUI.style.marginBottom = '22px';
                controlUI.style.textAlign = 'center';
                controlUI.title = 'Click to recenter the map';
                controlDiv.appendChild(controlUI);

                // Set CSS for the control interior.
                var controlText = document.createElement('div');
                controlText.style.color = 'rgb(25,25,25)';
                controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
                controlText.style.fontSize = '16px';
                controlText.style.lineHeight = '38px';
                controlText.style.paddingLeft = '5px';
                controlText.style.paddingRight = '5px';
                controlText.innerHTML = `<button type='button' class="btn btn-info" @click="Play_back">Play back</button>`;
                controlUI.appendChild(controlText);

                // Setup the click event listeners: simply set the map to Chicago.
                controlUI.addEventListener('click', function() {
                    map.setCenter(chicago);
                });
            },
            calcRoute() {
                let directionsDisplay = new google.maps.DirectionsRenderer();

                let directionsService = new google.maps.DirectionsService();

                let start = new google.maps.LatLng(this.markerCoordinates[0].latitude, this.markerCoordinates[0].longitude);

                let end = new google.maps.LatLng(this.markerCoordinates[1].latitude, this.markerCoordinates[1].longitude);


                this.bounds.extend(start);
                this.bounds.extend(end);

                this.map.fitBounds(this.bounds);
                var request = {

                    origin: start,
                    destination: end,
                    travelMode: google.maps.TravelMode.DRIVING
                };
                directionsService.route(request, (response, status) => {
                    if (status == google.maps.DirectionsStatus.OK) {

                        directionsDisplay.setDirections(response);
                        directionsDisplay.setMap(this.map);
                    } else {
                        alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
                    }
                });
            }
        },
        mounted: function () {

            var centerControlDiv = document.createElement('div');
            var centerControl = new this.CenterControl(centerControlDiv, this.map);

            centerControlDiv.index = 1;


            this.bounds = new google.maps.LatLngBounds();
            const element = document.getElementById(this.mapName);
            const mapCentre = this.markerCoordinates[0]
            const options = {
                center: new google.maps.LatLng(mapCentre.latitude, mapCentre.longitude)
            }
            let position = new google.maps.LatLng(this.markerCoordinates[0].latitude, this.markerCoordinates[0].longitude);

            this.map = new google.maps.Map(element, options);

            this.marker = new SlidingMarker({
                position: position,
                map: this.map,
                title: 'I\m sliding marker'
            });
            this.map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);

            Rx.Observable.from(this.coords_n).zip(
                Rx.Observable.interval(1000), (a) => {
                    return a;
                })
                .subscribe(
                    (x) => {
                        position = new google.maps.LatLng(x.latitude, x.longitude);
                        this.marker.setPosition(position);
                        var duration = 1000;
                        if (duration < 0) {
                            duration = 1;
                            $('#durationOption').val(duration);
                        }
                        this.marker.setDuration(duration);
                        this.marker.setEasing('easeInQuint');
                        this.map.fitBounds(this.bounds.extend(position))
                    },
                    null,
                    () => {
                        console.log('completed')
                    });


            this.calcRoute();
        }
    };
</script>
