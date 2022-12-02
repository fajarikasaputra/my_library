<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('includes.meta')

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

    <title>myLibrary | {{ $title }}</title>
    {{-- <title>myLibrary</title> --}}
</head>

<body>
    <div class="screen-cover d-none d-xl-none"></div>

    <div class="flex">

        <div class="container">
            @include('partials.navbar')
        </div>
        <div class="container ">
            @yield('container')
        </div>
    </div>

    @stack('before-script')
    <!-- script -->
    @include('includes.script')

    @stack('after-script')
</body>

</html>
