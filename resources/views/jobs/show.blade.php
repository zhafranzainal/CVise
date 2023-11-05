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

                    <li><strong>Responsibilities:</strong>
                        <ul>
                            @foreach (json_decode($job['responsibilities']) as $responsibility)
                                <li>{{ $responsibility }}</li>
                            @endforeach
                        </ul>
                    </li>

                    <li><strong>Technical Skills:</strong>
                        <ul>
                            @foreach (json_decode($job['technical_skills']) as $skill)
                                <li>{{ $skill }}</li>
                            @endforeach
                        </ul>
                    </li>

                    <li><strong>Soft Skills:</strong>
                        <ul>
                            @foreach (json_decode($job['soft_skills']) as $soft_skill)
                                <li>{{ $soft_skill }}</li>
                            @endforeach
                        </ul>
                    </li>

                    <li><strong>Minimum Salary:</strong> RM{{ number_format($job['salary_min'], 0, '.', ',') }}</li>
                    <li><strong>Maximum Salary:</strong> RM{{ number_format($job['salary_max'], 0, '.', ',') }}</li>
                    <br>

                    <li><strong>Programming Languages:</strong>
                        @if ($job['programming_languages'])
                            <ul>
                                @foreach (json_decode($job['programming_languages']) as $language)
                                    <li>{{ $language }}</li>
                                @endforeach
                            </ul>
                        @else
                            <ul>
                                <li>N/A</li>
                            </ul>
                        @endif
                    </li>

                    <li><strong>Tools:</strong>
                        <ul>
                            @foreach (json_decode($job['tools']) as $tool)
                                <li>{{ $tool }}</li>
                            @endforeach
                        </ul>
                    </li>

                    <li><strong>Career Progression:</strong> {{ $job['career_progression'] }}</li>
                    <li><strong>Job Outlook:</strong> {{ $job['job_outlook'] }}</li>
                    <br>

                    <li><strong>Pros:</strong>
                        <ul>
                            @foreach (json_decode($job['pros']) as $pro)
                                <li>{{ $pro }}</li>
                            @endforeach
                        </ul>
                    </li>

                    <li><strong>Cons:</strong>
                        <ul>
                            @foreach (json_decode($job['cons']) as $con)
                                <li>{{ $con }}</li>
                            @endforeach
                        </ul>
                    </li>

                </div>
            </div>

        </div>

    </div>

</x-app-layout>
