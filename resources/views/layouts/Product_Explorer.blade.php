@extends('layouts.nav_products') 
     @section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
    <h1 class="my-4">Category of Product</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card mb-3">
                {{-- <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" alt="Post Image"> --}}
                <div class="card-body">
                    <h3 class="card-title"><a  href="/products/{{$post->id}}" class="text-decoration-none"><button class='btn btn-warning'>{{$post->name}}</button></a></h3>
                    {{-- <p class="card-text"><small class="text-muted">Written on {{$post->created_at}}</small></p> --}}
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    @else
        <p>No posts found</p>
    @endif
</div>

@endsection