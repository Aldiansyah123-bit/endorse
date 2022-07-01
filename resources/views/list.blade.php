@extends('layouts.web')

@section('css')
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<!-- header section ends -->
<div class="newsletterone">
    <form action="">
        <input type="search" placeholder="search" name="q">
        <input type="submit" value="Search">
    </form>
    @if (session('message'))
        <div class="alert alert-primary" role="alert">
            {{-- <h4 class="alert-heading">Primary</h4> --}}
            <p class="mb-0">
                <b>
                    {{session('message')}}
                </b>
            </p>
        </div>
    @endif
</div>
<section class="review">
    <div class="box-container">
        @foreach ($endorse as $item)
            <div class="box">
                <div class="user">
                    <img src="{{ asset('storage/avatar') }}/{{ $item->foto }}" width="300" alt="">
                    <h3>{{ $item->nama }}</h3>
                    <div class="comment">
                        Follower {{ $item->number }}
                    </div>
                    <a href="/list/{{ $item->id }}" class="btn">details</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
{{-- <script>
    @if (session('message'))
        toastr()->success('{{ session('message') }}');
    @endif
</script> --}}
@endsection

