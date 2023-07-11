<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.css') }}">
</head>

<body>

@include('partials.nav')

<div class="d-flex justify-content-center">
  <div class="col-md-8 pt-4">
    <span class="p  text-info">Explore new horizon</span>
    <h3 class="h1 fw-bolder text-dark">Blog Posts</h3>
    <div class="post-items">
    </div>
  </div>
</div>


<script src="{{ asset('assets/axios.js') }}"></script>
<script>
window.addEventListener("load", (event) => {
axios.get('/api/posts')
.then(function (response) {
    console.log(response.data.data)
    let posts_container = document.querySelector('.post-items')
    posts_container.innerHtml = ''

    let post_items = ''

    response.data.data.forEach(post => {
        post_items+=
        `
        <div class="post-item row my-4">
            <div class="col-md-4">
                <img src="${post.blog_img_url}" alt="" class="rounded" style="width:100%;height:160px; object-fit:cover">
            </div>
            <div class="col-md-8">
                <a href="/posts/${post.slug}" class="text-decoration-none">
                    <h3 class="h5 fw-bold text-dark">
                        ${post.title}
                    </h3>
                </a>
                <div>
                    <span class="text-info"> ${post.author.name}</span>
                    <span class="text-secondary"> &#x2022; </span>
                    <span class="text-secondary ms-2">${post.published_at}</span>
                </div>
                <div>
                    <p class="post-excerpt my-2 text-secondary">
                        ${post.excerpt}
                    </p>
                </div>
            </div>

        </div>

        `
    });

    posts_container.insertAdjacentHTML('beforeend',post_items)
})

});

</script>

</body>
</html>
