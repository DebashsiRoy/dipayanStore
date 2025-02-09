<!DOCTYPE html>
<html lang="en">
<head>
    @include('Home.head')
</head>
<body>
<!-- HEADER -->
    @include('Home.header')
<!-- /HEADER -->

<!-- NAVIGATION -->
    @include('Home.nav')
<!-- /NAVIGATION -->

<!-- SECTION -->
    @include('Home.sliderTop')
<!-- /SECTION -->

<!-- SECTION -->
        @include('Home.slider')
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
    @include('Home.hotDeal')
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
    @include('Home.topSale')
<!-- /SECTION -->

<!-- SECTION -->
    @include('Home.trending')
<!-- /SECTION -->

<!-- NEWSLETTER -->
    @include('Home.newsletter')
<!-- /NEWSLETTER -->

{{--google maps--}}


{{--end google maps--}}
<!-- FOOTER -->
    @include('Home.footer')
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/nouislider.min.js')}}"></script>
<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
