<x-app-layout>
 {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
{{-- 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>  --}}
    
        {{-- Your Blade template content --}}
            <!-- Add Bootstrap 5.3 CSS link -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        
            <div class="container mt-4">
                <div class="row justify-content-center gap-5 mx-5">
                    <div class="col-3 ">
                        <img src="/img/default.jpg" alt="img" style="max-height:150px; border-radius: 70%;" class="rounded-circle">
                    </div>

                    <div class="col-6 pt-2">
                        <div class="px-2"><h1>EyeEm</h1></div>
                        <div class="d-flex">
                            <div class="px-2"><strong>153</strong>posts</div>
                            <div class="px-2"><strong>23k</strong>followers</div>
                            <div class="px-2"><strong>212</strong>following</div>
                        </div>
                        <div class="px-2"><strong>eyeem.org</strong></div>
                        <div class="px-2">Welcome to EyeEm, where every moment is a masterpiece waiting to be captured.</div>
                    </div>

                </div>
            </div>

            <div class="container d-flex">
                <!-- Row 1 -->
                <div class="row gap-5 m-5 px-5">
                    <div class="col-4">
                        <img src="/img/book.jpg"  style="max-height:150px; class="img-fluid" alt="Image 1">
                    </div>
                    <div class="col-3">
                        <img src="/img/BMW.jpg"  style="max-height:150px;" class="img-fluid" alt="Image 1">
                    </div>
                    <div class="col-3">
                        <img src="/img/sports.jpg"  style="max-height:150px;" class="img-fluid" alt="Image 2">
                    </div>
                    <div class="col-4">
                        <img src="/img/t_shirt.jpg"  style="max-height:150px;" class="img-fluid" alt="Image 3">
                    </div>
                    <div class="col-3">
                        <img src="/img/cycle.jpg"  style="max-height:150px;" class="img-fluid" alt="Image 4">
                    </div>
                    <div class="col-3">
                        <img src="/img/iphone.jpg"  style="max-height:200px;" class="img-fluid" alt="Image 5">
                    </div>

            </div>  
                   </div>
            
            
        
    
</x-app-layout>
