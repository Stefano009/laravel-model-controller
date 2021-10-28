<div class="container">
    @foreach ($movies as $movie)
        <div class="card">
            <div class="photo">

            </div>
            <div class="text-card">
                <h3>
                    Id: {{ $movie['id'] }}
                </h3>
            </div>
            <div class="text-card">
                <h3>
                    titolo: {{ $movie['title'] }}
                </h3>
            </div>
            <div class="text-card">
                <h3>
                    titolo originale: {{ $movie['original_title'] }}
                </h3>
            </div>
            <div class="text-card">
                <h3>
                    Paese: {{ $movie['nationality'] }}
                </h3>
            </div>
            <div class="text-card">
                <h3>
                    data d'uscita: {{ $movie['date'] }}
                </h3>
            </div>
        </div>
    @endforeach
</div>