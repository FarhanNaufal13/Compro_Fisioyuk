@include('partials.navbar')
    
    {{-- BannerPromo --}}
    <div class="home-bg py-3 mt-5">
      <img src="/image/{{ $bannerHome->image }}" class="img-home shadow" alt="">
      <div class="container mt-5">
        <div class="row mt-5">
          <div class="col-md-6 desc-home">
              <h4 class="fw-light">{{ $bannerHome->title }}</h4>
              <h1 class="fw-bold">{{ $bannerHome->description }}</h1>
              <p>{{ $bannerHome->sub_title }}</p>
              <a href="https://wa.me/087778840699" >
                  <button type="button" class="btn btn-primary">Pesan Sekarang</button>
              </a>
          </div>
        </div>
      </div>
    </div>

    <!-- About US -->
    <div class="about-us py-2 mt-5">
      <div class="container">
          <div class="row mt-5">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
              <img decoding="async" width="435" height="523"  src="/image/{{ $about->image }}" alt="img-fluid" class="img-about">
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000" >
              <h1 class="fw-bold">{{ $about->title }}
              </h1>
              <p class="post-text mt-4 ">
                {{ $about->description }}
              </p>
              
              <a href="about.html" class="href">
                  <button class="btn btn-primary">Learn More</button>
             </a>
            </div>
          </div>
      </div>
    </div>
    <!-- End About US -->

    <!-- Layanan -->
    <div class="services mt-5 bg-light py-5">
      
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">Fitur</h2>
        </div>
        <p class="text-center mt-4">
          Pilih layanan dan atur jadwal sesuai keinginan Anda. Pesan sekarang!  
        </p>
        <div class="row mt-5">
          @foreach ($fitur as $fitur)
          <div data-aos="zoom-in" class="col-md-6 mt-4 mt-lg-0 p-2" >
            <div class="icon-box">
              <img src="/image/{{ $fitur->image }}" alt="" class="img-fitur" width="45" style="float: left " >
              <h4>{{ $fitur->title }}</h4>
              <p>{{ $fitur->description }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
     
    </div>
    <!-- End Layanan -->

    <!-- Banner -->
    <div class="promo-bg py-2 mt-5">
      <img src="/image/{{ $bannerPromo->image }}" alt="" class="img-promo">
      <div class="container">
        <div class="col-md-6 desc-promo">
          <h4>{{ $bannerPromo->title }}</h4>
          <h1>{{ $bannerPromo->description }}</h1>
          <button class="btn btn-primary">PESAN SEKARANG</button>
        </div>
      </div>
    </div>
    <!-- End Banner -->


    <!-- TESTIMONI -->
    <div class="testimonials bg-light py-5 mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">Testimoni</h2>
        </div>
        <p class="text-center mt-4">Kami sudah terpecaya kurang lebih 2 tahun, Berikut testimoni dari klien kita</p>
        <div class="slide-container swiper " style="padding: 40px 40px">
          <div class="slide-content" >
            <div class="card-wrapper swiper-wrapper ">
              @foreach ($testimoni as $testimoni)
              <div class="card card-testi border-0  swiper-slide" data-aos="zoom-in">
                <div class="image-content">
                  <span class="overlay"> </span>
                  <div class="card-image">
                    <img src="/image/{{ $testimoni->image }}" alt="" class="card-img ">
                  </div>
                  <div class="card-content">
                    <h4>{{ $testimoni->name }}</h4>
                    <small class="text-muted">{{ $testimoni->profession }}</small>
                    <p class="fst-italic text-center mt-3">
                      <i class="fa fa-solid fa-quote-left" style="color:rgb(101, 101, 101);"></i>
                      {{ $testimoni->description }}
                      <i class="fa fa-solid fa-quote-right" style="color:rgb(101, 101, 101);"></i>
                    </p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="swiper-button-next swiper-navBtn" style="color: silver;"></div>
          <div class="swiper-button-prev swiper-navBtn" style="color: silver;"></div>
          <div class="swiper-pagination"></div>
         
        </div>
       
      </div>
    </div>
    <!-- END TESTIMONI -->

    <!-- Informasi -->
    <div class="Informasi py-5 mt-5 ">
      <div class="container ">
          <div class="title-container">
          <h2 class="text-center fw-bold">Baca Article Dari Kami</h2>
          </div>
          <p class="text-center mt-4">
          Berikut adalah informasi dari Fisioyuk!
          </p>
          <section class="post container mt-5">
            <div class="post-box  fisioterapi" data-aos="flip-left">
              <span class="overlay-box"> </span>
                <img src="assets/img/Informasi/fisioterapi1.jpg" alt="" class="post-img">
                <span class="post-date text-muted">19 November 2022</span>
                <h2 class="category">Fisioterapi</h2>
                <a href="artikel/fisioterapi1" class="post-title">
                    Apa yang dimaksud dengan FIsioterapi ?
                </a>
                <p class="post-description">Fisioterapi adalah tindakan rehabilitasi untuk menghindari atau meminimalkan keterbatasan fisik akibat cedera atau penyakit. Fisioterapi bisa dilakukan pada pasien dari semua rentang usia dengan berbagai macam tujuan, mulai dari meredakan sakit punggung hingga persiapan olahraga dan persalinan.
                </p>
                <a href="artikel/fisioterapi1">Read More</a>
                <span class="overlay-info"> </span>
                <div class="profile mt-4">
                    <img src="assets/img/Informasi/user.png" alt="" class="profile-img float-start me-3">
                    <strong class="d-block profile-name">dr. Meva Nareza</strong>
                    <small class="text-muted profile-status">Peninjau</small>
                    <a href="#">
                      <i class="fa-solid fa-thumbs-down float-end me-2"></i>
                    </a>
                    <a href="#">
                      <i class="fa-solid fa-thumbs-up float-end me-2"></i>
                    </a>
                </div>
            </div>
            <div class="post-box  kesehatan" data-aos="flip-left">
              <span class="overlay-box"> </span>
                <img src="assets/img/Informasi/kesehatan1.jpg" alt="" class="post-img">
                <span class="post-date text-muted">19 November 2022</span>
                <h2 class="category">Kesehatan</h2>
                <a href="artikel/kesehatan1" class="post-title">
                    Manfaat Fisioterapi Terhadap Kesehatan
                </a>
                <p class="post-description">Anda pernah dengar sekilas tentang fisioterapi atau pernah berkunjung ke klinik fisioterapi? Fisioterapi merupakan bentuk layanan kesehatan yang diberikan pada seseorang untuk mengembangkan, memelihara, dan memulihkan gerak dan fungsi tubuh. Jika Anda mengalami cedera atau penyakit yang membuat Anda sulit menjalankan kegiatan sehari-hari.
                </p>
                <a href="artikel/kesehatan1">Read More</a>
                <span class="overlay-info"> </span>
                <div class="profile mt-4">
                    <img src="assets/img/Informasi/user.png" alt="" class="profile-img float-start me-3">
                    <strong class="d-block profile-name">dr. Edwin Halim</strong>
                    <small class="text-muted profile-status">Reviewer</small>
                    <a href="#">
                      <i class="fa-solid fa-thumbs-down float-end me-2"></i>
                    </a>
                    <a href="#">
                      <i class="fa-solid fa-thumbs-up float-end me-2"></i>
                    </a>
                </div>
            </div>
            <div class="post-box  gaya-hidup" data-aos="flip-left">
              <span class="overlay-box"> </span>
                <img src="assets/img/Informasi/gaya hidup1.jpg" alt="" class="post-img">
                <span class="post-date text-muted">15 Maret 2019</span>
                <h2 class="category">gaya hidup</h2>
                <a href="artikel/gayaHidup1.html" class="post-title">
                  5 jenis Olahraga yang Aman Dilakukan Saat Nyeri Sendi
                </a>
                <p class="post-description">Olahraga penting dilakukan untuk menjaga kesehatan dan kebugaran tubuh. Ternyata, olahraga juga dianjurkan bagi pengidap nyeri sendi. Jenis olahraga tentunya harus disesuaikan dengan kondisi pengidap. Hindari melakukan olahraga berlebihan karena malah akan mencederai sendi. 
                </p>
                <a href="post-page.html">Read More</a>
                <span class="overlay-info"> </span>
                <div class="profile mt-4">
                    <img src="assets/img/Informasi/user.png" alt="" class="profile-img float-start me-3">
                    <strong class="d-block profile-name">Redaksi Halodoc</strong>
                    <small class="text-muted profile-status">Peninjau</small>
                    <a href="#">
                      <i class="fa-solid fa-thumbs-down float-end me-2"></i>
                    </a>
                    <a href="#">
                      <i class="fa-solid fa-thumbs-up float-end me-2"></i>
                    </a>
                </div>
            </div>
            <a href="informasi.html" >
              <button type="button" class="btn btn-primary" >Baca Lebih Banyak </button>
          </a>
          </section>
        </div>
      </div>
    <!-- End Inforamasi -->

    <!-- Client -->
    <div class="client  py-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">Our Partner</h2>
        </div>
        <div class="slide-container-client swiper">
          <div class="slide-content-client" style="padding: 40px 20px">
            
            <div class="card-wrapper swiper-wrapper">
              @foreach ($partner as $partner)
              <div class="card card-client border-0 shadow swiper-slide" data-aos="zoom-in">
                <div class="image-client">
                  <div class="card-image-client">
                    <img src="/image/{{ $partner->image }}" alt="" class="card-img-client ">
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            
          </div>
        </div>
    </div>
    </div>
    <!-- End Client -->

    <!-- Contact  -->
    <div class="contact bg-light py-5 ">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">Hubungi Kami</h2>
        </div>
        <div class="row mt-5 justify-content-center" data-aos="zoom-in-up">
          <div class="col-lg-10">
            <div class="card border-0 p-4">
              <div class="row">
                <div class="col-lg-4 info">
                  <a href="" class="icon-contact">
                    <i class="fa fa-location-dot my-contact"></i>
                  </a>
                  <h4>Location :</h4>
                  <p>{{ $contact->alamat }}</p>
                </div>
                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <a href="" class="icon-contact">
                    <i class="fa-solid fa-envelope my-contact"></i>
                  </a>
                  <h4>Email :</h4>
                  <p>{{ $contact->email }}</p>
                </div>
                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <a href="" class="icon-contact">
                    <i class="fa-solid fa-phone my-contact"></i>
                  </a>
                  <h4>Call :</h4>
                  <p>{{ $contact->telepon }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4 justify-content-center" data-aos="zoom-in-up">
          <div class="col-lg-10">
          <div class="card border-0 p-4">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact -->

    

    <!-- WA -->
    <a href="https://wa.me/087778840699" class="icon-wa">
      <i class="fa-brands fa-whatsapp  my-wa"></i>
    </a>
    <!-- END WA -->

    @include('partials.footer')