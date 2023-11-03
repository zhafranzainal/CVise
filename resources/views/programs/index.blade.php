<x-app-layout>
    <br>

    <div class="bg-light">
        <div class="container py-5">

            <div class="text-center">
                <h1 class="display-4 fw-bold text-dark">Choose your course programme</h1>
                <p class="mt-4 lead text-secondary">Explore job scope and roles based on your chosen course programme.
                </p>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mt-4">
                @foreach ($programs as $program)
                    <div class="col">
                        <div class="bg-white p-4 rounded shadow">
                            <h2 class="h4 fw-bold text-dark">{{ $program['name'] }}</h2>
                            <p class="mt-3 text-secondary">{{ $program['description'] }}</p>
                            <a href="{{ route('job.list') }}" class="btn btn-light custom-button">Explore</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

</x-app-layout>
