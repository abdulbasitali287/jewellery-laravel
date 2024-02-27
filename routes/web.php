<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\BathroomHotelController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ImageProductController;
use App\Http\Controllers\Admin\LatestCollectionController;
use App\Http\Controllers\Admin\MetaSectionController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StripeController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VariantController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\ContactUsController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\NewsLetterController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\User\ShippingController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\User\WishlistController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' =>  ['admin']], function () {
        Route::get('/admin', [HomeController::class, 'adminIndex'])->name('admin.index');
        Route::prefix('admin/')->group(function () {
            Route::prefix('category/')->controller(CategoryController::class)->group(function () {
                Route::get('create', 'create')->name('category.create');
                Route::post('store', 'store')->name('category.store');
                Route::get('show', 'index')->name('category.show');
                Route::get('edit/{category}', 'edit')->name('category.edit');
                Route::post('update/{category}', 'update')->name('category.update');
                Route::post('destroy/{category}', 'destroy')->name('category.destroy');
            });

            Route::prefix('product/')->controller(ProductController::class)->group(function () {
                Route::get('create', 'create')->name('product.create');
                Route::post('store', 'store')->name('product.store');
                Route::get('show', 'index')->name('product.show');
                Route::get('edit/{product}', 'edit')->name('product.edit');
                Route::post('update/{product}', 'update')->name('product.update');
                Route::post('destroy/{product}', 'destroy')->name('product.destroy');
                Route::get('variant/{variant}', 'loadVariant')->name('product.variant');
            });

            Route::prefix('attribute/')->controller(AttributeController::class)->group(function () {
                Route::get('create', 'create')->name('attribute.create');
                Route::post('store', 'store')->name('attribute.store');
                Route::get('show', 'index')->name('attribute.show');
                Route::get('edit/{attribute}', 'edit')->name('attribute.edit');
                Route::post('update/{attribute}', 'update')->name('attribute.update');
                Route::post('destroy/{attribute}', 'destroy')->name('attribute.destroy');
            });

            Route::prefix('image-product/')->controller(ImageProductController::class)->group(function () {
                Route::get('create', 'create')->name('image.product.create');
                Route::post('store', 'store')->name('image.product.store');
                Route::get('show', 'index')->name('image.product.show');
                Route::get('edit/{image_product}', 'edit')->name('image.product.edit');
                Route::post('update/{image_product}', 'update')->name('image.product.update');
                Route::post('destroy/{image_product}', 'destroy')->name('image.product.destroy');
            });

            Route::prefix('blogs/')->controller(BlogController::class)->group(function () {
                Route::get('create', 'create')->name('blogs.create');
                Route::post('store', 'store')->name('blogs.store');
                Route::get('show', 'index')->name('blogs.show');
                Route::get('edit/{blogs}', 'edit')->name('blogs.edit');
                Route::post('update/{blogs}', 'update')->name('blogs.update');
                Route::post('destroy/{blogs}', 'destroy')->name('blogs.destroy');
            });

            Route::prefix('stock/')->controller(StockController::class)->group(function () {
                Route::get('index', 'stockList');
                Route::get('create', 'createStock');
                Route::post('store', 'storeStock')->name('stock.store');
            });

            Route::prefix('orders/')->controller(OrderController::class)->group(function () {
                Route::get('/', 'index');
                Route::get('details/{order}', 'details')->name('detail.orders');
            });

            Route::prefix('pages/')->controller(PageController::class)->group(function () {
                Route::get('/', 'index')->name('page.index');
                Route::get('create', 'create')->name('page.create');
                Route::post('store', 'store')->name('page.store');
                Route::get('edit/{page}', 'edit')->name('page.edit');
                Route::post('update/{page}', 'update')->name('page.update');
                Route::post('destroy/{page}', 'destroy')->name('page.destroy');
            });

            Route::prefix('section/')->controller(SectionController::class)->group(function () {
                Route::get('/', 'index')->name('section.index');
                Route::get('create', 'create')->name('section.create');
                Route::post('store', 'store')->name('section.store');
                Route::get('edit/{section}', 'edit')->name('section.edit');
                Route::post('update/{section}', 'update')->name('section.update');
                Route::post('destroy/{section}', 'destroy')->name('section.destroy');
            });
            Route::prefix('latest-collection/')->controller(LatestCollectionController::class)->group(function () {
                Route::get('/', 'index')->name('latest.collection.index');
                Route::get('create', 'create')->name('latest.collection.create');
                Route::post('store', 'store')->name('latest.collection.store');
                Route::get('edit/{latestCollection}', 'edit')->name('latest.collection.edit');
                Route::post('update/{latestCollection}', 'update')->name('latest.collection.update');
                Route::post('destroy/{latestCollection}', 'destroy')->name('latest.collection.destroy');
            });

            // Route::prefix('stripe/')->controller(PaymentController::class)->group(function () {
            //     Route::get('/', 'stripe')->name('stripe.index');
            //     Route::post('/payment', 'charge')->name('payment');
            // });

            // Route::post('stripe', [StripeController::class, 'stripe'])->name('stripe');
            // Route::get('success', [StripeController::class, 'success'])->name('success');
            // Route::get('cancel', [StripeController::class, 'cancel'])->name('cancel');

            Route::prefix('users')->name('users.')->controller(UserController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/assign-role/{user}', 'role')->name('assign.role');
                Route::post('/assign-role/{user}', 'assignedRole')->name('assigned.role');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{user}', 'edit')->name('edit');
                Route::post('/update/{user}', 'update')->name('update');
                Route::post('/destroy/{user}', 'destroy')->name('destroy');
            });

            Route::prefix('permission')->name('permission.')->controller(PermissionController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{permission}', 'edit')->name('edit');
                Route::post('/update/{permission}', 'update')->name('update');
                Route::post('/destroy/{permission}', 'destroy')->name('destroy');
            });

            Route::prefix('role')->name('role.')->controller(RoleController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{role}', 'edit')->name('edit');
                Route::post('/update/{role}', 'update')->name('update');
                Route::post('/destroy/{role}', 'destroy')->name('destroy');
                Route::get('/role-permissions', 'rolePermission')->name('role.permissions');
            });


            Route::resource('slider', SliderController::class)->except(['show']);
            Route::resource('hotel-bathrooms', BathroomHotelController::class)->except(['show']);
            Route::resource('testimonial', TestimonialController::class)->except(['show']);

            // ============================================================= //
            // routes for downloads media
            Route::get('downloads', [TestimonialController::class, 'download']);
            // ============================================================= //
        });


        // Route::prefix('meta-section/')->controller(MetaSectionController::class)->group(function(){
        //     Route::get('create', 'create')->name('meta-section.create');
        //     Route::post('store', 'store')->name('meta-section.store');
        // Route::get('/', 'index')->name('section.index');
        // Route::get('edit/{section}', 'edit')->name('section.edit');
        // Route::post('update/{section}', 'update')->name('section.update');
        // Route::post('destroy/{section}', 'destroy')->name('section.destroy');
        // });
    });

    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/blog-detail/{blog}', 'blogDetail')->name('blog.detail');
        Route::get('/blogs', 'blogs')->name('blogs');
        Route::view('/faq', 'screens.user.faq');
        Route::view('/contact', 'screens.user.contact');
        Route::view('/blogs', 'screens.user.blogs.blog');
        Route::view('/blog-detail', 'screens.user.blogs.blog-detail');
        Route::view('/single-blog', 'screens.user.blogs.single-blog');
        Route::get('/categories', 'categories');
        Route::get('/category/products/{category}', 'categoryProducts');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::controller(ContactUsController::class)->group(function () {
        Route::get('/contact', 'index');
        Route::post('/contact', 'store');
    });

    Route::controller(NewsLetterController::class)->group(function () {
        Route::post('/newsletter', 'store');
    });

    Route::controller(ShopController::class)->group(function () {
        Route::get('/shop', 'shop')->name('shop');
        Route::get('/search-products', 'searchProductsByAjax')->name('search.products');
        Route::get('/product-detail/{product}', 'productDetail')->name('product.detail');
        Route::get('/cart', 'cart')->name('cart');
        Route::post('/add-to-cart/{product}', 'addToCart')->name('add.cart');
        Route::get('/remove-to-cart/{product}', 'removeToCart')->name('remove.cart');
        Route::get('/update-cart', 'updateCart')->name('update.cart');
    });

    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/checkout/{cart}', 'index');
        Route::post('/checkout', 'checkoutCreate')->name('checkout');
    });

    Route::controller(WishlistController::class)->group(function () {
        Route::post('wishlist/{product}', 'wishlist');
        Route::get('wishlist/details', 'wishlistDetails');
        Route::post('destroy-wishlist/{wishlist}', 'destroy');
    });

    Route::controller(ReviewController::class)->group(function () {
        Route::post('review', 'reviewStore')->name('review.store');
    });

    Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {
        Route::get('/', 'dashboard');
        Route::get('orders', 'orders');
        Route::get('shipping-address', 'shippingAddress');
        Route::get('shipping-address', '');
        Route::get('billing-address', 'billingAddress');
        Route::get('addresses', 'addresses');
        Route::get('account', 'account');
        Route::get('account-details', 'accountDetails');
        Route::get('order-details/{order}', 'orderDetails')->name('user.order.details');
        // ajax routes
        Route::get('products/{product}', 'productDetails')->name('dashboard.product.detail');
        // profile controller
        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'profile');
            Route::post('profile/update-profile', 'updateProfile')->name('profile.update');
            // Route::get('edit-profile','editProfile');
        });
        Route::controller(ShippingController::class)->group(function () {
            Route::get('shipping-address', 'shippingAddress');
            Route::get('edit-shipping-address', 'editShippingAddress');
            Route::post('shipping-address', 'updateshippingAddress')->name('shipping.address.update');
        });
    });
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'registerView'])->name('register');
    Route::post('/register', [AuthController::class, 'registered']);
});
