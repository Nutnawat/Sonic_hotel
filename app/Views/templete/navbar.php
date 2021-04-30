<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark is-top" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="home">Sonic Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Room</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
$(document).ready(function() {
    $('nav-link').click(function() {
        $('nav-link.active').removeClass("active");
        $(this).addClass("active");
    });


    $(window).scroll(function() {
        if ($(window).scrollTop() <= 100) {
            $('#navbar').addClass("is-top");
            $('#navbar').removeClass("navbar-dark");
            $('#navbar').addClass("navbar-light");
        } else {
            $('#navbar').removeClass("is-top");
            $('#navbar').removeClass("navbar-light");
            $('#navbar').addClass("navbar-dark");
        }
    });
});
</script>