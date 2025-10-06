<section id="campus-facilities" class="campus-facilities section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Hero Introduction Row -->
        <div class="hero-intro">
            <div class="row g-0 align-items-center">
                <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                    <div class="content-wrapper">
                        @if ($editorial->count())
                        <div class="badge-highlight">Editorial</div>
                        <h2>{{ !empty($editorial->title) ? $editorial->title : '' }}</h2>
                        {{-- <p>{!!$editorial->content!!}</p> --}}
                        <p>{!! Str::limit($editorial->content, 500) !!}</p>
                        <div class="action-buttons">
                            <a href="{{asset('')}}editorial/detail/{{$editorial->slug}}" class="btn btn-primary">Selengkapnya..</a>
                        </div>
                        @else
                            <span>Belum ada data</span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                    <div class="px-4 hero-visual">
                        <div class="image-stack">
                            <img src="{{ $ptk->imageUrl ? $ptk->imageUrl : '/assets/images/no_image.png' }}" alt="{{$ptk->name}}" class="img-fluid primary-img">
                            <div class="pb-1 m-0 floating-card">
                                <span >
                                    <span class="fw-bold">{{$ptk->name}}</span>
                                    <p >{{$ptk->jenisptk->jenis_ptk}}</p>
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
