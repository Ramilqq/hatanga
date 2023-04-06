<div class="entry col-12">
    <div class="grid-inner row">
        <div class="col-lg-4">
            <div class="fslider" data-pagi="false" data-lightbox="gallery">
                <div class="flexslider">
                    <div class="slider-wrap">
                        @php($images = json_decode($tour['image']))
                        @if (count($images) == 1)
                            <img src="{{ Voyager::image($images[0])}}" alt="Bronze Time Hotel">
                        @else
                            @foreach ($images as $image)
                            <div class="slide"><a href="{{ Voyager::image($image)}}" data-lightbox="gallery-item"><img src="{{ Voyager::image($image)}}" alt="Standard Post with Gallery"></a></div>
                            @endforeach
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-8 mt-4 mt-lg-0">
            <div class="entry-title title-sm">
                <h2><a href="{{ route('get_tour', $tour['slug']) }}">{{ $tour['title'] }}</a></h2>
            </div>
            <div class="entry-meta">
                <ul>
                    <li>Сложность
                    @foreach(range(1, 5) as $i)
                        @if ($tour['leavel'] >= $i)
                        <i class="icon-star3 color"></i> 
                        @else
                        <i class="icon-star3"></i>
                        @endif
                    @endforeach                        
                    </li>
                    <li><i class="icon-users"></i>{{ $tour['peoples'] }}</li>
                    <li><i class="icon-user-clock"></i>{{ $tour['age'] }}</li>
                </ul>
                <br>
                <ul>
                    @if ($tour['date_end'] and $tour['date_start'])
                        @php($datetimeFrom = DateTime::createFromFormat( 'Y-m-d', $tour['date_end'] ))
                        @php($datetimeTo = DateTime::createFromFormat( 'Y-m-d', $tour['date_start'] ))
                        @php($days = $datetimeFrom->diff( $datetimeTo )->format( '%a дней' ))
                        <li><i class="icon-time"></i>{{ $days }}</li>
                    @endif
                    <li><i class="icon-calendar-check1"></i>{{ $tour['date_start'] }}</li>
                    <li><i class="icon-calendar-times1"></i>{{ $tour['date_end'] }}</li>
                </ul>
            </div>
            <div class="entry-content">
                <p class="mb-0">{{ $tour['excerpt'] }}</p>
            </div>
        </div>
        <div class="col-lg-auto col-md-4 mt-4 mt-lg-0 text-left text-md-center">
            <div class="hotel-price">
                <i class="icon-ruble-sign"></i>{{ $tour['price'] }}
            </div>
            <small><em>Цена за человека*</em></small><br>
            <a href="{{ route('get_tour', $tour['slug']) }}"class="button button-rounded mt-4 mx-0">Открыть</a>
        </div>
    </div>
</div>