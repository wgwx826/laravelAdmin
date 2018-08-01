@extends('home.layouts.layout')
@section('content')
    <div class="tm-main-content">
        <div class="tm-content-box tm-content-box-home">
            <img src="img/1080x360-01.jpg" alt="Image" class="img-fluid tm-welcome-img">
        </div>
        <section id="contact" class="tm-content-box">
            <div class="row margin-b-50">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2 class="tm-section-title tm-blue-text">Contact Us</h2>
                    <form action="#contact" method="post" class="contact-form">
                        <div class="form-group">
                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                        </div>
                        <div class="form-group">
                            <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary tm-button-rounded tm-button-orange tm-button-no-border tm-button-normal">Send</button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="tm-address-box">
                        <p>Morbi auctor euismod dictum. Morbi eu nibh in nulla interdum placerat. Donec pellentesque est at sem aliquam hendrerit.</p>
                        <address>
                            <span class="tm-blue-text">Mailing Address</span><br>
                            991 Curabitur molestie dui vel,<br>
                            metus iaculis suscipit 11900<br><br>
                            Email: <a class="tm-blue-text" href="mailto:info@company.com">944295824@qq.com</a><br>
                            Tel: <a class="tm-black-text" href="tel:010-020-0120">18145858507</a><br>
                            QQ: <a class="tm-black-text" href="tel:090-080-0980">944295824</a><br>
                        </address>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div id="google-map"></div>
                </div>
            </div>
        </section>
    </div>
    <script>

        /* Google map
         ------------------------------------------------*/
        var map = '';
        var center;

        function initialize() {
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(37.769725, -122.462154),
                scrollwheel: false
            };

            map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

            google.maps.event.addDomListener(map, 'idle', function() {
                calculateCenter();
            });

            google.maps.event.addDomListener(window, 'resize', function() {
                map.setCenter(center);
            });
        }

        function calculateCenter() {
            center = map.getCenter();
        }

        function loadGoogleMap(){
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' + 'callback=initialize';
            document.body.appendChild(script);
        }

        $(document).ready(function(){

            // Google Map
            loadGoogleMap();

            // Update the current year in copyright
            $('.tm-current-year').text(new Date().getFullYear());
        });
    </script>
@endsection