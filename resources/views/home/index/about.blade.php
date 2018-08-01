@extends('home.layouts.layout')
@section('content')
    <div class="tm-main-content">
        <div class="row mb-5">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center mb-md-0 mb-4"><img src="img/575x400-01.jpg" alt="Image" class="img-fluid"></div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pl-md-4 tm-flex-center">
                <div class="tm-about-text tm-flexbox-ie-fix">
                    <h2 class="tm-orange-text mb-4">In sodales lorem nec metus</h2>
                    <p class="mb-4">Ut ultrices, urna a porttitor condimentum, tortor arcu feugiat neque, quis tristique lectus nisl at nisi. In convallis, lorem eget bibendum lobortis, sem metus elementum odio, vitae mattis erat quam eu ante. Duis fermentum in tellus ut tempor. In hac habitasse platea dictumst. Nunc vel nulla lacus.</p>
                    <a href="#" class="tm-button tm-button-normal tm-button-gray">Read More</a>
                </div>
            </div>
        </div> <!-- row -->
        <div class="row mb-5">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-md-0 mb-4 tm-flex-center">
                <div class="tm-about-text tm-flexbox-ie-fix">
                    <h2 class="tm-orange-text mb-4">Nullam condimentum purus</h2>
                    <p class="mb-4">Curabitur consectetur sapien et vestibulum commodo. Phasellus id metus quam. Mauris fringilla arcu non tellus malesuada tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    <p>Donec commodo semper nisl semper luctus. Phasellus euismod, nulla eu tristique sodales, dolor risus lobortis eros, pretium hendrerit ligula risus sit amet odio.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center pl-md-4"><img src="img/575x400-02.jpg" alt="Image" class="img-fluid"></div>
        </div> <!-- row -->
        <div class="row mb-4">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                <div class="tm-bg-orange p-5">
                    <i class="fa fa-4x fa-audio-description d-block mb-4 text-center"></i>
                    <h3 class="mb-4">Nullam condi mentum</h3>
                    <p>Mauris fringilla arcu non tellus malesuada tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                <div class="tm-bg-orange p-5">
                    <i class="fa fa-4x fa-bell-o d-block mb-4 text-center"></i>
                    <h3 class="mb-4">Nullam condi mentum</h3>
                    <p>Mauris fringilla arcu non tellus malesuada tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                <div class="tm-bg-orange p-5">
                    <i class="fa fa-4x fa-birthday-cake d-block mb-4 text-center"></i>
                    <h3 class="mb-4">Nullam condi mentum</h3>
                    <p>Mauris fringilla arcu non tellus malesuada tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tm-box-pad tm-bordered-box">
                    <h2 class="tm-section-title tm-orange-text">Phasellus vitae finibus lectus</h2>
                    <p>Praesent finibus egestas metus id pulvinar. Nullam condimentum purus sed accumsan ornare. Pellentesque leo urna, ornare in metus in, fermentum dictum est. Maecenas vehicula velit at enim tempus, et semper sem scelerisque. Sed id sapien venenatis, ultrices velit sit amet, blandit nisi. Mauris ac eros nisl.</p>
                    <p>Sed at mattis leo, in feugiat sem. Integer a orci neque. Aenean id lorem ut risus maximus interdum. Nunc sodales gravida semper. Mauris sollicitudin lectus imperdiet, cursus mauris ac, aliquet nulla. Integer vitae sodales elit. Morbi rutrum, dui at pharetra gravida, risus felis finibus est, at vestibulum nibh velit sed nisi.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>

        $(document).ready(function(){
            // Update the current year in copyright
            $('.tm-current-year').text(new Date().getFullYear());
        });

    </script>
@endsection