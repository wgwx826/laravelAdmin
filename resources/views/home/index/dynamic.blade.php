@extends('home.layouts.layout')
@section('content')
    <div class="tm-main-content">

        <div class="row mb-5">
            <div class="media tm-flexbox-ie-fix tm-width-ie-fix">
                <div class="tm-media-img-container">
                    <div class="text-center pt-31 pb-31 tm-timeline-date tm-bg-pink">21 November 2017</div>
                    <img class="d-flex img-fluid" src="img/610x610-01.jpg" alt="Generic placeholder image">
                </div>

                <div class="media-body tm-flexbox-ie-fix tm-width-ie-fix tm-bg-light-gray">
                    <div class="p-5">
                        <h2 class="mb-4 mt-0 tm-blue-text tm-timeline-item-title">Nulla tempor tempus efficitur</h2>
                        <p class="mb-4">
                            Ut molestie odio et nisl congue fermentum. Aliquam consectetur est at orci aliquam maximus. Curabitur vitae arcu congue, laoreet sem ut, congue eros. Integer bibendum lorem lorem, quis consectetur magna fringilla in. Donec dapibus efficitur odio ac cursus. Integer imperdiet rhoncus volutpat.
                        </p>

                        <a href="#" class="btn btn-primary tm-button-rounded tm-button-pink tm-button-no-border tm-button-normal tm-button-timeline">Read More</a>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row mb-5">
            <div class="media tm-flexbox-ie-fix tm-width-ie-fix">
                <div class="tm-media-img-container">
                    <div class="text-center pt-31 pb-31 tm-timeline-date tm-bg-green">16 November 2017</div>
                    <img class="d-flex img-fluid" src="img/610x610-02.jpg" alt="Generic placeholder image">
                </div>

                <div class="media-body tm-flexbox-ie-fix tm-width-ie-fix tm-bg-light-gray">
                    <div class="p-5">
                        <h2 class="mb-4 mt-0 tm-blue-text tm-timeline-item-title">Etiam fringilla ipsum at molestie</h2>
                        <p class="mb-4">
                            Nulla venenatis leo ultrices ipsum pellentesque fringilla. Donec viverra purus sit amet ante venenatis placerat. Duis venenatis sed mauris sit amet sodales. In maximus eros nisl, ac egestas lorem suscipit ac. Cras interdum eu dui sit amet vehicula. Maecenas congue dui ante, eget elementum leo vulputate eu.
                        </p>

                        <a href="#" class="btn btn-primary tm-button-rounded tm-button-green tm-button-no-border tm-button-normal tm-button-timeline">Read More</a>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row mb-5">
            <div class="media tm-flexbox-ie-fix tm-width-ie-fix">
                <div class="tm-media-img-container">
                    <div class="text-center pt-31 pb-31 tm-timeline-date tm-bg-red">22 October 2017</div>
                    <img class="d-flex img-fluid" src="img/610x610-03.jpg" alt="Generic placeholder image">
                </div>

                <div class="media-body tm-flexbox-ie-fix tm-width-ie-fix tm-bg-light-gray">
                    <div class="p-5">
                        <h2 class="mb-4 mt-0 tm-blue-text tm-timeline-item-title">Aliquam consectetur est at orci</h2>
                        <p class="mb-4">Etiam aliquet metus nec nulla gravida, et consequat sapien venenatis. Cras commodo ullamcorper tortor, ut volutpat nulla eleifend quis. Nunc rhoncus malesuada nulla, quis tincidunt arcu dapibus non. Nulla vel risus sodales, hendrerit turpis eu, rhoncus nibh. Sed vel vestibulum velit, et tempus eros.</p>

                        <a href="#" class="btn btn-primary tm-button-rounded tm-button-red tm-button-no-border tm-button-normal tm-button-timeline">Read More</a>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row mb-5">
            <div class="media tm-flexbox-ie-fix tm-width-ie-fix">
                <div class="tm-media-img-container">
                    <div class="text-center pt-31 pb-31 tm-timeline-date tm-bg-gray">18 October 2017</div>
                    <img class="d-flex img-fluid" src="img/610x610-04.jpg" alt="Generic placeholder image">
                </div>

                <div class="media-body tm-flexbox-ie-fix tm-width-ie-fix tm-bg-light-gray">
                    <div class="p-5">
                        <h2 class="mb-4 mt-0 tm-blue-text tm-timeline-item-title">Donec quis fermentum nulla</h2>
                        <p class="mb-4">Vivamus efficitur lorem ac velit vulputate, sed consectetur leo fermentum. Fusce non lacinia eros. Suspendisse pharetra nisi fermentum bibendum condimentum. Nam sit amet consectetur dui. Ut malesuada commodo enim, nec varius diam ultricies finibus. Curabitur molestie dui vel metus iaculis suscipit.</p>
                        <a href="#" class="btn btn-primary tm-button-rounded tm-button-gray tm-button-no-border tm-button-normal tm-button-timeline">Read More</a>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div>
    </div>
    <script>

        $(document).ready(function(){
            // Update the current year in copyright
            $('.tm-current-year').text(new Date().getFullYear());
        });

    </script>
@endsection