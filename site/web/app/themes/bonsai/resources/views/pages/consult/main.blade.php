<main class="main col-lg-9 pt-5">
  {{-- @yield('content') --}}

  <div class="alert alert-info alert-dismissible fade show mb-5" role="alert" style="padding-top:1rem;">
    <strong>Select a consultant:</strong> below are the top experts in Bonsai LMS and it's tools</a>.

    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding-top:1rem!important;">
      <span aria-hidden="true">×</span>
    </button>
  </div>

  <div class="row mb-5">
    <div class="col-sm">
      <div class="card bg-dark-2 mt-3" style="width:240px;">
        <img class="mb-3" style="border-radius: 8px 8px 0 0;" src="@asset('images/consult/mason.jpg')" alt="" width="100%">
        <div class="card-body">
          <strong><h3>Mason Lawlor</h3></strong>
          <p class="badge badge-light lead pt-2">
            $2<small class="text-muted">/min</small>
          </p>
          <div class="mt-2">
            <p class="badge badge-secondary text-white mr-2">
              Bonsai LMS
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Roots
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Trellis
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Bedrock
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Sage
            </p>
          </div>
          <a href="" class="btn btn-sm primary-gradient float-right mt-3" data-toggle="modal" data-target="#consultModal">Book a Time <i class="fas fa-arrow-right ml-1"></i></a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card bg-dark-2 mt-3" style="width:240px;">
        <div class="bg-primary flex-c-c" style="width:240px;height:240px;border-radius: 8px 8px 0 0;">
          @include('svg.consult.avatar')
        </div>
        {{-- <img class="mb-3" style="border-radius: 8px 8px 0 0;" src="@asset('images/consult/2.jpg')" alt="" width="100%"> --}}
        <div class="card-body">
          <strong><h3 class="pt-2">Your Name Here</h3></strong>
          <p class="badge badge-light lead pt-2">
            $1-5<small class="text-muted">/min</small>
          </p>
          <div class="mt-2 mb-4">
            <p class="badge badge-secondary text-white mr-2">
              Your
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Skills
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Will
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Go
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Here
            </p>
          </div>
          <a href="" class="btn btn-sm primary-gradient float-right" data-toggle="modal" data-target="#consultApplicationModal">Apply Here <i class="fas fa-arrow-right ml-1"></i></a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card bg-dark-2 mt-3" style="width:240px;">
        <div class="bg-primary flex-c-c" style="width:240px;height:240px;border-radius: 8px 8px 0 0;">
          @include('svg.consult.avatar')
        </div>
        {{-- <img class="mb-3" style="border-radius: 8px 8px 0 0;" src="@asset('images/consult/2.jpg')" alt="" width="100%"> --}}
        <div class="card-body">
          <strong><h3 class="pt-2">Your Name Here</h3></strong>
          <p class="badge badge-light lead pt-2">
            $1-5<small class="text-muted">/min</small>
          </p>
          <div class="mt-2 mb-4">
            <p class="badge badge-secondary text-white mr-2">
              Your
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Skills
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Will
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Go
            </p>
            <p class="badge badge-secondary text-white mr-2">
              Here
            </p>
          </div>
          <a href="" class="btn btn-sm primary-gradient float-right" data-toggle="modal" data-target="#consultApplicationModal">Apply Here <i class="fas fa-arrow-right ml-1"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="flex-c-c">
    <a href="" class="btn btn-lg primary-gradient text-white btn-round px-5" data-toggle="modal" data-target="#consultModal">
      Book Consult
      <i class="fas fa-arrow-right ml-1"></i>
    </a>
  </div>
</main>
