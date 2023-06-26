<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.Layout.common-head')
</head>
<body class="  bg-gray-200">


    @include('dashboard.Layout.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('dashboard.Layout.header')

        @section('main-content')
        @show
        @include('dashboard.Layout.footer')

    </main>

        @include('dashboard.Layout.common-end')

        @stack('custom-scripts')

</body>

</html>
