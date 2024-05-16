@extends('layouts.nav_products') 
@section('main')
       <div class="container">
         <div class="row justify-content-center">
             <div class="col-sm-8">
                 <div class="card mt-3 p-3">
                   <h1>Product Edit#{{$product->name}}</h1>
                     <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data" > 
                         @csrf
                         @method('PUT')
                         <div class="form-group">
                              <label for="">Name</label>
                         <input type="text" name="name" class="form-control" value="{{old('name',$product->name)}}">
                     @if($errors->has('name'))
                     <span class='text-danger'>({{$errors->first('name')}})</span>
                     @endif
                         
                       </div>
                       <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" step="0.01" value="{{ old('price', $product->price) }}">
                        @if ($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                    </div>
                    
                         
                       </div>
                         <div class="form-group">
                              <label for="">Description</label>
             <textarea class="form-control" rows="4" name="description">{{old('description',$product->description)}}</textarea>
             @if($errors->has('description'))
             <span class='text-danger'>({{$errors->first('description')}})</span>
             @endif
 
                     </div>
 
                     <div class="form-group">
                         <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                    @if($errors->has('image'))
                    <span class='text-danger'>({{$errors->first('image')}})</span>
                    @endif
                </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                     </form>



                 </div>
             </div>
         </div>
       </div>
   
@endsection