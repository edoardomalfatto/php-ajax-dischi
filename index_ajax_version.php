<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>Vue Dischi</title>
</head>

<body class="darkblue">
    <div id="app">
        <div class="wrapper">

            <header>
                <div class="logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/1024px-Spotify_logo_without_text.svg.png" alt="Spotify Logo" srcset="">
                </div>
            </header>

            <main class="darkblue">
                <div class="diskboxs_container">
                    <div v-for="diskbox in diskBoxes" class="diskbox black">
                        <div class="poster">
                            <img :src="diskbox.poster" alt="">
                        </div>
                        <div class="description">
                            <div class="title">
                                <h2>{{diskbox.title}}</h2>
                            </div>
                            <div class="author">
                                <p>{{diskbox.author}}</p>
                            </div>
                            <div class="year little_text">
                                <p>{{diskbox.year}}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </main>

        
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>