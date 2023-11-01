<x-app-layout>
    <br>
    <div class="bg-light">
        <div class="container py-5">
            <div class="text-center">
                <h1 class="display-4 fw-bold text-dark">Choose your course programme</h1>
                <p class="mt-4 lead text-secondary">Explore job scope and roles based on your chosen course programme.</p>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mt-4">
                <div class="col">
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="h4 fw-bold text-dark">Software Engineer</h2>
                        <p class="mt-3 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="{{ route('job.list')}}" class="btn btn-light custom-button">Explore</a>
                    </div>
                </div>

                <div class="col">
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="h4 fw-bold text-dark">Data and Network</h2>
                        <p class="mt-3 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="{{ route('job.list')}}" class="btn btn-light custom-button">Explore</a>
                    </div>
                </div>

                <div class="col">
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="h4 fw-bold text-dark">Graphic and Multimedia</h2>
                        <p class="mt-3 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="{{ route('job.list')}}" class="btn btn-light custom-button">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="bg-gray-100">
        <div class="container mx-auto py-16">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-800">Welcome to Our Website</h1>
                <p class="mt-4 text-lg text-gray-600">Explore our amazing features and services.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800">Software Engineer</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button type="button" class="btn btn-primary">Explore</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800">Feature 2</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button type="button" class="btn btn-primary">Explore</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800">Feature 3</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button type="button" class="btn btn-primary">Explore</button>  
                </div>
            </div>
        </div>
    </div> -->


</x-app-layout>