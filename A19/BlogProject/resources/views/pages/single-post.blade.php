<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.css') }}">

    <style>
        .post-heading{
            position: relative;
            width:100%;
            height: 50vh;
        }
        .post-meta{
            width: 100%;
            height: 100%;
            position: absolute;
            top:0%;
            left:0%;
            background-color: rgba(0, 0, 0, 0.445);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding:20px 10px 20px;
        }
    </style>
</head>

<body>

@include('partials.nav')

<div class="post-heading">
    <img src="{{$post->blog_img_url}}" alt="" style="width: 100%; height:100%; object-fit:cover">
    <div class="post-meta">
        <div>
            <span class="text-info">{{$post->category->name}}</span>
            <span class="text-white"> &#x2022; </span>
            <span class="text-white">{{$post->published_at}}</span>
        </div>
        <h2 class="text-white h1 fw-bolder">{{$post->title}}</h2>
        <div>
            <span class="text-white">by</span> <span class="text-white h4">{{$post->author->name}}</span>
        </div>
    </div>
</div>
<div class="post-content py-5 px-2">
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            {{$post->content}}
        </div>
    </div>
</div>
</body>
</html>