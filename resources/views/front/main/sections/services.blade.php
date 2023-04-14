<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Сервисы</h2>
        </div>

        <div class="row gy-4">


            @foreach($services as $service)

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="{{ $service->icon }}"></i>
                        </div>
                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                </div><!-- End Service Item -->


            @endforeach

        </div>

    </div>
</section>
<!-- End Services Section -->
