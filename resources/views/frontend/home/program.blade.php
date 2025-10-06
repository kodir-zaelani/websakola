@if ($program)
<section id="hero-static" class="hero-static section">
    <div class="mt-5 feature-cards-wrapper" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="row gy-4">
                @foreach ($program as $item)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{asset('')}}program/detail/{!! $item->slug !!}" >
                        <div class="feature-card active">
                            <div class="feature-icon">
                                {!! $item->icon !!}
                            </div>
                            <div class="feature-content">
                                <h3>{{$item->title}}</h3>
                                <p>
                                    {!! $item->content!!}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
