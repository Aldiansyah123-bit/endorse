@extends('layouts.web')

@section('css')
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<!-- header section ends -->
<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <h3>best promotion <span>endorse</span></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus suscipit porro nam libero natus error consequatur sed repudiandae eos quo?</p>
    </div>
    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

</section>

<section class="review" id="endorse">
    <h1 class="heading"> Endorse </h1>
    <div class="box-container">
        @foreach ($endorse as $item)
            <div class="box">
                <div class="user">
                    <img src="{{ asset('storage/avatar') }}/{{ $item->foto }}" width="300" alt="">
                    <h3>{{ $item->nama }}</h3>
                    <div class="comment">
                        {{ $item->minat }}
                    </div>
                    <a href="/list" class="btn">read more</a>
                </div>
            </div>
        @endforeach
    </div>
    <br> <br><br> <br><br> <br>
    <center>
        <a href="/list" class="btn">read more</a>
    </center>
</section>
<!-- features section ends -->
<!-- about section starts  -->
<section class="about" id="about">
    <h1 class="heading"> about </h1>
    <div class="column">
        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>
        <div class="content">
            <h3>Easy and perfect solution for your endorsement promotion</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla placeat deserunt saepe repudiandae veniam soluta minima dolor hic aperiam iure.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, quaerat. Dolorem ratione saepe magni quo inventore porro ab voluptates eos, nam eius provident accusantium, quia similique est, repellendus et reiciendis.</p>
        </div>
    </div>
</section>
<!-- about section ends -->
<!-- newsletter  -->
<div class="newsletter">
    <h3>Subscribe For New Features</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sed aliquam quibusdam neque magni magnam est laborum doloribus, facere dolores.</p>
    <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="Subscribe">
    </form>
</div>
<!-- contact section starts  -->
<section class="contact" id="contact">
    <div class="image">
        <img src="images/contact-img.png" alt="">
    </div>
    <form action="/pesan" method="POST">
        @csrf
        <h1 class="heading">contact us</h1>
        <div class="inputBox">
            <input type="text" name="nama" required>
            <label>name</label>
        </div>

        <div class="inputBox">
            <input type="email" name="email" required>
            <label>email</label>
        </div>
        <div class="inputBox">
            <textarea required id="" name="pesan" cols="30" rows="10"></textarea>
            <label>pesan</label>
        </div>
        <button type="submit" class="btn">Send Mesage</button>
    </form>
</section>
<!-- contact section edns -->
@endsection
