<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Posts by Category</title>
</head>

<body>
    <div>
        <div class="container">
            <h1>Latest Posts by Category</h1>
    
            <ul>
                @foreach ($categories as $category)
                    <li>
                        <h2>{{ $category->name }}</h2>
                        @if ($category->latestPost)
                            <h3>{{ $category->latestPost->title }}</h3>
                            <p>{{ $category->latestPost->content }}</p>
                        @else
                            <p>No posts found for this category</p>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>

</html>