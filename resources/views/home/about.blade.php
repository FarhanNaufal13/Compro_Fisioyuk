@include('partials.navbar')

    <!-- About US -->
    <div class="about-us-bg py-4 mt-5">
      <div class="custom-shape-divider-top-1669620663">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
      <div class="container mt-5">
          <div class="row mt-5">
            <div class="col-md-6" >
              <img   src="/image/{{ $about->image }}"  class="img-about">
            </div>
            <div class="col-md-6 desc-about" data-aos="fade-up" >
              <h3 class="fw-bold about-us-title">{{ $about->title }}
              </h3>
              <p class="post-text mt-4">
                {{ $about->description }}
              </p>
              <button class="btn btn-light">Pesan Sekarang</button>
            </div>
          </div>
      </div>
      <div class="title-curve-about" data-aos="fade-up" >
        <h2 class="text-center fw-bold">Kenalan Sama Founder FisioYuk!</h2>
        <p class="text-center mt-4">
        Jika mendapat keluhan dibawah ini segera hubungi kami!
        </p>
      </div>
      <div class="custom-shape-divider-bottom-1669617615">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
    </div>
    <!-- End About US -->

    

    <!-- TEAM -->
    <div class="team">
      <div class="container"> 
        <div class="row mt-3">
          
          <div class="col-md-6" >
            <img  src="/image/{{ $team->image }}"  class="img-team">
          </div>
          <div class="col-md-6" >
            <h2 class="fw-light">{{ $team->name }}
            </h2>
            <p class=" post-text mt-4 ">
              {{ $team->description }}
            </p>
            <div class="social-link ">
              <a href="" class="mx-1">
                <i class="fa-brands fa-facebook fa-2x"></i>
              </a>
              <a href="" class="mx-1">
                <i class="fa-brands fa-twitter fa-2x"></i>
              </a>
              <a href="" class="mx-1">
                <i class="fa-brands fa-instagram  fa-2x"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- END TEAM -->
    
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
    
@include('partials.footer')