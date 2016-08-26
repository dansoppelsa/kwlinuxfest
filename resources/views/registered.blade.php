<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> The Kitchener Waterloo Area Linux Conference Website</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/palette.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

</head>
<body>
     <!-- hero-content   -->
    <section class="hero flex flex-center-center">
        <div class="hero-content text-center">
            @if($speaker == true)
            <h1 class="hero-lead"> Thanks for registering to speak! </h1>
            @else
            <h1 class="hero-lead"> Thanks for registering to attend! </h1>
            @endif
            <a href="{{url('/')}}" class="hero-btn rounded"> Back </a>
        </div>
    </section>

   
</body>
</html>



