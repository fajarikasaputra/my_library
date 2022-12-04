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

    @include('partials.navbar')
    <div class="container ">
        <div class="content">
            @yield('container')
        </div>
    </div>

    <script>
        var hamburger = document.querySelector(".hamburger");
        var wrapper = document.querySelector(".wrapper");
        var backdrop = document.querySelector(".backdrop");

        hamburger.addEventListener("click", function() {
            wrapper.classList.add("active");
        });

        backdrop.addEventListener("click", function() {
            wrapper.classList.remove("active");
        });
    </script>
    @stack('before-script')
    <!-- script -->
    @include('includes.script')

    @stack('after-script')
</body>
<script>
    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
        });
</script>

</html>
