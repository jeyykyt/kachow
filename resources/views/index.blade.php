<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kachow</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('styles/general.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/header.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/video.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/table.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/incident.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/name.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/address.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- Header -->
<header class="header">
    <div class="header-top">
        <img class="kachow-logo" src="{{ asset('thumbnails/logo.svg') }}">
        <button class="search-button">
            <svg class="call-logo" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path d="M7.464 2.393l2.993 5.558-2.601 1.562a1 1 0 0 0-.101.069l-.092.081a1 1 0 0 0 0 1.414h0l5.26 5.26a1 1 0 0 0 1.564-.193h0l1.561-2.602 5.559 2.994-2.829 2.828a6 6 0 0 1-8.485 0l-5.657-5.657a6 6 0 0 1 0-8.485l2.828-2.829z" stroke="#257eba" stroke-width="2"/>
                </g>
            </svg>
            <div class="call">Free call</div>
        </button>
    </div>

    <div class="progress-bar-container">
        <div class="progress-bar-track">
            <div class="progress-bar-fill" style="width: 25%;"></div>
        </div>
        <h4 class="progress-bar-label" style="right: 25%;">25%</h4>
    </div>
</header>

<!-- Main content -->
<main >
    @if($step === 'make')
        @include('vehicle.make', [
          'featured' => $featured,
          'others'   => $others,
          'selectedMakeId' => $selectedMakeId,
        ])
    @endif

    {{-- STEP 2: Show Year picker (after a make has been clicked) --}}
    @if($step === 'year')
        @include('vehicle.year', [
          'make'  => $make,   // the selected Make model
          'years' => $years,   // a Collection of year integers
          'selectedMakeId'  => $selectedMakeId

        ])
    @endif

    @if($step === 'model')
        @include('vehicle.model', [
          'make'            => $make,
          'selectedYear'    => $selectedYear,
          'models'          => $models,
          'selectedMakeId'  => $selectedMakeId,
        ])
    @endif

        @if($step === 'trim')
            @include('vehicle.trim', [
              'make'           => $make,
              'selectedYear'   => $year,
              'modelObj'       => $modelObj,
              'trims'          => $trims,
              'selectedMakeId' => $selectedMakeId,
              'selectedModel'  => $selectedModel,
            ])
        @endif

        @if($step === 'own')
            @include('vehicle.own', [
              'make'            => $make,
              'selectedYear'    => $selectedYear,
              'modelObj'        => $modelObj,
              'selectedTrim'    => $selectedTrim,
              'selectedMakeId'  => $selectedMakeId,
              'selectedModel'   => $modelObj->id,
            ])
        @endif

        @if($step === 'addVehicle')
            @include('vehicle.addVehicle')
        @endif

        @if($step === 'insured')
            @include('vehicle.insured')
        @endif
{{--    @include('vehicle.ownhouse')--}}
{{--    @include('vehicle.gender')--}}
{{--    @include('vehicle.birthmonth')--}}
{{--    @include('vehicle.birthday')--}}
{{--    @include('vehicle.birthyear')--}}
{{--    @include('vehicle.married')--}}
{{--    @include('vehicle.incidents')--}}
{{--    @include('vehicle.name')--}}
{{--    @include('vehicle.addDriver')--}}
{{--    @include('vehicle.address')--}}
{{--    @include('vehicle.ownership')--}}
{{--    @include('vehicle.email')--}}
{{--    @include('vehicle.number')--}}




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

    <section class="form--footerSection--fpf5T">
        <div class="container-footer">
            <div class="form--logoGroup--x0fPr">
                <h4>Insurance Carriers Include</h4>
                <div class="form--logoGroupRow">
                    <div style="width: 106px; height: 76px"><img src="{{ asset('thumbnails/liberty.svg') }}" alt="Liberty Mutual" loading="lazy"></div>
                    <div style="width: 120px; height: 63px"><img src="{{ asset('thumbnails/safeco.svg') }}" alt="Safeco" loading="lazy"></div>
                    <div style="width: 116px; height: 64px"><img src="{{ asset('thumbnails/farmers.svg') }}" alt="Farmers Insurance" loading="lazy"></div>
                    <div style="width: 120px; height: 57px"><img src="{{ asset('thumbnails/allstate.svg') }}" alt="All State" loading="lazy"></div>
                </div>
                <p>
                    <a href="/privacy/#doNotSellMyInfo">Do Not Sell</a> &nbsp;&bull;&nbsp;
                    <a href="/privacy">Privacy Policy</a> &nbsp;&bull;&nbsp;
                    <a href="/terms">Terms & Conditions</a>
                </p>
            </div>
        </div>
    </section>


</main>
<script>
    // document.querySelectorAll('.custom-dropdown .dropdown-item').forEach(btn => {
    //     btn.addEventListener('click', function(e) {
    //         const value = this.getAttribute('data-value');
    //         const label = this.textContent.trim();
    //
    //         // 1) Update the hidden <select>
    //         const select = document.getElementById('vehicles0make');
    //         select.value = value;
    //
    //         // 2) Update the button label
    //         document.getElementById('makeDropdownLabel').textContent = label;
    //
    //         // 3) Close the menu
    //         bootstrap.Dropdown.getInstance(
    //             document.getElementById('makeDropdownButton')
    //         ).hide();
    //     });
    // });

    document.querySelectorAll('.custom-select-floating select').forEach(function(select) {
        select.addEventListener('focus', function() {
            select.classList.add('open');
        });
        select.addEventListener('blur', function() {
            select.classList.remove('open');
        });

        select.addEventListener('change', function() {
            if (this.value) {
                this.classList.add('filled');
            } else {
                this.classList.remove('filled');
            }
        });
        // On page load, check initial value
        if (select.value) select.classList.add('filled');
    });

    document.querySelectorAll('.make-select-floating select').forEach(function(select) {
        select.addEventListener('focus', function() {
            select.classList.add('open');
        });
        select.addEventListener('blur', function() {
            select.classList.remove('open');
        });

        select.addEventListener('change', function() {
            if (this.value) {
                this.classList.add('filled');
            } else {
                this.classList.remove('filled');
            }
        });
        // On page load, check initial value
        if (select.value) select.classList.add('filled');
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.custom-dropdown').forEach(drop => {
            const selected = drop.querySelector('.custom-dropdown-selected');
            const options = drop.querySelector('.custom-dropdown-options');
            const optionsList = Array.from(options.children);
            const hiddenInput = drop.querySelector('input[type="hidden"]');
            const selectedText = drop.querySelector('.selected-text');
            const label = drop.querySelector('.custom-dropdown-label');

            // Open/close the dropdown, float label up
            selected.addEventListener('click', e => {
                drop.classList.toggle('open');
                if (!drop.classList.contains('has-value')) {
                    drop.classList.add('open-float');
                }
            });

            // Handle option click
            optionsList.forEach(option => {
                option.addEventListener('click', e => {
                    // Set selected text and input
                    optionsList.forEach(opt => opt.classList.remove('active'));
                    option.classList.add('active');
                    selectedText.textContent = option.textContent;
                    hiddenInput.value = option.getAttribute('data-value');

                    drop.classList.add('has-value');
                    drop.classList.remove('open');
                    drop.classList.remove('open-float');
                });
            });

            // Float label up when open, down when closed & no value
            drop.addEventListener('blur', function () {
                drop.classList.remove('open');
                drop.classList.remove('open-float');
            });

            // Close dropdown if clicking outside
            document.addEventListener('click', function (e) {
                if (!drop.contains(e.target)) {
                    drop.classList.remove('open');
                    drop.classList.remove('open-float');
                }
            });

            // Reset label position if page loads with no value
            if (!hiddenInput.value) {
                drop.classList.remove('has-value');
                selectedText.textContent = "";
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".make-custom-dropdown").forEach((drop) => {
            const selected = drop.querySelector(".make-dropdown-selected");
            const options = drop.querySelector(".make-dropdown-options");
            const optionsList = Array.from(options.children);
            const hiddenInput = drop.querySelector('input[type="hidden"]');
            const selectedText = drop.querySelector(".make-selected-text");
            const label = drop.querySelector(".make-dropdown-label");

            // 1) OPEN/CLOSE the dropdown and float label up
            selected.addEventListener("click", (e) => {
                e.stopPropagation(); // prevent immediate blur
                drop.classList.toggle("open");
                if (!drop.classList.contains("has-value")) {
                    drop.classList.add("open-float");
                }
            });

            // 2) HANDLE each option click
            optionsList.forEach((option) => {
                option.addEventListener("click", (e) => {
                    e.stopPropagation();
                    // Remove "active" from all, then add to the clicked one
                    optionsList.forEach((opt) => opt.classList.remove("active"));
                    option.classList.add("active");

                    // Update visible text + hidden input
                    selectedText.textContent = option.textContent;
                    hiddenInput.value = option.getAttribute("data-value");

                    // Mark as “has-value” so the label floats up (persistently)
                    drop.classList.add("has-value");
                    drop.classList.remove("open", "open-float");
                });
            });

            // 3) BLUR: when container loses focus, close and defloat if no value
            drop.addEventListener("blur", (e) => {
                // Give the user a moment to click an option
                setTimeout(() => {
                    drop.classList.remove("open", "open-float");
                    if (!hiddenInput.value) {
                        drop.classList.remove("has-value");
                    }
                }, 150);
            });

            // 4) CLICK OUTSIDE: close any open dropdown
            document.addEventListener("click", function (e) {
                if (!drop.contains(e.target)) {
                    drop.classList.remove("open", "open-float");
                }
            });

            // 5) ON PAGE LOAD: if hiddenInput has a value, show it
            if (hiddenInput.value) {
                drop.classList.add("has-value");
                // find the matching <li> by data-value and mark it active + update displayed text
                const match = optionsList.find(
                    (opt) => opt.getAttribute("data-value") === hiddenInput.value
                );
                if (match) {
                    match.classList.add("active");
                    selectedText.textContent = match.textContent;
                }
            } else {
                // No value yet: remove any float classes
                drop.classList.remove("has-value", "open-float");
                selectedText.textContent = "";
            }
        });
    });


    // Close on outside click
    document.addEventListener('mousedown', e => {
            if (!drop.contains(e.target)) drop.classList.remove('open');
        });

        // Optional: Keyboard accessibility
        drop.addEventListener('keydown', e => {
            const currentIdx = optionsList.findIndex(opt => opt.classList.contains('active'));
            if (e.key === "ArrowDown") {
                let nextIdx = (currentIdx + 1) % optionsList.length;
                optionsList[nextIdx].focus();
            }
            if (e.key === "ArrowUp") {
                let prevIdx = (currentIdx - 1 + optionsList.length) % optionsList.length;
                optionsList[prevIdx].focus();
            }
            if (e.key === "Escape") drop.classList.remove('open');
        });

        option.addEventListener('click', e => {
            optionsList.forEach(opt => opt.classList.remove('active'));
            option.classList.add('active');
            selectedText.textContent = option.textContent;
            hiddenInput.value = option.getAttribute('data-value');
            drop.classList.remove('open');

            // Float label up if selected
            if(option.textContent !== 'State') {
                drop.classList.add('has-value');
            } else {
                drop.classList.remove('has-value');
            }
        });


</script>

</body>
</html>
