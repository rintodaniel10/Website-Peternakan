<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Store - Your Best Marketplace</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="style/main.css" rel="stylesheet" />
  </head>

  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="/index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="/categories.html" class="nav-link">Categories</a>
            </li>
          </ul>

          <!-- Desktop Menu-->
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
              >
                <img
                  src="/images/icon-user.png"
                  alt=""
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, Vionaa
              </a>
              <div class="dropdown-menu">
                <a href="{{ route('dashboard-transaction-details', $transaction->id) }}" class="dropdown-item">Dashboard</a>
                <a href="/dashboard-account.html" class="dropdown-item"
                  >Settings</a
                >
                <div class="dropdown-divider"></div>
                <a href="/" class="dropdown-item">Logout</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block mt-2">
                <img src="/images/icon-cart-empty.svg" alt="" />
              </a>
            </li>
          </ul>

          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="#" class="nav-link">
                Hi, Vionaa
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block">
                Cart
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content-->
    <div class="page-content page-details">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">
                    Product Details
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :src="photos[activePhoto].url"
                  :key="photos[activePhoto].id"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{ active: index == activePhoto}"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>Daging Sapi Segar (500g)</h1>
                <div class="owner">By Ibu Lela</div>
                <div class="price">Rp.50.000</div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <a
                  href="/cart.html"
                  class="btn btn-success px-4 text-white btn-block mb-3"
                >
                  Add to Cart
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>
                  Daging sapi adalah daging yang diperoleh dari sapi yang biasa
                  dan umum digunakan untuk keperluan konsumsi makanan. Di setiap
                  daerah, penggunaandaging ini berbeda- beda tergantung dari
                  cara pengolahannya. Sebagai contoh has luar, daging iga dan
                  T-Bone sangat umum digunakan di Eropa dan di Amerika.
                </p>
                <p>
                  Serikat sebagai bahan pembuatan steak sehingga bagian sapi ini
                  sangat banyak diperdagangkan. Akan tetapi seperti di Indonesia
                  dan di berbagai negara Asia lainnya daging ini banyak
                  digunakan untuk makanan berbumbu dan bersantan seperti sup
                  konro dan rendang.
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-3 mb-3">
                <h5>Customer Review (3)</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                  <li class="media">
                    <img
                      src="/images/icon-testimonial-1.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Agung Jos Prirani</h5>
                      Daging nya seger, sesuai sama gambar, pokoknya rekomen
                      banget dehhhh, Gak nyesel belanja disini
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/icon-testimonial-2.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Alfred Winnylano</h5>
                      Belanja disini gak pernah kecewa karena daging nya selalu
                      best quality, pokoknya yang terbaik deh
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/icon-testimonial-3.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Martin Gebbypotan</h5>
                      Produk selalu fresh, serasa baru disembelih hari itu
                      jugaaaa Seller juga fast respon banget, jadi bakal
                      langganan deh nih
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-4 pb-2">
              2020 Copyright Proyek Akhir. All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            {
              id: 0,
              url: "/images/product-details-1.jpg",
            },
            {
              id: 1,
              url: "/images/product-details-2.jpg",
            },
            {
              id: 2,
              url: "/images/product-details-3.jpg",
            },
            {
              id: 3,
              url: "/images/product-details-4.jpg",
            },
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
    <script src="/script/navbar-scroll.js"></script>
  </body>
</html>
