
<div class="row gy-30 masonary-active">
@foreach ($wedding as $item)
    @if ($item->category == $weddings)
        <div class="col-lg-4 filter-item">
            <div class="portfolio-thumb fade_left">
                <a class="popup-image icon-btn" href="{{asset( $item->work_image )}}"><i
                        class="far fa-eye"></i></a>
                <div class="img-anim">
                    <img src="{{asset( $item->work_image )}}" alt="{{$item->work_name}}">
                </div>

            </div>
        </div>
    @endif
@endforeach
</div>
