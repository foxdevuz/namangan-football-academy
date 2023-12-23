
@props(['famous'])
<div class="container-fluid pt-5">
    <div class="container">
      <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px">
        <h2 class="text-primary font-secondary">Bizning faxrimiz</h2>
        <h1 class="display-4 text-uppercase">Tanishing!</h1>
      </div>
      <div class="row gx-5">
        <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100" src="{{ asset("/storage/images/" . $famous->image) }}" style="object-fit: cover" />
          </div>
        </div>
        <div class="col-lg-6 pb-5">
          <h4 class="mb-4">
           {{ $famous->name }}
          </h4>
          <p class="mb-5">
            {{ $famous->about }}
          </p>
          <div class="row g-5">
            <div class="col-sm-6">
              <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4"
                style="width: 90px; height: 90px">
                <i class="fa fa-heartbeat fa-2x text-white"></i>
              </div>
              <h4 class="text-uppercase">100% Sog'lom</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
