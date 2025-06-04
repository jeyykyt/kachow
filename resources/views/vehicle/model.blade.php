<div data-isloading="false">
    <div class="col-12 form--centeredBackBtn--uPc3O">
    </div>

    <!-- Wrap this in d-desktop-header -->
    <div class="header-row-center mb-4" style="display: flex; align-items: center; justify-content: center;">
        <!-- Back button (unchanged) -->
        <a href="{{ route('make.years', $make->id) }}"
           style="text-decoration: none; color: inherit; margin-right: 1rem;">
            <button type="button" class="d-desktop-header BackButton--back--qwJFl header-back-abs">
      <span class="arrow-wrapper">
        <svg width="24" height="24" viewBox="0 0 24 24" style="transform: rotate(180deg);">
          <g fill="none" fill-rule="evenodd">
            <path stroke="#124476" stroke-width="2" d="M14 20.485L22.485 12h0L14 3.515"></path>
            <path stroke="#124476" stroke-width="2" stroke-linecap="square" d="M1 12.5h20"></path>
          </g>
        </svg>
      </span>
                <span style="font-size: 17px">Back</span>
            </button>
        </a>

        <!-- Wrapper that stacks H5 above H1 -->
        <div class="header-text-stack" style="display: flex; flex-direction: column; align-items: center;">
            <!-- 2ND VEHICLE (h5) -->
            <h5
                class="mb-0 center-title vehicle-title"
                style="color: #46c2e8; font-size: 14px; font-weight: bold; display: none;"
            >
                1ST VEHICLE
            </h5>

            <!-- Main title (h1) -->
            <h1 class="mb-0 center-title" style="color: #124476; margin-top: 0.25rem;">
                Vehicle Model
            </h1>
        </div>
    </div>


    <div class="d-flex flex-wrap justify-content-center form--gridify--N3uth">
        @foreach($models as $model)
            <a
                href="{{ route('make.trims', [
                                    'make'  => $make->id,
                                    'year'  => $selectedYear,
                                    'model' => $model->id,
                                  ]) }}"
                class="col-10 col-sm-5 col-lg-3 form--optionPill--aoYkm mb-3 text-center text-decoration-none"
            >
                {{ $model->name }}
            </a>
        @endforeach

        @if($models->isEmpty())
            <div class="text-muted">No models found for {{ strtoupper($make->name) }} {{ $selectedYear }}.</div>
        @endif

    </div>

    <a  href="{{ route('make.years', $make->id) }}" style="text-decoration: none; color: inherit;">
            <div  class="form--centeredBackBtn--uPc3O d-mobile-back mt-4">
                <button type="button" class="BackButton--back--qwJFl BackButton--back--mobile">
                    <span class="arrow-wrapper">
                        <svg width="24" height="24" viewBox="0 0 24 24" style="transform: rotate(180deg);">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#124476" stroke-width="2" d="M14 20.485L22.485 12h0L14 3.515"></path>
                                <path stroke="#124476" stroke-width="2" stroke-linecap="square" d="M1 12.5h20"></path>
                            </g>
                        </svg>
                    </span>
                    <span style="font-size: 17px">Back</span>
                </button>
            </div>
    </a>
</div>
{{--LADY FOOTERR--}}
<section class="form--legalFooter--SaZVO">
    <div class="form--helperText--V2kC4">
        <img src="{{ asset('thumbnails/lady.png') }}">
        <span style="font-weight: normal">
            <div class="form--checkCircle--3Rxe3">
                <svg viewBox="0 0 20 20" fill="none">
                    <path d="M6 10.156L8.9 13 14 8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            Tell us what car you drive and we’ll look for the best rates
        </span>
    </div>
</section>

<style>
    @media (max-width: 1025px) {
        .d-desktop-header {
            display: none !important;
        }
        @media (max-width: 1200px) {
            .d-desktop-header {
                padding-left: 75px;
            }
    }
</style>

