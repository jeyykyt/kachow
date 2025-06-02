<div data-isloading="false">
    <div class="col-12 form--centeredBackBtn--uPc3O">
    </div>

    <!-- Wrap this in d-desktop-header -->
    <div class="header-row-center mb-4">
{{--      <a  href="{{ route('make.own', [--}}
{{--      'make'  => $make->id,--}}
{{--      'year'  => $selectedYear,--}}
{{--      'model' => $selectedModel,--}}
{{--      'trim'  => $selectedTrim,--}}
{{--  ]) }}"--}}
{{--        style="text-decoration: none; color: inherit;">--}}
        <button 
                onclick="window.history.back()" type="button" class=" d-desktop-header BackButton--back--qwJFl header-back-abs">
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
        <h1 class="mb-0 center-title" style="color: #124476; max-width: 550px;
">Save an Additional 20% by Adding a 2nd Vehicle</h1>
    </div>

    {{-- resources/views/vehicle/addVehicle.blade.php --}}
    <div class="d-flex flex-wrap justify-content-center form--gridify--N3uth">
        {{-- “Add Another Vehicle” goes back to the Make step (no step parameter) --}}
        <a
            href="{{ route('make.index') }}"
            class="col-10 col-md-6 form--optionPill--aoYkm form--centered--StlQU mb-3 text-center text-decoration-none"
        >
            ADD ANOTHER VEHICLE
        </a>

        {{-- “No thanks!” goes to the Insured step (step=insured) --}}
        <a
            href="{{ route('make.index', ['step' => 'insured']) }}"
            class="col-10 col-md-6 form--btnNo--JEgGg mb-3 text-center "
        >
            No thanks!
        </a>
    </div>



{{--    <a href="{{ route('make.own', [--}}
{{--              'make'  => $make->id,--}}
{{--              'year'  => $selectedYear,--}}
{{--              'model' => $selectedModel,--}}
{{--              'trim'  => $selectedTrim,--}}
{{--         ]) }}" style="text-decoration: none; color: inherit;">--}}
    <div class="form--centeredBackBtn--uPc3O d-mobile-back mt-4">
        <button
                onclick="window.history.back()" type="button" class="BackButton--back--qwJFl BackButton--back--mobile">
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

