<div class="row grid">
    @if (count($services) > 0)
        @foreach ($services as $service)
            <div class="col-md-3 all">
                <div class="feature_box">
                    <div class="top_pack">Package</div>
                    <div class="white_box_pack">
                        <h4>{{ $service->service->additionalService->name }}</h4>
                        <p>{{$service->service->category->name}}</p>
                        
                        <p class="star">@if($service->ratingService($service['service_id']) !='')<i class="fa-solid fa-star"></i> {{$service->ratingService($service['service_id'])}} ({{$service->service->review()->count()}})@endif</p>
                        <div class="d-flex align-items-center py-2">
                            <div class="price"></div>
                            <p><i class="fa-regular fa-clock"></i>
                                {{ date('h', strtotime($service['service']['duration'])) }} hr
                                {{ date('i', strtotime($service['service']['duration'])) }} mins</p>
                        </div>
                        <ul>
                            <!-- <li><i class="fa-solid fa-check"></i> Men's Haircut</li>
                    <li><i class="fa-solid fa-check"></i> Beard Shape & Style</li>
                    <li><i class="fa-solid fa-check"></i> 10 min Head Massage</li> -->
                            <li>{{ substr($service->service->description, 0, 55) }}...</li>
                        </ul>
                        <a href="{{route('book-now', base64_encode($service['service_id']))}}"
                            class="buttonfx slidebottomleft animated" data-animation-in="fadeInUp"><span>BOOK NOW</span></a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>There is no packages..</p>
    @endif
</div>