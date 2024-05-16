@extends('layouts.nav_products') 
     @section('main')
<div>
    {{-- {{user->name}} --}}
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="my-4">Products</h1>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            {{-- <div class="col-md-4">
                                <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid" alt="Post Image">
                            </div> --}}
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h1 class="card-title">{{$post->name}}</h1>
                                    <img src="/pro/{{$post->image}}" width="200px" height="200px">
                                    <h3> Price : {{$post->price}}</h3>
                                    <h5> Description : {{$post->description}}</h5>
                                    <p class="card-text"><small class="text-muted">Updated on {{$post->created_at}}</small></p>
                                   <div>

                                    <a href="/products/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
                                    <a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a>

                                   </div>

                                    </div>
                                </div>
                            </div>
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
    </div>
</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
