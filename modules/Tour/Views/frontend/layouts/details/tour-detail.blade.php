<div class="g-header">
    <div class="left">
        <h2>{{$row->title}}</h2>
    </div>
    <div class="right">
        @if($review_score = $row->review_data)
            <div class="review-score">
                <span class="head-rating">{{$review_score['score_text']}}</span>
                <div class="list-star">
                    <ul class="booking-item-rating-stars">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                    </ul>
                    <div class="booking-item-rating-stars-active" style="width: {{  $review_score['score_total'] * 2 * 10 ?? 0  }}%">
                        <ul class="booking-item-rating-stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <span>
                    {{__("from :number reviews",['number'=>$review_score['total_review']])}}
                </span>
            </div>
        @endif
    </div>
</div>
<div class="g-tour-feature">
    <div class="row">
        @if($row->duration)
            <div class="col-xs-6 col-lg-3 col-md-6">
                <div class="item">
                    <div class="icon">
                        <i class="icofont-wall-clock"></i>
                    </div>
                    <div class="info">
                        <h4 class="name">{{__("Date")}}</h4>
                        <p class="value">
                            @if($row->duration > 1)
                                {{ __(":start  :End",array('start'=>$row->tourStart,'End'=>$row->tourEnd)) }}
                            @else
                                {{ __(":number hour",array('number'=>$row->duration)) }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        @endif
        @if(!empty($row->category_tour->name))
            <div class="col-xs-6 col-lg-3 col-md-6">
                <div class="item">
                    <div class="icon">
                        <i class="icofont-beach"></i>
                    </div>
                    <div class="info">
                        <h4 class="name">{{__("Tour Type")}}</h4>
                        <p class="value">
                            {{$row->category_tour->name ?? ''}}
                        </p>
                    </div>
                </div>
            </div>
        @endif
        @if($row->max_people)
            <div class="col-xs-6 col-lg-3 col-md-6">
                <div class="item">
                    <div class="icon">
                        <i class="icofont-travelling"></i>
                    </div>
                    <div class="info">
                        <h4 class="name">{{__("Group Size")}}</h4>
                        <p class="value">
                            {{$row->max_people}} {{__("people")}}
                        </p>
                    </div>
                </div>
            </div>
        @endif
        @if(!empty($row->location->name))
            <div class="col-xs-6 col-lg-3 col-md-6">
                <div class="item">
                    <div class="icon">
                        <i class="icofont-island-alt"></i>
                    </div>
                    <div class="info">
                        <h4 class="name">{{__("Location")}}</h4>
                        <p class="value">
                            {{$row->location->name ?? ''}}
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@if($row->getGallery())
    <div class="g-gallery">
        <div class="fotorama" data-width="100%" data-thumbwidth="135" data-thumbheight="135" data-thumbmargin="15" data-nav="thumbs" data-allowfullscreen="true">
            @foreach($row->getGallery() as $key=>$item)
                <a href="{{$item['large']}}"><img src="{{$item['thumb']}}"></a>
            @endforeach
        </div>
    </div>
@endif
{{-- new example --}}
@if($row->days)
<div class="g-faq">
    <h3> {{__("Аяллын өдрүүд")}} </h3>
    @foreach($row->days as $item)
        <div class="item">
            <div class="header">
                {{-- <i class="field-icon icofont-support-faq"></i> --}}
                <i class="field-icon icofont-paper-plane"></i>
                <h5>{{$item['day']}}</h5>
                <span class="arrow"><i class="fa fa-angle-down"></i></span>
            </div>
            <div class="body">
                {{-- <div class="card bg-light mb-3">
                    <div class="card-header">
                        {{$item['description']}}
                    </div>
                <div class="card-text">
                <button class="btn btn-primary">{{$item['hotel']}}</button><div class="btn btn-outline-success" style="float: right">{{$item['food']}}</div>
                </div>
                </div> --}}
                <div class="container-fluid">
                    {{$item['description']}}
                </div><br>
                <div class="row" style="border:1px double #7A6966">
                    <div class="col-md-6">
                        Зочид буудал: <b>{{$item['hotel']}}</b>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        Хоол: <b>{{$item['food']}}</b>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endif
{{-- new example --}}
@if($row->content)
    <div class="g-overview">
        <h3>{{__("Overview")}}</h3>
        <div class="description">
            <?php echo $row->content ?>
        </div>
    </div>
@endif
@if($row->faqs)
<div class="g-faq">
    <h3> {{__("FAQs")}} </h3>
    @foreach($row->faqs as $item)
        <div class="item">
            <div class="header">
                <i class="field-icon icofont-support-faq"></i>
                <h5>{{$item['title']}}</h5>
                <span class="arrow"><i class="fa fa-angle-down"></i></span>
            </div>
            <div class="body">
                {{$item['content']}}
            </div>
        </div>
    @endforeach
</div>
@endif
@if($row->map_lat && $row->map_lng)
<div class="g-location">
    <h3>{{__("Tour Location")}}</h3>
    <div class="location-map">
        <div id="map_content"></div>
    </div>
</div>
@endif