<x-app-layout>
    <br>

    <div class="bg-light">
        <div class="container py-5">

            <div class="text-center">
                <h1 class="display-4 fw-bold text-dark">Choose your course programme</h1>
                <p class="mt-4 lead text-secondary">Explore job scope and roles based on your chosen course programme.
                </p>
            </div>

            <!-- Search Form -->
            <div class="mt-4 text-center">
                <form>
                    <div class="flex items-center w-full">

                        <x-input name="search" value="{{ $search ?? '' }}" placeholder="Search"
                            autocomplete="off"></x-input>

                        <div class="ml-1">
                            <button type="submit" class="button button-primary">
                                <i class="icon ion-md-search"></i>
                            </button>
                        </div>

                    </div>
                </form>
            </div>

            <!-- Course Program Cards -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mt-4">
                @forelse ($programs as $program)
                    <div class="col">
                        <div class="bg-white p-4 rounded shadow">
                            <h2 class="h4 fw-bold text-dark">{{ $program['name'] }}</h2>
                            <p class="mt-3 text-secondary">{{ $program['description'] }}</p>
                            <a href="{{ route('job.list') }}" class="btn btn-light custom-button">Explore</a>
                        </div>
                    </div>
                @empty
                    No program found
                @endforelse
            </div>

            <!-- Pagination Links -->
            <div class="mt-10 px-4">
                {!! $programs->render() !!}
            </div>

        </div>
    </div>

</x-app-layout>
