@extends('frontend.app')



@section('content')

  <main>
    <article>


      <section class="section hero" style="background-image: url('{{asset('frontend/assets/images/hero-banner.png')}}')">
        <div class="container">

          <h2 class="h1 hero-title">
            New Summer <strong>Shoes Collection</strong>
          </h2>

          <p class="hero-text">
            Competently expedite alternative benefits whereas leading-edge catalysts for change. Globally leverage
            existing an
            expanded array of leadership.
          </p>

          <button class="btn btn-primary">
            <span>Shop Now</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>
      </section>





      <!--
        - #COLLECTION
      -->

      <section class="section collection">
        <div class="container">

          <ul class="collection-list has-scrollbar">

            <li>
              <div class="collection-card" style="background-image: url('{{asset('frontend')}}/assets/images/collection-1.jpg')">
                <h3 class="h4 card-title">Men Collections</h3>

                <a href="#" class="btn btn-secondary">
                  <span>Explore All</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>

            <li>
              <div class="collection-card" style="background-image: url('{{asset('frontend')}}/assets/images/collection-2.jpg')">
                <h3 class="h4 card-title">Women Collections</h3>

                <a href="#" class="btn btn-secondary">
                  <span>Explore All</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>

            <li>
              <div class="collection-card" style="background-image: url('{{asset('frontend')}}/assets/images/collection-3.jpg')">
                <h3 class="h4 card-title">Sports Collections</h3>

                <a href="#" class="btn btn-secondary">
                  <span>Explore All</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!--
        - #PRODUCT
      -->

      <section class="section product">
        <div class="container">

          <h2 class="h2 section-title">Bestsellers Products</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn  active">All</button>
            </li>

            <li>
              <button class="filter-btn">Nike</button>
            </li>

            <li>
              <button class="filter-btn">Adidas</button>
            </li>

            <li>
              <button class="filter-btn">Puma</button>
            </li>

            <li>
              <button class="filter-btn">Bata</button>
            </li>

            <li>
              <button class="filter-btn">Apex</button>
            </li>

          </ul>

          <ul class="product-list">

            @foreach ( $featured_products as $item )



            <li class="product-item">
              <div class="product-card product_data" tabindex="0">

                <figure class="card-banner">
                  <img src="{{asset('assets/uploads/products/' . $item->image )}}" width="312" height="350" loading="lazy"
                    alt="Running Sneaker Shoes" class="image-contain">

                  <div class="card-badge">New</div>

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn addToCardBtn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip addToCartBtn" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-4">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-4">Compare</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">



                  <h3 class="h3 card-title">
                    <a href="#">{{$item->name}}</a>
                  </h3>

                  <data class="card-price">{{$item->selling_price}}</data>

                  <div>
                    <input type="hidden" value="{{$item->id}}" class="prod_id">
                    <span class="minus">-</span>
                    <input type="text" class="num qty_input">
                    <span class="plus">+</span>


                </div>

              </div>
            </li>
            @endforeach



          </ul>

        </div>
      </section>





      <!--
        - #CTA
      -->

      <section class="section cta">
        <div class="container">

          <ul class="cta-list">

            <li>
              <div class="cta-card" style="background-image: url('{{asset('frontend')}}/assets/images/cta-1.jpg')">
                <p class="card-subtitle">Adidas Shoes</p>

                <h3 class="h2 card-title">The Summer Sale Off 50%</h3>

                <a href="#" class="btn btn-link">
                  <span>Shop Now</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>

            <li>
              <div class="cta-card" style="background-image: url('{{asset('frontend')}}/assets/images/cta-2.jpg')">
                <p class="card-subtitle">Nike Shoes</p>

                <h3 class="h2 card-title">Makes Yourself Keep Sporty</h3>

                <a href="#" class="btn btn-link">
                  <span>Shop Now</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!--
        - #SPECIAL
      -->

      <section class="section special">
        <div class="container">

          <div class="special-banner" style="background-image: url('{{asset('frontend')}}/assets/images/special-banner.jpg')">
            <h2 class="h3 banner-title">New Trend Edition</h2>

            <a href="#" class="btn btn-link">
              <span>Explore All</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <div class="special-product">

            <h2 class="h2 section-title">
              <span class="text">Nike Special</span>

              <span class="line"></span>
            </h2>

            <ul class="has-scrollbar">

              <li class="product-item">
                <div class="product-card" tabindex="0">

                  <figure class="card-banner">
                    <img src="{{asset('frontend')}}/assets/images/product-1.jpg" width="312" height="350" loading="lazy"
                      alt="Running Sneaker Shoes" class="image-contain">

                    <div class="card-badge">New</div>

                    <ul class="card-action-list">

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>

                    </ul>
                  </figure>

                  <div class="card-content">

                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Women</a>
                    </div>

                    <h3 class="h3 card-title">
                      <a href="#">Running Sneaker Shoes</a>
                    </h3>

                    <data class="card-price" value="180.85">$180.85</data>

                  </div>

                </div>
              </li>

              <li class="product-item">
                <div class="product-card" tabindex="0">

                  <figure class="card-banner">
                    <img src="{{asset('frontend')}}/assets/images/product-2.jpg" width="312" height="350" loading="lazy"
                      alt="Leather Mens Slipper" class="image-contain">

                    <ul class="card-action-list">

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>

                    </ul>
                  </figure>

                  <div class="card-content">

                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Sports</a>
                    </div>

                    <h3 class="h3 card-title">
                      <a href="#">Leather Mens Slipper</a>
                    </h3>

                    <data class="card-price" value="190.85">$190.85</data>

                  </div>

                </div>
              </li>

              <li class="product-item">
                <div class="product-card" tabindex="0">

                  <figure class="card-banner">
                    <img src="{{asset('frontend')}}/assets/images/product-3.jpg" width="312" height="350" loading="lazy"
                      alt="Simple Fabric Shoe" class="image-contain">

                    <div class="card-badge">New</div>

                    <ul class="card-action-list">

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>

                    </ul>
                  </figure>

                  <div class="card-content">

                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Women</a>
                    </div>

                    <h3 class="h3 card-title">
                      <a href="#">Simple Fabric Shoe</a>
                    </h3>

                    <data class="card-price" value="160.85">$160.85</data>

                  </div>

                </div>
              </li>

              <li class="product-item">
                <div class="product-card" tabindex="0">

                  <figure class="card-banner">
                    <img src="{{asset('frontend')}}/assets/images/product-4.jpg" width="312" height="350" loading="lazy"
                      alt="Air Jordan 7 Retro " class="image-contain">

                    <div class="card-badge"> -25%</div>

                    <ul class="card-action-list">

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-1">
                          <ion-icon name="cart-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-2">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-3">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                      </li>

                      <li class="card-action-item">
                        <button class="card-action-btn" aria-labelledby="card-label-4">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>

                        <div class="card-action-tooltip" id="card-label-4">Compare</div>
                      </li>

                    </ul>
                  </figure>

                  <div class="card-content">

                    <div class="card-cat">
                      <a href="#" class="card-cat-link">Men</a> /
                      <a href="#" class="card-cat-link">Sports</a>
                    </div>

                    <h3 class="h3 card-title">
                      <a href="#">Air Jordan 7 Retro </a>
                    </h3>

                    <data class="card-price" value="170.85">$170.85 <del>$200.21</del></data>

                  </div>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!--
        - #SERVICE
      -->

      <section class="section service">
        <div class="container">

          <ul class="service-list">

            <li class="service-item">
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{asset('frontend')}}/assets/images/service-1.png" width="53" height="28" loading="lazy" alt="Service icon">
                </div>

                <div>
                  <h3 class="h4 card-title">Free Shiping</h3>

                  <p class="card-text">
                    All orders over <span>$150</span>
                  </p>
                </div>

              </div>
            </li>

            <li class="service-item">
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{asset('frontend')}}/assets/images/service-2.png" width="43" height="35" loading="lazy" alt="Service icon">
                </div>

                <div>
                  <h3 class="h4 card-title">Quick Payment</h3>

                  <p class="card-text">
                    100% secure payment
                  </p>
                </div>

              </div>
            </li>

            <li class="service-item">
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{asset('frontend')}}/assets/images/service-3.png" width="40" height="40" loading="lazy" alt="Service icon">
                </div>

                <div>
                  <h3 class="h4 card-title">Free Returns</h3>

                  <p class="card-text">
                    Money back in 30 days
                  </p>
                </div>

              </div>
            </li>

            <li class="service-item">
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{asset('frontend')}}/assets/images/service-4.png" width="40" height="40" loading="lazy" alt="Service icon">
                </div>

                <div>
                  <h3 class="h4 card-title">24/7 Support</h3>

                  <p class="card-text">
                    Get Quick Support
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!--
        - #INSTA POST
      -->

      <section class="section insta-post">

        <ul class="insta-post-list has-scrollbar">

          <li class="insta-post-item">
            <img src="{{asset('frontend')}}/assets/images/insta-1.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
              class="insta-post-banner image-contain">

            <a href="#" class="insta-post-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <img src="{{asset('frontend')}}/assets/images/insta-2.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
              class="insta-post-banner image-contain">

            <a href="#" class="insta-post-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <img src="{{asset('frontend')}}/assets/images/insta-3.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
              class="insta-post-banner image-contain">

            <a href="#" class="insta-post-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <img src="{{asset('frontend')}}/assets/images/insta-4.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
              class="insta-post-banner image-contain">

            <a href="#" class="insta-post-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <img src="{{asset('frontend')}}/assets/images/insta-5.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
              class="insta-post-banner image-contain">

            <a href="#" class="insta-post-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <img src="{{asset('frontend')}}/assets/images/insta-6.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
              class="insta-post-banner image-contain">

            <a href="#" class="insta-post-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <img src="{{asset('frontend')}}/assets/images/insta-7.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
              class="insta-post-banner image-contain">

            <a href="#" class="insta-post-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <img src="{{asset('frontend')}}/assets/images/insta-8.jpg" width="100" height="100" loading="lazy" alt="Instagram post"
              class="insta-post-banner image-contain">

            <a href="#" class="insta-post-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </section>

    </article>
  </main>

@endsection

@section('scripts')

{{-- <script>

document.addEventListener("DOMContentLoaded", function() {
  var buttons = document.querySelectorAll('.addToCardBtn');

  buttons.forEach(function(button) {
    button.addEventListener("click", function(e) {
      e.preventDefault();

      var product_id = this.closest('.product_data').querySelector('.prod_id').value;
      var product_qty = this.closest('.product_data').querySelector('.qty_input').value;

      alert(product_id);
      alert(product_qty);
    });
  });
});



</script> --}}


@endsection
