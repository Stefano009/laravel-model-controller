<main>
    <div class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <div class="photo">
                        <p>
                            missing image
                        </p>
                </div>
                <div class="text-card red">
                    <h3>
                        Id: {{ $movie['id'] }}
                    </h3>
                </div>
                <div class="text-card blue">
                    <h3>
                        titolo: {{ $movie['title'] }}
                    </h3>
                </div>
                <div class="text-card green">
                    <h3>
                        titolo originale: {{ $movie['original_title'] }}
                    </h3>
                </div>
                <div class="text-card yellow">
                    <h3>
                        Paese: {{ $movie['nationality'] }}
                    </h3>
                </div>
                <div class="text-card orange">
                    <h3>
                        data d'uscita: {{ $movie['date'] }}
                    </h3>
                </div>
            </div>
        @endforeach
    </div>
</main>