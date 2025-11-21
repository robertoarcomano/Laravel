<head>
    <style>
        body {
            color: darkgray;
        }
        a {
            text-decoration: none; /* rimuove la sottolineatura */
            color: #1a73e8;        /* colore blu “decente”, puoi cambiare */
        }

        /* Opzionale: colore diverso al passaggio del mouse */
        a:hover {
            color: #1558b0;        /* un blu più scuro quando il mouse passa sopra */
        }
    </style>
</head>
<body bgcolor="#212121">
<center>
<H1>Welcome to Laravel</H2>
<br><br>
@foreach ($links as $link)
    <a href="{{$link['url']}}">{{$link['content']}}</a>
    <br><br>    
@endforeach

<a href="/api/users">/api/users</a>
</center>
</body>