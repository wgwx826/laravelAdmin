<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>王刚个人主页</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400"> <!-- Google web font "Open Sans", https://fonts.google.com/ -->
    <link rel="stylesheet" href="{{ asset('static/home/font-awesome-4.7.0/css/font-awesome.min.css') }}">         <!-- Font Awesome, http://fontawesome.io/ -->
    <link rel="stylesheet" href="{{ asset('static/home/css/bootstrap.min.css') }}">                               <!-- Bootstrap styles, https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{ asset('static/home/css/tooplate-style.css') }}">
    <script src="{{ asset('static/home/js/jquery-1.11.3.min.js')}}"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="{{ asset('static/home/js/imagesloaded.pkgd.min.js')}}"></script> <!-- https://masonry.desandro.com/ -->
    <script src="{{ asset('static/home/js/masonry.pkgd.min.js')}}"></script> <!-- https://masonry.desandro.com/ -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
    <div class="tm-body">
        <div class="tm-sidebar sticky">
            <section id="welcome" class="tm-content-box tm-banner margin-b-15">
                <div class="tm-banner-inner">
                    <i class="fa fa-film fa-4x margin-b-40"></i>
                    <h1 class="tm-banner-title">王刚</h1>
                    <p class="tm-banner-subtitle">曾经梦想仗剑走天涯~</p>
                </div>
            </section>
            <nav class="tm-main-nav">
                <ul class="tm-main-nav-ul">
                    <li class="tm-nav-item"><a href="{{url('')}}" class="tm-nav-item-link tm-button active">主页</a>
                    </li>
                    <li class="tm-nav-item"><a href="{{url('dynamic')}}" class="tm-nav-item-link tm-button">动态</a>
                    </li>
                    <li class="tm-nav-item"><a href="http://www.cnblogs.com/yimingwang/" class="tm-nav-item-link tm-button" target="_blank">博客</a>
                    </li>
                    <li class="tm-nav-item"><a href="{{url('about')}}" class="tm-nav-item-link tm-button">关于我</a>
                    </li>
                    <li class="tm-nav-item"><a href="{{url('contact')}}" class="tm-nav-item-link tm-button">联系我</a>
                    </li>
                </ul>
            </nav>
        </div>
         <!-- tm-main-content -->
        @yield('content')
    </div>

    <footer class="tm-footer text-right">
        <!--<p>Copyright &copy; <span class="tm-current-year">2018</span> Your Company -->

        <!-- - Designed by <a href="#/tooplate" target="_parent">Tooplate</a>. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>-->
    </footer>

</div> <!-- container-fluid -->

<!-- load JS files -->

<!-- Templatemo scripts -->
<script>

    $(document).ready(function(){

        // init Masonry
        // https://codepen.io/craigwheeler/pen/MYjBga
        var $grid = $('.grid').masonry({

            // set itemSelector so .grid-sizer is not used in layout
            // itemSelector: '.grid-item',
            // use element for option
            // columnWidth: '.grid-sizer',
            // percentPosition: true

            itemSelector: '.grid-item',
            isFitWidth: true,
            columnWidth: 1
        });
        // layout Masonry after each image loads
        $grid.imagesLoaded().progress( function() {
            $grid.masonry('layout');
        });

        // Update the current year in copyright
        $('.tm-current-year').text(new Date().getFullYear());
    });

</script>
</body>
</html>