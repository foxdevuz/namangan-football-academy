<x-main.main>
    <div class="container-fluid pt-5">
        <div class="container">
            <div>
                <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                    <h2 class="text-primary font-secondary">{{ @trans('history.sub_title') }}</h2>
                    <h1 class="display-5 text-uppercase">{{ @trans('history.title') }}</h1>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-6 mb-1 mb-lg-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100"
                                src="/img/IMG_8862.JPG" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 pb-7">
                        <h4 class="mb-4">{{ @trans('history.part_1_title') }}</h4>
                        <p class="mb-5">{{ @trans('history.part_1_text') }}</p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 100px">
                <div class="row gx-5">
                    <div class="col-lg-6 pb-7">
                        <h4 class="mb-4"> {{ @trans('history.part_2_title') }}
                        </h4>
                        <p class="mb-5">{{ @trans('history.part_2_text') }}
                        </p>
                    </div>
                    <div class="col-lg-6 mb-1 mb-lg-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100"
                                src="/img/IMG_8865.JPG" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 100px">
                <div class="row gx-5">
                    <div class="col-lg-6 mb-1 mb-lg-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100"
                                src="/img/IMG_8867.JPG" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 pb-7">
                        <h4 class="mb-4">{{ @trans('history.part_3_title') }}</h4>
                        <p class="mb-5">{{ @trans('history.part_3_text') }}
                        </p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 100px">
                <div class="row gx-5">
                    <div class="col-lg-6 pb-7">
                        <h4 class="mb-4">{{ @trans('history.part_4_title') }}
                            </h4>
                        <p class="mb-5">{{ @trans('history.part_4_text') }}
                        </p>
                    </div>
                    <div class="col-lg-6 mb-1 mb-lg-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100"
                                src="/img/IMG_8869.JPG" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main.main>
