<div data-isloading="false">


    <!-- Wrap this in d-desktop-header -->
    <div class="header-row-center mb-4" style="display: flex; align-items: center; justify-content: center;">
        <!-- Back button (unchanged) -->
        <a href="{{ route('make.index', ['selected' => $make->id]) }}"
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
                Vehicle Trim
            </h1>
        </div>
    </div>


    <div class="d-flex flex-wrap justify-content-center form--gridify--N3uth mb-4">

        @if($trims->isEmpty())
            {{-- 1a) Show the message as a full-width row (w-100) --}}
            <div class="w-100 text-center mb-3">
                <p class="text-muted">
                    No trims available for
                    <strong>{{ strtoupper($make->name) }} {{ $selectedYear }} {{ strtoupper($modelObj->name) }}</strong>.
                </p>
            </div>

            {{-- 1b) Now emit your “Continue” pill exactly where a real trim would go --}}
            <a
                href="{{ route('make.own', [
          'make'  => $make->id,
          'year'  => $selectedYear,
          'model' => $modelObj->id,
            'trim' => 'none',
        ]) }}"
                class="col-10 col-md-6 form--optionPill--aoYkm form--centered--StlQU mb-3 text-center text-decoration-none"
            >
                Continue without selecting trim
            </a>
        @else
            @foreach($trims as $trim)
                <a href="{{ route('make.own', [
      'make'  => $make->id,
      'year'  => $selectedYear,
      'model' => $modelObj->id,
      'trim'  => $trim,
                  ]) }}" class="col-10 col-md-6 form--optionPill--aoYkm form--centered--StlQU mb-3 text-center text-decoration-none">

                        {{ $trim }}
                </a>
            @endforeach
        @endif

    </div>


    <div class="form--centeredBackBtn--uPc3O d-mobile-back mt-4">
        <a  href="{{ route('make.models', [
        'make' => $make->id,
        'year' => $selectedYear,
      ]) }}" style="text-decoration: none; color: inherit;">
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
        </a>
    </div>
</div>

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

