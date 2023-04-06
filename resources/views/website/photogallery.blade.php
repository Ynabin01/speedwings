
@extends("layouts.master")

@section('content')

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">DOCUMENTS</h1>
            <a href="index.html" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Documents</a>
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

    <!-- .........legal documents.......... -->

    <div class="container">
        <div class="Legal-Documents">

            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"> Documents</h5>
                <!-- <h1 class="mb-0"></h1> -->
            </div>

            <div class="legal-documents-img">
                <div class="container__img-holder">
                    <img src="/website/img/about.jpg" alt="Image">
                </div>
                <div class="container__img-holder">
                    <img src="/website/img/about.jpg" alt="Image">
                </div>
                <div class="container__img-holder">
                    <img src="/website/img/about.jpg" alt="Image">
                </div>
                <div class="container__img-holder">
                    <img src="/website/img/about.jpg" alt="Image">
                </div>
                <div class="container__img-holder">
                    <img src="/website/img/about.jpg" alt="Image">
                </div>
                <div class="container__img-holder">
                    <img src="/website/img/about.jpg" alt="Image">
                </div>
            </div>
        </div>
    </div>

    <div class="img-popup">
        <img src="" alt="Popup Image">
        <div class="close-btn">
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>



    <!-- .........legal documents.......... -->





@endsection
