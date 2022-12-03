<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script>
    const navbar = document.querySelector(".col-navbar");
    const cover = document.querySelector(".screen-cover");

    const sidebar_items = document.querySelectorAll(".sidebar-item");

    function toggleNavbar() {
        navbar.classList.toggle("d-none");
        cover.classList.toggle("d-none");
    }

    function toggleActive(e) {
        sidebar_items.forEach(function(v, k) {
            v.classList.remove("active");
        });
        e.closest(".sidebar-item").classList.add("active");
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
