<!-- ======= Constructions Section ======= -->
<section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Объекты</h2>
        </div>

        <div class="row gy-4">

            @foreach($objects as $key =>$object)

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{$key+1}}00">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url({{ asset('storage/' . $object->image) }});"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $object->title ?? '' }}</h4>
                                    <p>{{ $object->description ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->


            @endforeach

        </div>

    </div>
</section>
<!-- End Constructions Section -->
