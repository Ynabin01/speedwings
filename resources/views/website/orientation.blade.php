@extends("layouts.master")

@section('content')

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Orientation Information</h1>
            <a href="index.html" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Orientation</a>
        </div>
    </div>
</div>
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
    
    @if (@isset($notices))
        <!-- About Start -->
        <div class="container-fluid  wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">Orientation</h5>
                            <!-- <h1 class="mb-0">About Company:</h1> -->
                        </div>
                    {{-- @foreach ($notices as $notice) --}}
                        <div class="col-lg-12" style="min-height: 500px;">
                            <div class="position-relative h-100">
                                <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ $notices->banner_image ?? '' }}"
                                    style="object-fit: cover;">
                            </div>
                        </div>
                        <p class="mt-4">{!! htmlspecialchars_decode($notices->long_content ?? '') !!}</p>
                          
                    {{-- @endforeach --}}
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 ">
                        <div class="siderbar-link-list">
                            <h5>OUR SERVICES</h5>
                            <hr>
                            <ul>
                                @foreach ($services as $serv ) 
                                <li>
                                    <a href="">{{ $serv->caption ?? '' }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
        <!-- About End -->
    @endsection
