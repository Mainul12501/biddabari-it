<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="sec-heading center">
                    <h2>আমাদের <span class="theme-cl">সেবা সমূহ  </span></h2>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>--}}
                </div>
            </div>
        </div>
        <div class="row facility">
            @foreach($ourServices as $key => $ourService)
                @if($key % 2 != 0)
                    <div class="col-12 col-m-6" style="border-bottom: 1px solid lightgrey" wire:key="{{ $ourService->id }}">
                        <div class="card mb-4 border-0 content-shadow">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{file_exists($ourService->image) ? asset($ourService->image) : asset('frontend/logo/biddabari-card-logo-350x210.jpg')}}" class="img-fluid rounded-start  py-2" alt="..." />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body text-end">
                                        <h2 class="card-title mb-2">{!! $ourService->title ?? 'Title' !!}</h2>
                                        <p class="card-text text-muted">
                                            {!! $ourService->content ?? 'Content' !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-12 col-m-6" style="border-bottom: 1px solid lightgrey" wire:key="{{ $ourService->id }}">
                        <div class="card mb-3 border-0 content-shadow">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body text-start">
                                        <h2 class="card-title mb-2">{!! $ourService->title ?? 'Title' !!}</h2>
                                        <p class="card-text text-muted">
                                            {!! $ourService->content ?? 'Content' !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 text-end">
                                    <img src="{{file_exists($ourService->image) ? asset($ourService->image) : asset('frontend/logo/biddabari-card-logo-350x210.jpg')}}" class="img-fluid rounded-start py-2" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach



        </div>
    </div>
</div>
