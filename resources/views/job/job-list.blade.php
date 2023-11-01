<x-app-layout>
    <div class="container py-5">
        <div class="text-center">
            <h1 class="display-4 fw-bold text-dark">Your Future Job</h1>
            <p class="mt-4 lead text-secondary">Explore your future job.</p>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mt-4">
            <div class="col-lg-12">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="h4 fw-bold text-dark">Software Engineer</h2>
                    <p class="mt-3 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="{{ route('job.desc')}}" class="btn btn-light custom-button">Explore</a>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="h4 fw-bold text-dark">DevOps Engineer</h2>
                    <p class="mt-3 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="{{ route('job.desc')}}" class="btn btn-light custom-button">Explore</a>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="h4 fw-bold text-dark">Job 3</h2>
                    <p class="mt-3 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="{{ route('job.desc')}}" class="btn btn-light custom-button">Explore</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>