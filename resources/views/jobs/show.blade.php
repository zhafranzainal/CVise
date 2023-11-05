<x-app-layout>

    <div class="container py-5">

        <div class="text-center">
            <h1 class="display-4 fw-bold text-dark">{{ $job['title'] }}</h1>
            <p class="mt-4 lead text-secondary">Explore your job scope.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-1 g-4 mt-4">

            <div class="col">
                <div class="bg-white p-4 rounded shadow" style="position: relative;">

                    <a href="{{ route('jobs.advice') }}" class="btn btn-light custom-button"
                        style="position: absolute; top: 20px; right: 20px;">Advice</a>

                    <div class="row">
                        <div class="col">
                            <h2 class="h4 fw-bold text-dark">{{ $job['title'] }}</h2>
                            <p class="mt-3 text-secondary">{{ $job['description'] }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="h5 fw-bold">Job Details</h3>
                    <p>Lorem ipsum dolor</p>
                </div>
            </div>

        </div>

    </div>

</x-app-layout>
