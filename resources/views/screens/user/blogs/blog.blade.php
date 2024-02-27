@extends('layouts.app')
@section('content')
<section class="blog-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-btm-area">
                    <a class="shop-banner-text" href="index.php">Home</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <span class="shop-banner-text color">Blog</span>
                </div>
                <div class="text-center mt-5 mb-5">
                    <h1 class="shop-banner-title">Blog</h1>
                </div>
            </div>
            <div class="col-lg-9 col-12 pr-40px">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-12">
                        <div class="">
                            <button type="button" class="blog-filter-btn blog-btn">
                                <i class="bi bi-funnel"></i>
                                    filter
                            </button>
                        </div>
                        <div class="blogs-main-area">
                            <div class="blog-img-area">
                                <a href="{{ route('blog.detail',$blog->id) }}"><img class="blog-img img-fluid w-100" src="/{{ $blog->image }}" alt=""></a>
                            </div>
                            <div class="Journal-pro-descrip">
                                <div class="journal-slider-label">
                                    <a class="journal-label-area" href="{{ route('blog.detail',$blog->id) }}">
                                        {{ $blog->name }}
                                    </a>
                                </div>
                                <div class="Journal-pro-header">
                                    <a href="{{ route('blog.detail',$blog->id) }}">
                                        <span class="admin-text">{{ auth()->user()->name }}</span>
                                    </a>
                                    <a href="{{ route('blog.detail',$blog->id) }}">
                                        <span class="date">{{ $blog->created_at->format('M d / Y') }}</span>
                                    </a>
                                </div>
                                <h2 class="Journal-pro-title">
                                    <a href="{{ route('blog.detail',$blog->id) }}">{{ $blog->name }}</a>
                                </h2>
                                <span class="Journal-btm-text">{{ $blog->short_description }}</span>
                                <a class="Continue-Reading-a" href="{{ route('blog.detail',$blog->id) }}">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="blog-filter-area">
                <button type="button" class="blog-fil-btn-cls"><i class="fa-solid fa-xmark"></i></button>
                    <div class="blog-search-field-area">
                        <form>
                            <div class="blog-search">
                                <input type="text" name="" id="" placeholder="Search ...">
                                <button class="blog-search-btn"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Categories
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <ul class="categories-link-area">
                                        @foreach ($categories as $category)
                                            <li class="category-link">
                                                <a href="single-blog.php">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Recent Posts
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show show">
                                <div class="accordion-body">
                                    @foreach ($blogs as $blog)
                                    <div class="recents-post-area">
                                        <div class="recents-post-img-area">
                                            <a href="{{ route('blog.detail',$blog->id) }}"><img class="img-fluid" src="/{{ $blog->image }}" alt=""></a>
                                        </div>
                                        <div class="recents-post-discrip-area">
                                            <a class="recent-post-title" href="{{ route('blog.detail',$blog->id) }}">{{ $blog->name }}</a>
                                            <span class="recent-post-date">{{ $blog->created_at->format('M d / Y') }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Tags
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="blog-tags-area">
                                        <a class="blog-tag" href="single-blog.php">Accessories</a>
                                        <a class="blog-tag" href="single-blog.php">Collections</a>
                                        <a class="blog-tag" href="single-blog.php">Fashion</a>
                                        <a class="blog-tag" href="single-blog.php">Jewellery</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const blogFilterBtn = document.querySelector(".blog-btn");
const blogFilter = document.querySelector(".blog-filter-area");
const blogFilterClose = document.querySelector(".blog-fil-btn-cls");


blogFilterBtn.addEventListener("click", () => {
    blogFilter.classList.add("active");
});
blogFilterClose.addEventListener("click", () => {
    blogFilter.classList.remove("active");
});

</script>
@endsection
