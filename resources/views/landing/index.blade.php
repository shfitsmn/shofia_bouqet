@extends('layouts.landing.index')

@section('title', 'Landing')

@section('isi')
<section id="billboard" class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="section-title text-center mt-4" data-aos="fade-up">New
                Bouquet Collections</h1>
            <div class="col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
                <p>Temukan rangkaian buket bunga terbaru kami yang dirancang
                    khusus untuk momen istimewa Anda. Setiap
                    buket dibuat dengan penuh cinta dan perhatian untuk
                    memberikan kesan terbaik.</p>
            </div>
        </div>
        <div class="row">
            <div class="swiper main-swiper py-4" data-aos="fade-up" data-aos-delay="600">
                <div class="swiper-wrapper d-flex border-animation-left">
                    <!-- Buket 1 -->
                    <div class="swiper-slide">
                        <div class="banner-item image-zoom-effect">
                            <div class="image-holder">
                                <a href="#">
                                    <img src="{{ asset('assets-landing/images/bouqet1.jpg') }}" alt="Bouquet 1"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="banner-content py-4">
                                <h5 class="element-title text-uppercase">
                                    <a href="#" class="item-anchor">Elegant Rose
                                        Bouquet</a>
                                </h5>
                                <p>Rangkaian bunga mawar merah yang elegan,
                                    sempurna untuk menyampaikan cinta Anda.</p>
                                <div class="btn-left">
                                    <a href="#"
                                        class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Buket 2 -->
                    <div class="swiper-slide">
                        <div class="banner-item image-zoom-effect">
                            <div class="image-holder">
                                <a href="#">
                                    <img src="{{ asset('assets-landing/images/bouqet2.jpg') }}" alt="Bouquet 2"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="banner-content py-4">
                                <h5 class="element-title text-uppercase">
                                    <a href="#" class="item-anchor">Bright
                                        Sunflower Bouquet</a>
                                </h5>
                                <p>Buket bunga matahari cerah untuk membawa
                                    kebahagiaan pada hari istimewa Anda.</p>
                                <div class="btn-left">
                                    <a href="#"
                                        class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Buket 3 -->
                    <div class="swiper-slide">
                        <div class="banner-item image-zoom-effect">
                            <div class="image-holder">
                                <a href="#">
                                    <img src="{{ asset('assets-landing/images/bouqet3.jpg') }}" alt="Bouquet 3"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="banner-content py-4">
                                <h5 class="element-title text-uppercase">
                                    <a href="#" class="item-anchor">Pastel
                                        Peony Bouquet</a>
                                </h5>
                                <p>Bunga peony pastel yang lembut untuk
                                    menyampaikan keindahan dan kelembutan
                                    perasaan.
                                </p>
                                <div class="btn-left">
                                    <a href="#"
                                        class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>


<section class="features py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="0">
                <div class="py-5">
                    <svg width="38" height="38" viewBox="0 0 24 24">
                        <use xlink:href="#calendar"></use>
                    </svg>
                    <h4 class="element-title text-capitalize my-3">Pesan Hari
                        Ini</h4>
                    <p>Kami menyediakan layanan pemesanan cepat untuk memastikan
                        momen Anda tetap sempurna.</p>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="300">
                <div class="py-5">
                    <svg width="38" height="38" viewBox="0 0 24 24">
                        <use xlink:href="#shopping-bag"></use>
                    </svg>
                    <h4 class="element-title text-capitalize my-3">Antar ke
                        Lokasi</h4>
                    <p>Pengiriman tepat waktu ke lokasi pilihan Anda, memastikan
                        buket tetap segar.</p>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="600">
                <div class="py-5">
                    <svg width="38" height="38" viewBox="0 0 24 24">
                        <use xlink:href="#gift"></use>
                    </svg>
                    <h4 class="element-title text-capitalize my-3">Kemas dengan
                        Cinta</h4>
                    <p>Kemasan khusus yang dirancang untuk menambah kesan
                        istimewa pada hadiah Anda.</p>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="900">
                <div class="py-5">
                    <svg width="38" height="38" viewBox="0 0 24 24">
                        <use xlink:href="#arrow-cycle"></use>
                    </svg>
                    <h4 class="element-title text-capitalize my-3">Pengembalian
                        Mudah</h4>
                    <p>Kepuasan Anda adalah prioritas kami. Kami menyediakan
                        layanan pengembalian mudah.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="categories overflow-hidden">
    <div class="container">
        <div class="open-up" data-aos="zoom-out">
            <div class="row">
                <!-- Kategori Buket Romantis -->
                <div class="col-md-4">
                    <div class="cat-item image-zoom-effect">
                        <div class="image-holder">
                            <a href="#romantic-bouquets">
                                <img src="{{ asset('assets-landing/images/romantic-bouqet.jpg') }}"
                                    alt="Romantic Bouquets" class="product-image img-fluid">
                            </a>
                        </div>
                        <div class="category-content">
                            <div class="product-button">
                                <a href="#romantic-bouquets" class="btn btn-common text-uppercase">Romantic Bouquets</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kategori Buket Ulang Tahun -->
                <div class="col-md-4">
                    <div class="cat-item image-zoom-effect">
                        <div class="image-holder">
                            <a href="#birthday-bouquets">
                                <img src="{{ asset('assets-landing/images/birthday-bouqet.jpg') }}"
                                    alt="Birthday Bouquets" class="product-image img-fluid">
                            </a>
                        </div>
                        <div class="category-content">
                            <div class="product-button">
                                <a href="#birthday-bouquets" class="btn btn-common text-uppercase">Birthday Bouquets</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kategori Buket Pernikahan -->
                <div class="col-md-4">
                    <div class="cat-item image-zoom-effect">
                        <div class="image-holder">
                            <a href="#wedding-bouquets">
                                <img src="{{ asset('assets-landing/images/wedding-bouqet.jpg') }}"
                                    alt="Wedding Bouquets" class="product-image img-fluid">
                            </a>
                        </div>
                        <div class="category-content">
                            <div class="product-button">
                                <a href="#wedding-bouquets" class="btn btn-common text-uppercase">Wedding Bouquets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="new-arrival" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
            <h4 class="text-uppercase">New Bouquet Arrivals</h4>
            <a href="#all-products" class="btn-link">View All Bouquets</a>
        </div>
        <div class="swiper product-swiper open-up" data-aos="zoom-out">
            <div class="swiper-wrapper d-flex">
                <!-- Buket 1 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="#bouquet-1">
                                <img src="{{ asset('assets-landing/images/bouqet1.jpg') }}" alt="Elegant Rose Bouquet"
                                    class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="element-title text-uppercase fs-5 mt-3">
                                    <a href="#bouquet-1">Elegant Rose Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp450.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buket 2 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="#bouquet-2">
                                <img src="{{ asset('assets-landing/images/bouqet2.jpg') }}"
                                    alt="Bright Sunflower Bouquet" class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="element-title text-uppercase fs-5 mt-3">
                                    <a href="#bouquet-2">Bright Sunflower Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp350.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buket 3 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="#bouquet-3">
                                <img src="{{ asset('assets-landing/images/bouqet3.jpg') }}" alt="Pastel Peony Bouquet"
                                    class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="element-title text-uppercase fs-5 mt-3">
                                    <a href="#bouquet-3">Pastel Peony Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp400.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buket 4 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="#bouquet-4">
                                <img src="{{ asset('assets-landing/images/bouqet4.jpg') }}" alt="Blush Pink Bouquet"
                                    class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="element-title text-uppercase fs-5 mt-3">
                                    <a href="#bouquet-4">Blush Pink Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp500.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="icon-arrow icon-arrow-left">
            <svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-left"></use>
            </svg>
        </div>
        <div class="icon-arrow icon-arrow-right">
            <svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </div>
    </div>
</section>


<section class="collection bg-light position-relative py-5">
    <div class="container">
        <div class="row">
            <div class="title-xlarge text-uppercase txt-fx domino">Bouquet Collection</div>
            <div class="collection-item d-flex flex-wrap my-5">
                <!-- Gambar Koleksi -->
                <div class="col-md-6 column-container">
                    <div class="image-holder">
                        <img src="{{ asset('assets-landing/images/bouqet-collection.jpg') }}" alt="Bouquet Collection"
                            class="product-image img-fluid">
                    </div>
                </div>
                <!-- Deskripsi Koleksi -->
                <div class="col-md-6 column-container bg-white">
                    <div class="collection-content p-5 m-0 m-md-5">
                        <h3 class="element-title text-uppercase">Exclusive Bouquet Collection</h3>
                        <p>Jelajahi koleksi eksklusif buket bunga kami yang dirancang untuk berbagai momen spesial.
                            Dengan kombinasi bunga segar pilihan, setiap buket memberikan kesan indah dan abadi.</p>
                        <p>Koleksi ini mencakup buket untuk acara romantis, ulang tahun, hingga pernikahan.
                            Jadikan hari spesial Anda lebih berkesan dengan buket kami!</p>
                        <a href="#all-collections" class="btn btn-dark text-uppercase mt-3">Shop Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="best-sellers" class="best-sellers product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
            <h4 class="text-uppercase">Best Selling Bouquets</h4>
            <a href="#all-products" class="btn-link">View All Bouquets</a>
        </div>
        <div class="swiper product-swiper open-up" data-aos="zoom-out">
            <div class="swiper-wrapper d-flex">
                <!-- Buket 1 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="#bestseller-1">
                                <img src="{{ asset('assets-landing/images/bouqet-bestseller1.jpg') }}"
                                    alt="Romantic Rose Bouquet" class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="#bestseller-1">Romantic Rose Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp450.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buket 2 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="#bestseller-2">
                                <img src="{{ asset('assets-landing/images/bouqet-bestseller2.jpg') }}"
                                    alt="Bright Sunflower Bouquet" class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="#bestseller-2">Bright Sunflower Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp350.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buket 3 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="#bestseller-3">
                                <img src="{{ asset('assets-landing/images/bouqet-bestseller3.jpg') }}"
                                    alt="Pastel Peony Bouquet" class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="#bestseller-3">Pastel Peony Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp400.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buket 4 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="#bestseller-4">
                                <img src="{{ asset('assets-landing/images/bouqet-bestseller4.jpg') }}"
                                    alt="Blush Pink Bouquet" class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="#bestseller-4">Blush Pink Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp500.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="icon-arrow icon-arrow-left">
            <svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-left"></use>
            </svg>
        </div>
        <div class="icon-arrow icon-arrow-right">
            <svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </div>
    </div>
</section>

<section class="testimonials py-5 bg-light">
    <div class="section-header text-center mt-5">
        <h3 class="section-title text-uppercase">What Our Customers Say</h3>
    </div>
    <div class="swiper testimonial-swiper overflow-hidden my-5">
        <div class="swiper-wrapper d-flex">
            <!-- Testimoni 1 -->
            <div class="swiper-slide">
                <div class="testimonial-item text-center">
                    <blockquote>
                        <p>“Buket bunga ini sangat indah! Saya membelinya untuk ulang tahun ibu saya, dan dia sangat
                            menyukainya. Terima kasih untuk layanan yang luar biasa!”</p>
                        <div class="review-title text-uppercase">- Amelia</div>
                    </blockquote>
                </div>
            </div>
            <!-- Testimoni 2 -->
            <div class="swiper-slide">
                <div class="testimonial-item text-center">
                    <blockquote>
                        <p>“Rangkaian bunga yang sangat elegan. Buket ini membuat pernikahan saya semakin spesial. Saya
                            pasti akan memesan lagi di sini!”</p>
                        <div class="review-title text-uppercase">- Jonathan</div>
                    </blockquote>
                </div>
            </div>
            <!-- Testimoni 3 -->
            <div class="swiper-slide">
                <div class="testimonial-item text-center">
                    <blockquote>
                        <p>“Kualitas bunga sangat segar dan harum. Saya sangat puas dengan kemasan dan pengirimannya
                            yang tepat waktu.”</p>
                        <div class="review-title text-uppercase">- Diana</div>
                    </blockquote>
                </div>
            </div>
            <!-- Testimoni 4 -->
            <div class="swiper-slide">
                <div class="testimonial-item text-center">
                    <blockquote>
                        <p>“Saya membeli buket untuk anniversary kami, dan pasangan saya sangat terkesan. Sangat
                            direkomendasikan!”</p>
                        <div class="review-title text-uppercase">- Michael</div>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-swiper-pagination d-flex justify-content-center mb-5"></div>
</section>


<section id="related-products" class="related-products product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
            <h4 class="text-uppercase">You May Also Like</h4>
            <a href="#all-products" class="btn-link">View All Bouquets</a>
        </div>
        <div class="swiper product-swiper open-up" data-aos="zoom-out">
            <div class="swiper-wrapper d-flex">
                <!-- Buket 1 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="#bouquet-1">
                                <img src="{{ asset('assets-landing/images/bouqet1.jpg') }}" alt="Romantic Rose Bouquet"
                                    class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="#bouquet-1">Romantic Rose Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp450.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buket 2 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="#bouquet-2">
                                <img src="{{ asset('assets-landing/images/bouqet2.jpg') }}"
                                    alt="Bright Sunflower Bouquet" class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="#bouquet-2">Bright Sunflower Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp350.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buket 3 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="#bouquet-3">
                                <img src="{{ asset('assets-landing/images/bouqet3.jpg') }}" alt="Pastel Peony Bouquet"
                                    class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="#bouquet-3">Pastel Peony Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp400.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buket 4 -->
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="#bouquet-4">
                                <img src="{{ asset('assets-landing/images/bouqet4.jpg') }}" alt="Blush Pink Bouquet"
                                    class="product-image img-fluid">
                            </a>
                            <a href="#wishlist" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="#bouquet-4">Blush Pink Bouquet</a>
                                </h5>
                                <a href="#" class="text-decoration-none"
                                    data-after="Add to cart"><span>Rp500.000</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="icon-arrow icon-arrow-left">
            <svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-left"></use>
            </svg>
        </div>
        <div class="icon-arrow icon-arrow-right">
            <svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </div>
    </div>
</section>

<section class="logo-bar py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="logo-content d-flex flex-wrap justify-content-between">
                <img src="{{ asset('assets-landing/images/logo1.png') }}" alt="logo" class="logo-image img-fluid">
                <img src="{{ asset('assets-landing/images/logo2.png') }}" alt="logo" class="logo-image img-fluid">
                <img src="{{ asset('assets-landing/images/logo3.png') }}" alt="logo" class="logo-image img-fluid">
                <img src="{{ asset('assets-landing/images/logo4.png') }}" alt="logo" class="logo-image img-fluid">
                <img src="{{ asset('assets-landing/images/logo5.png') }}" alt="logo" class="logo-image img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="newsletter bg-light"
    style="background: url({{ asset('assets-landing/images/pattern-bg.png') }}) no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 py-5 my-5">
                <div class="subscribe-header text-center pb-3">
                    <h3 class="section-title text-uppercase">Sign Up for our
                        newsletter</h3>
                </div>
                <form id="form" class="d-flex flex-wrap gap-2">
                    <input type="text" name="email" placeholder="Your Email Addresss"
                        class="form-control form-control-lg">
                    <button class="btn btn-dark btn-lg text-uppercase w-100">Sign
                        Up</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="instagram position-relative">
    <div class="d-flex justify-content-center w-100 position-absolute bottom-0 z-1">
        <a href="https://www.instagram.com/adhfry.r/" class="btn btn-dark px-5">Follow us on Instagram</a>
    </div>
    <div class="row g-0">
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="{{ asset('assets-landing/images/bouqet7.jpg') }}" alt="instagram"
                        class="insta-image img-fluid object-fit-cover">
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="{{ asset('assets-landing/images/bouqet8.jpg') }}" alt="instagram"
                        class="insta-image img-fluid object-fit-cover">
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="{{ asset('assets-landing/images/bouqet9.jpg') }}" alt="instagram"
                        class="insta-image img-fluid object-fit-cover">
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="{{ asset('assets-landing/images/bouqet10.jpg') }}" alt="instagram"
                        class="insta-image img-fluid object-fit-cover">
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="{{ asset('assets-landing/images/bouqet5.jpg') }}" alt="instagram"
                        class="insta-image img-fluid object-fit-cover">
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="{{ asset('assets-landing/images/bouqet6.jpg') }}" alt="instagram"
                        class="insta-image img-fluid object-fit-cover">
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
