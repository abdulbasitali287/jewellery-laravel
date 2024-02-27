@extends('layouts.app')
@section('content')
<section class="blog-detail-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-btm-area">
                    <a class="shop-banner-text" href="index.php">Home</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <a class="shop-banner-text" href="single-blog.php">Accessories</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <span class="shop-banner-text color">Christmas Gift Guide</span>
                </div>
            </div>
            <div class="col-lg-9 col-12 pr-40px">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-detail-main-area">
                            <div class="blog-filter-btn-area position-relative">
                                <div class="blog-detail-header">
                                    <a class="blog-detail-tag" href="single-blog.php">Accessories</a>
                                    <h1 class="blog-detail-title">{{ $blog->name }}</h1>
                                    <div class="Journal-pro-header">
                                        <a href="blog.php">
                                            <span class="admin-text">{{ auth()->user()->name }}</span>
                                        </a>
                                        <a href="blog-detail.php">
                                            <span class="date">{{ $blog->created_at->format('M d / Y') }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-detail-img">
                                <img class="img-fluid blog-img" src="/{{ $blog->image }}" alt="">
                            </div>
                            <div class="blog-detail-center-area">
                                <p class="blog-detail-discrip">{{ $blog->description }}</p>
                            </div>
                            <div class="tag-social-icon-area">
                                <div class="">
                                    <label class="tag-label">Tags:</label>
                                    <a class="blog-tag" href="single-blog.php">Accessories</a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label class="tag-label">Share:</label>
                                    <ul class="social-icon-inner-area">
                                        <li class="social-icon">
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#"><i class="fa-brands fa-telegram"></i></a>
                                        </li>
                                        <li class="social-icon">
                                            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-next-pre-area">
                                <a href="#" class="blog-pre-area">
                                    <div class="">
                                        <i class="fa-solid blog-pre-icon fa-angle-left"></i>
                                    </div>
                                    <div class="">
                                        <span class="next-pre-sp">PREVIOUS</span>
                                        <h2 class="next-pre-title">How to Style a Quiff</h2>
                                    </div>
                                </a>
                                <a href="#" class="blog-next-area">
                                    <div class="">
                                        <span class="next-pre-sp">next</span>
                                        <h2 class="next-pre-title">Christmas Gift Guide</h2>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid blog-next-icon fa-angle-right"></i>
                                    </div>
                                </a>
                            </div>
                            <form class="blog-comment-form">
                                <h2 class="next-pre-title">LEAVE YOUR COMMENT</h2>
                                <p class="blog-comment-p">Your email address will not be published. Required fields are marked *</p>
                                <div class="comment-fleids-area">
                                    <textarea class="comment-fleids-input-area text-area" name="" id="" cols="30" rows="10" placeholder="Comment *"></textarea>
                                    <div class="comments-input-area">
                                        <div class="">
                                            <input class="comment-fleids-input-area" type="text" name="" id="" placeholder="Name *">
                                        </div>
                                        <div class="">
                                            <input class="comment-fleids-input-area" type="text" name="" id="" placeholder="Email *">
                                        </div>
                                        <div class="">
                                            <input class="comment-fleids-input-area" type="text" name="" id="" placeholder="Website">
                                        </div>
                                    </div>
                                    <label class="save-email-label" for="save-email-checkbox">
                                        <input type="checkbox" name="" id="save-email-checkbox">
                                        Save My Name, Email, And Website In This Browser For The Next Time I Comment.
                                    </label>
                                    <button class="comment-post-btn">Post Comment</button>
                                </div>
                            </form>
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
    const blogFilterBtn = document.querySelector(".blog-filter-btn");
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
