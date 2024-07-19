<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:13 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin tin tức</title>
    <link rel="icon" href="https://cdn-images.vtv.vn/zoom/320_200/2019/9/26/158752096412840060593915480825543594192306o-15694933324882118926510-crop-15694933450351701225990.png" type="image/png">

    @include('admin.layouts.parials.css')
</head>

<body class="crm_body_bg">

    @include('admin.layouts.parials.nav')


    <section class="main_content dashboard_part large_header_bg">

        @include('admin.layouts.parials.header_iner')

        @yield('content')

        @include('admin.layouts.parials.footer')
    </section>
    @include('admin.layouts.parials.js')
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:13 GMT -->

</html>
