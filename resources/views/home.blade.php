<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        ul{
            list-style-type: none;
        }
        header{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            background-color: black;
            border-bottom: 3px solid lime;
        }
        header ul{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }
        a{
            text-decoration: none;
            color: lime;
            font-weight: bold;
            text-transform: uppercase;
        }
        main{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5rem;
            background-color: black;
            color: lime; 
            min-height: calc(100vh - 100px);
        }
        main ul{
            width: 50%;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            text-align: center;
        }

    </style>
</head>
<body>
    <header>
        <ul>
            @forelse($links as $link)
                <li>
                    <a href="{{route($link['route'])}}">{{$link['text']}}</a>
                </li>
            @empty 
                <h2>No links were found</h2>
            @endforelse
        </ul>
    </header>

    <main>
        <h2>Lorems</h2>
        <ul>
            @forelse($texts as $lorem)
                <li>
                    <p>{{$lorem}}</p>
                </li>
            @empty 
                <h2>No lorems were found</h2>
            @endforelse
        </ul>
    </main>
</body>
</html>