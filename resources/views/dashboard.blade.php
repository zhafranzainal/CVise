<x-app-layout>
    <br>
    <div class="container bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <h1 class="mb-3 mb-md-4">Your Future.</h1>
                        <h1 class="mb-3 mb-md-4">Your Career.</h1>
                        <p class="mb-4 mb-md-5">Your Start at CareerVise!</p>
                    </div>
                    <div class="row">
                        <a href="{{ route('jobs.index') }}" class="btn btn-light custom-button">Start for Free</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <img src="{{ asset('build') }}/assets/images/img-1.png" alt="">
            </div>
        </div>
    </div>
</x-app-layout>
