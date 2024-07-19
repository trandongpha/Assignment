<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
    <meta charset="utf-8">
  
    <title>Tin tức đời sống</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Hugo 0.74.3" />

    <!-- theme meta -->
    <meta name="theme-name" content="reader" />

    @include('clients.layouts.parials.css')

</head>

<body>
    <!-- navigation -->
    <header class="navigation fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-white">
                @include('clients.layouts.parials.header-nav')
                @include('clients.layouts.parials.header-top')
            </nav>
        </div>
    </header>
    <!-- /navigation -->

    <!-- start of banner -->
   @yield('content')

    <footer class="footer">
        @include('clients.layouts.parials.footer')
    </footer>


    <!-- JS Plugins -->
    @include('clients.layouts.parials.js')

</body>

</html>
