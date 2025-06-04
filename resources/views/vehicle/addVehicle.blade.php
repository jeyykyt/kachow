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
        <h1
            class="mb-0 center-title vehicle-header"
            style="color: #124476; max-width: 550px; display: none;"
        >
            Save an Additional 20% by Adding a 2nd Vehicle
        </h1>
    </div>

    {{-- resources/views/vehicle/addVehicle.blade.php --}}
    <div class="d-flex flex-wrap justify-content-center form--gridify--N3uth">
        {{-- “Add Another Vehicle” goes back to the Make step (no step parameter) --}}
        <a
            id="addAnotherVehicle"
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ──────────────────────────────────────────────────────────────────────────
        // UTILITY: return ordinal suffix for an integer (1→“ST”, 2→“ND”, 3→“RD”, else “TH”)
        // ──────────────────────────────────────────────────────────────────────────
        function getOrdinalSuffix(n) {
            const rem100 = n % 100;
            if (rem100 >= 11 && rem100 <= 13) return 'th';
            const rem10 = n % 10;
            if (rem10 === 1) return 'st';
            if (rem10 === 2) return 'nd';
            if (rem10 === 3) return 'rd';
            return 'th';
        }

        // ──────────────────────────────────────────────────────────────────────────
        // A) VEHICLE‐HEADER LOGIC (“Save an Additional 20%…”)
        // ──────────────────────────────────────────────────────────────────────────
        // 1) Read or initialize “vehicleClicks” in localStorage (counts how many times “ADD ANOTHER VEHICLE” clicked)
        let vehicleClicks = parseInt(localStorage.getItem('vehicleClicks') || '0', 10);
        if (isNaN(vehicleClicks)) {
            vehicleClicks = 0;
            localStorage.setItem('vehicleClicks', '0');
        }

        // 2) When “ADD ANOTHER VEHICLE” is clicked, increment and store
        const addAnotherLink = document.getElementById('addAnotherVehicle');
        if (addAnotherLink) {
            addAnotherLink.addEventListener('click', function() {
                localStorage.setItem('vehicleClicks', (vehicleClicks + 1).toString());
                // let the link navigate normally
            });
        }

        // 3) On page load, update the <h1.vehicle-header> text based on vehicleClicks
        const header = document.querySelector('h1.vehicle-header');
        if (header) {
            if (vehicleClicks === 0) {
                // first visit: keep “2nd Vehicle” and show it
                header.style.display = 'block';
            } else {
                // after n clicks, we want “(vehicleClicks + 2)TH/ND/… VEHICLE”
                const ordinalNumber = vehicleClicks + 2;
                const suffix = getOrdinalSuffix(ordinalNumber);
                header.textContent =
                    `Save an Additional 20% by Adding a ${ordinalNumber}${suffix} Vehicle`;
                header.style.display = 'block';
            }
        }

        // ──────────────────────────────────────────────────────────────────────────
        // B) VEHICLE‐TITLE LOGIC (<h5 class="vehicle-title">…</h5> used on Make/Year/Model/Trim/Own)
        // ──────────────────────────────────────────────────────────────────────────
        // On page load, update all <h5 class="vehicle-title"> elements
        document.querySelectorAll('h5.vehicle-title').forEach(function(h5) {
            if (vehicleClicks >= 1) {
                // e.g. if vehicleClicks=1 → “2ND VEHICLE”; if 2 → “3RD VEHICLE”, etc.
                const ordinalNumber = vehicleClicks + 1;
                const suffix = getOrdinalSuffix(ordinalNumber);
                h5.textContent = `${ordinalNumber}${suffix} VEHICLE`;
                h5.style.display = 'block';
            } else {
                h5.style.display = 'none';
            }
        });
    });
</script>
