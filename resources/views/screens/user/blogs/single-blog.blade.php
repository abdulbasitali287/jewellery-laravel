@extends('layouts.app')
@section('content')
<section class="single-blog-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-btm-area">
                    <a class="shop-banner-text" href="index.php">Home</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <a class="shop-banner-text" href="blog.php">Blog</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <span class="shop-banner-text color">Fashion</span>
                </div>
                <div class="text-center mt-5 mb-5">
                    <h1 class="shop-banner-title">Fashion</h1>
                </div>
                <div class="">
                    <button type="button" class="sngblog-btn">
                        <i class="bi bi-funnel"></i>
                            filter
                    </button>
                </div>
            </div>
            <div class="col-lg-9 col-12 pr-40px">
                <div class="row">
                    <div class="col-12">
                        <div class="blogs-main-area">
                            <div class="blog-img-area">
                                <a href="blog-detail.php"><img class="blog-img img-fluid w-100" src="{{ asset('assets/user/images/blog-img-2.jpg') }}" alt=""></a>
                            </div>
                            <div class="Journal-pro-descrip">
                                <div class="journal-slider-label">
                                    <a class="journal-label-area" href="single-blog.php">
                                        Fashion
                                    </a>
                                </div>
                                <div class="Journal-pro-header">
                                    <a href="blog.php">
                                        <span class="admin-text">admin</span>
                                    </a>
                                    <a href="blog-detail.php">
                                        <span class="date">February 17, 2023</span>
                                    </a>
                                </div>
                                <h2 class="Journal-pro-title">
                                    <a href="blog-detail.php">How to Style a Quiff</a>
                                </h2>
                                <span class="Journal-btm-text">Pommy ipsum the chippy one would like the chippy chav copped a bollocking cornish pasty, how's your father ey up superb complete mare every fortnight</span>
                                <a class="Continue-Reading-a" href="blog-detail.php">Continue Reading</a>
                            </div>
                        </div>
                    </div>
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
                                        <li class="category-link">
                                            <a href="single-blog.php">Accessories</a>
                                        </li>
                                        <li class="category-link">
                                            <a href="single-blog.php">Collection</a>
                                        </li>
                                        <li class="category-link">
                                            <a href="single-blog.php">Fashion</a>
                                        </li>
                                        <li class="category-link">
                                            <a href="single-blog.php">Jewelry</a>
                                        </li>
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
                                    <div class="recents-post-area">
                                        <div class="recents-post-img-area">
                                            <a href="blog-detail.php"><img class="img-fluid" src="{{ asset('assets/user/images/blog-post-img-1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="recents-post-discrip-area">
                                            <a class="recent-post-title" href="blog-detail.php">Christmas Gift Guide</a>
                                            <span class="recent-post-date">FEBRUARY 17, 2023</span>
                                        </div>
                                    </div>
                                    <div class="recents-post-area">
                                        <div class="recents-post-img-area">
                                            <a href="blog-detail.php"><img class="img-fluid" src="{{ asset('assets/user/images/blog-post-img-1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="recents-post-discrip-area">
                                            <a class="recent-post-title" href="blog-detail.php">Christmas Gift Guide</a>
                                            <span class="recent-post-date">FEBRUARY 17, 2023</span>
                                        </div>
                                    </div>
                                    <div class="recents-post-area">
                                        <div class="recents-post-img-area">
                                            <a href="blog-detail.php"><img class="img-fluid" src="{{ asset('assets/user/images/blog-post-img-1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="recents-post-discrip-area">
                                            <a class="recent-post-title" href="blog-detail.php">Christmas Gift Guide</a>
                                            <span class="recent-post-date">FEBRUARY 17, 2023</span>
                                        </div>
                                    </div>
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
    const blogFilterBtn = document.querySelector(".sngblog-btn");
    const blogFilter = document.querySelector(".blog-filter-area");
    const blogFilterClose = document.querySelector(".blog-fil-btn-cls");


blogFilterBtn.addEventListener("click", () => {
    blogFilter.classList.toggle("active");
});
blogFilterClose.addEventListener("click", () => {
    blogFilter.classList.remove("active");
});

</script>
@endsection
