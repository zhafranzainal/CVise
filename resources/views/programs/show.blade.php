<x-app-layout>

    <div class="container py-5">

        <div class="text-center">
            <h1 class="display-4 fw-bold text-dark">{{ $program['name'] }}</h1>
            <p class="mt-4 lead text-secondary">Explore your career opportunities.</p>
        </div>

        <!-- Search Form -->
        <div class="mt-4 text-center">
            <form class="flex justify-center">
                <div class="flex items-center">

                    <x-input name="search" value="{{ $search ?? '' }}" placeholder="Search" autocomplete="off"></x-input>

                    <div class="ml-1">
                        <button type="submit" class="button button-primary">
                            <i class="icon ion-md-search"></i>
                        </button>
                    </div>

                </div>
            </form>
        </div>

        <!-- Job Cards -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mt-4">
            @forelse ($jobs as $job)
                <div class="col-lg-12">
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="h4 fw-bold text-dark">{{ $job['title'] }}</h2>
                        <p class="mt-3 text-secondary" style="text-align: justify;">{{ $job['description'] }}</p>
                        <a href="{{ route('job.desc') }}" class="btn btn-light custom-button">Explore</a>
                    </div>
                </div>
            @empty
                No job found
            @endforelse
        </div>

    </div>

</x-app-layout>
