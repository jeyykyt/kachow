<div data-isloading="false">
    <div class="col-12 form--centeredBackBtn--uPc3O">
    </div>

    <!-- Wrap this in d-desktop-header -->
    <div class="header-row-center mb-4">
        <a  href="{{ route('make.trims', [
                    'make'  => $make->id,
                    'year'  => $selectedYear,
                    'model' => $modelObj->id,
                  ]) }}" style="text-decoration: none; color: inherit;">
            <button type="button" class=" d-desktop-header BackButton--back--qwJFl header-back-abs">
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
        <h1 class="mb-0 center-title" style="color: #124476;">Do You Own This Vehicle?</h1>
    </div>



    <form action="{{ route('vehicles.store') }}" method="POST">
        @csrf

        <input type="hidden" name="make_id"      value="{{ $make->id }}" />
        <input type="hidden" name="year"         value="{{ $selectedYear }}" />
        <input type="hidden" name="car_model_id" value="{{ $selectedModel }}" />

        {{-- Pass the actual string (or empty if “none”) --}}
        <input
            type="hidden"
            name="trim_name"
            value="{{ $selectedTrim !== 'none' ? $selectedTrim : '' }}"
        />

        <div class="d-flex flex-wrap justify-content-center form--gridify--N3uth mb-4">
            <button
                type="submit"
                name="owns_this"
                value="1"
                class="col-10 col-md-6 form--optionPill--aoYkm form--centered--StlQU mb-3"
                style="text-align: center;"
            >
                YES
            </button>

            <button
                type="submit"
                name="owns_this"
                value="0"
                class="col-10 col-md-6 form--optionPill--aoYkm form--centered--StlQU mb-3"
                style="text-align: center;"
            >
                NO
            </button>
        </div>
    </form>


    <a href="{{ route('make.trims', [
        'make'  => $make->id,
        'year'  => $selectedYear,
        'model' => $modelObj->id,
      ]) }}" style="text-decoration: none; color: inherit;">
            <div class="form--centeredBackBtn--uPc3O d-mobile-back mt-4">
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

<style>
    @media (max-width: 1025px) {
        .d-desktop-header {
            display: none !important;
        }
    }

    @media (max-width: 1200px) {
        .d-desktop-header {
            padding-left: 75px;
        }
    }
</style>

