<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Endorse</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    @toastr_css()

    @yield('css')

</head>
<body>
    @jquery()
    @toastr_js()
    @toastr_render
    <!-- header section starts  -->
<header>
    <a href="#" class="logo"><span>Endorse</span>App</a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fas fa-bars"></label>
        <nav class="navbar">
            <a href="/#home">home</a>
            <a href="/#endorse">endorse</a>
            <a href="/#about">about</a>
            <!-- <a href="#review">review</a>
            <a href="#pricing">pricing</a> -->
            <a href="#contact">contact</a>
        </nav>
</header>

@yield('content')

<!-- footer section starts  -->
<div class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet pariatur rerum consectetur architecto ad tempora blanditiis quo aliquid inventore a.</p>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">features</a>
            <a href="#">about</a>
            <a href="#">review</a>
            <a href="#">pricing</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">pinterest</a>
            <a href="#">twitter</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <div class="info">
                <i class="fas fa-phone"></i>
                <p> +123-456-7890 <br> +111-2222-333 </p>
            </div>
            <div class="info">
                <i class="fas fa-envelope"></i>
                <p> example@gmail.com <br> example@gmail.com </p>
            </div>
            <div class="info">
                <i class="fas fa-map-marker-alt"></i>
                <p> mumbai, india - 400104 </p>
            </div>
        </div>
    </div>
    <h1 class="credit"> &copy; copyright @ 2021 by mr. web designer </h1>
</div>
@yield('js')
<!-- footer section ends -->
</body>
</html>
