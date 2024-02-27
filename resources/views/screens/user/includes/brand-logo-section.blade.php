<section class="brand-logo-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brands-logo-area">
                    @foreach ($categories as $category)
                    <div class="brands-logo">
                        <a href="{{ route('shop') }}"><img class="img-fluid" src="{{ asset($category->image) }}" alt="" srcset=""></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
