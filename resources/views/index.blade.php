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
    <link rel="stylesheet" href="{{ asset('styles/accident.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .vehicle-title {
            text-transform: uppercase;
        }
    </style>
    <script>
        // Expose the current PHP $step as a JS variable.
        window.currentStep = "{{ $step }}";
    </script>
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

    @if($step === 'ownHouse')
        @include('vehicle.ownhouse')
    @endif


    @if($step === 'gender')
        <div id="step-gender" style="display: block;">
            @include('vehicle.gender')
        </div>
        <div id="step-birthMonth" style="display: none;">
            @include('vehicle.birthmonth')
        </div>
        <div id="step-birthYear" style="display: none;">
            @include('vehicle.birthyear')
        </div>
        <div id="step-birthDay" style="display: none;">
            @include('vehicle.birthday')
        </div>

        <div id="step-birthYear" style="display: none;">
            @include('vehicle.birthyear')
        </div>

        <div id="step-married" style="display: none;">
            @include('vehicle.married')
        </div>

        <div id="step-incidents" style="display: none;">
            @include('vehicle.incidents')
        </div>


        <div id="step-detailAccident" style="display: none;">
            @include('vehicle.detailAccident')
        </div>

        <div id="step-detailTicket" style="display: none;">
            @include('vehicle.detailTicket')
        </div>

        <div id="step-detailDui" style="display: none;">
            @include('vehicle.detailDui')
        </div>

        <div id="step-name" style="display: none;">
            @include('vehicle.name')
        </div>

        <div id="step-relName" style="display: none;">
            @include('vehicle.relName')
        </div>


        <div id="step-addDriver" style="display: none;">
            @include('vehicle.addDriver')
        </div>

        <div id="step-address" style="display: none;">
            @include('vehicle.address')
        </div>

        <div id="step-ownership" style="display: none;">
            @include('vehicle.ownership')
        </div>

         <div id="step-bundle" style="display: none;">
                @include('vehicle.bundle')
            </div>

        <div id="step-email" style="display: none;">
            @include('vehicle.email')
        </div>

        <div id="step-number" style="display: none;">
            @include('vehicle.number')
        </div>

    @endif


    {{--    @include('vehicle.detailAccident')--}}
    {{--    @include('vehicle.detailAccident')--}}
    {{--    @include('vehicle.detailTicket')--}}
    {{--    @include('vehicle.detailDui')--}}

    {{--    @include('vehicle.ownhouse')--}}
    {{--    @include('vehicle.gender')--}}
    {{--    @include('vehicle.birthmonth')--}}
    {{--    @include('vehicle.birthday')--}}
    {{--    @include('vehicle.birthyear')--}}
    {{--    @include('vehicle.married')--}}
    {{--    @include('vehicle.incidents')--}}

    {{--    @include('vehicle.name')--}}
    {{--    @include('vehicle.relName')--}}
    {{--    @include('vehicle.addDriver')--}}
    {{--    @include('vehicle.address')--}}
    {{--    @include('vehicle.ownership')--}}
    {{--    @include('vehicle.email')--}}
    {{--    @include('vehicle.number')--}}


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
    //PROGRESS BAR
    document.addEventListener('DOMContentLoaded', function() {
        // Map “step → percent”
        const stepToPercent = {
            make: 25,
            year: 37,
            model: 48,
            trim: 57,
            own: 59,
            addVehicle: 68,
            insured: 79,
            ownHouse: 81,
            gender: 87,
            birthmonth: 88,
            birthday: 90,
            birthyear: 91,
            married: 93,
            incident: 94,
            name: 96,
            addDriver: 96,
            address: 97,
            ownership: 97,
            email: 98,
            number: 99
        };

        // 1) Determine current step’s percent
        const curStep = window.currentStep || '';
        const currentPercent = stepToPercent[curStep] || 0;

        // 2) Read “maxProgress” from localStorage (default 0)
        let maxProgress = parseInt(localStorage.getItem('maxProgress') || '0', 10);
        if (isNaN(maxProgress)) {
            maxProgress = 0;
        }

        // 3) If we advanced, update localStorage
        if (currentPercent > maxProgress) {
            maxProgress = currentPercent;
            localStorage.setItem('maxProgress', maxProgress.toString());
        }

        // 4) Render the bar at maxProgress%
        const fillElem  = document.querySelector('.progress-bar-fill');
        const labelElem = document.querySelector('.progress-bar-label');
        if (fillElem && labelElem) {
            fillElem.style.width = maxProgress + '%';
            labelElem.style.right = maxProgress + '%';
            labelElem.textContent = maxProgress + '%';
        }

    });



//ADD VEHICLE LABEL

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

    // //script for routing ONLY
    document.addEventListener('DOMContentLoaded', function() {
    // ──────────────────────────────────────────────────────────────────────────
    // Cache all step containers by ID:
    // ──────────────────────────────────────────────────────────────────────────
    const stepGender            = document.getElementById('step-gender');
    const stepBirthMonth        = document.getElementById('step-birthMonth');
    const stepBirthYear         = document.getElementById('step-birthYear');
    const stepMarried           = document.getElementById('step-married');
    const stepIncidents         = document.getElementById('step-incidents');
    const stepDetailAccident    = document.getElementById('step-detailAccident');
    const stepDetailTicket      = document.getElementById('step-detailTicket');
    const stepDetailDui         = document.getElementById('step-detailDui');
    const stepNameDriver        = document.getElementById('step-name');      // “Driver Name” step
    const stepRelName           = document.getElementById('step-relName');   // “Relation/Driver Name” step
    const stepAddDriver         = document.getElementById('step-addDriver');
    const stepAddress           = document.getElementById('step-address');
    const stepOwnership         = document.getElementById('step-ownership');
    const stepBundle            = document.getElementById('step-bundle');
    const stepEmail             = document.getElementById('step-email');
    const stepNumber            = document.getElementById('step-number');

    // ──────────────────────────────────────────────────────────────────────────
    // Track how many drivers have been added:
    // ──────────────────────────────────────────────────────────────────────────
    let driverCount = 1;

    // Track ownership choice to decide back‐button behavior in email:
    let ownershipChoice = null;

    // Returns ordinal suffix for a number (1→“ST”, 2→“ND”, 3→“RD”, otherwise “TH”)
    function getOrdinalSuffix(n) {
    const rem100 = n % 100;
    if (rem100 >= 11 && rem100 <= 13) return 'TH';
    const rem10 = n % 10;
    if (rem10 === 1) return 'ST';
    if (rem10 === 2) return 'ND';
    if (rem10 === 3) return 'RD';
    return 'TH';
}

    // Updates every <h5 class="center-title"> in driver‐related steps to “NTH DRIVER”
    function updateDriverHeaders(count) {
    const suffix = getOrdinalSuffix(count);
    const text   = `${count}${suffix} DRIVER`;
    [
    stepGender,
    stepBirthMonth,
    stepBirthYear,
    stepMarried,
    stepIncidents,
    stepDetailAccident,
    stepDetailTicket,
    stepDetailDui,
    stepNameDriver,
    stepRelName
    ].forEach(function(step) {
    if (!step) return;
    const h5 = step.querySelector('h5.center-title');
    if (h5) h5.textContent = text;
});
}

    // ──────────────────────────────────────────────────────────────────────────
    // 1) Vehicle Name ↔ AddDriver ↔ Address ↔ Ownership ↔ Bundle ↔ Email ↔ Number flow
    // ──────────────────────────────────────────────────────────────────────────

    // “Vehicle Name” → “AddDriver”
    if (stepNameDriver) {
    // Next → AddDriver
    const nextFromName = stepNameDriver.querySelector('.right-btn');
    if (nextFromName) {
    nextFromName.addEventListener('click', function() {
    stepNameDriver.style.display = 'none';
    stepAddDriver.style.display  = 'block';
});
}

    // Back → Incidents (only if returning from driver‐details)
    stepNameDriver.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepNameDriver.style.display = 'none';
    stepIncidents.style.display  = 'block';
});
});
}

    // “AddDriver”: Yes or No
    if (stepAddDriver) {
    // Back → Vehicle Name
    stepAddDriver.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepAddDriver.style.display    = 'none';
    stepNameDriver.style.display   = 'block';
});
});

    // “Yes” → increment driverCount, update headers, go to Gender
    const btnYes = stepAddDriver.querySelector('.addDriverYes');
    if (btnYes) {
    btnYes.addEventListener('click', function() {
    driverCount += 1;
    updateDriverHeaders(driverCount);
    stepAddDriver.style.display = 'none';
    stepGender.style.display    = 'block';
});
}

    // “No” → skip driver flow, go to Address
    const btnNo = stepAddDriver.querySelector('.addDriverNo');
    if (btnNo) {
    btnNo.addEventListener('click', function() {
    stepAddDriver.style.display = 'none';
    stepAddress.style.display   = 'block';
});
}
}

    // “Address”
    if (stepAddress) {
    // Back → AddDriver
    stepAddress.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepAddress.style.display   = 'none';
    stepAddDriver.style.display = 'block';
});
});

    // Next → Ownership
    const nextFromAddress = stepAddress.querySelector('.right-btn');
    if (nextFromAddress) {
    nextFromAddress.addEventListener('click', function() {
    stepAddress.style.display   = 'none';
    stepOwnership.style.display = 'block';
});
}
}

    // “Ownership”
    if (stepOwnership) {
    // Back → Address
    stepOwnership.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepOwnership.style.display = 'none';
    stepAddress.style.display   = 'block';
});
});

    // “OWN” → go to Bundle
    const btnOwn = stepOwnership.querySelector('.own');
    if (btnOwn) {
    btnOwn.addEventListener('click', function() {
    ownershipChoice = 'own';
    stepOwnership.style.display = 'none';
    stepBundle.style.display    = 'block';
});
}

    // “RENT” and “OTHER” (class “next”) → go to Email
    stepOwnership.querySelectorAll('.next').forEach(function(btn) {
    btn.addEventListener('click', function() {
    ownershipChoice = 'skip';
    stepOwnership.style.display = 'none';
    stepEmail.style.display     = 'block';
});
});
}

    // “Bundle”
    if (stepBundle) {
    // Back → Ownership
    stepBundle.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepBundle.style.display    = 'none';
    stepOwnership.style.display = 'block';
});
});

    // Any “next” in Bundle → go to Email
    stepBundle.querySelectorAll('.next').forEach(function(btn) {
    btn.addEventListener('click', function() {
    // ownershipChoice stays 'own'
    stepBundle.style.display = 'none';
    stepEmail.style.display  = 'block';
});
});
}

    // “Email”
    if (stepEmail) {
    // Back → either Bundle or Ownership
    stepEmail.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepEmail.style.display = 'none';
    if (ownershipChoice === 'own') {
    stepBundle.style.display = 'block';
} else {
    stepOwnership.style.display = 'block';
}
});
});

    // Next → Number
    const nextFromEmail = stepEmail.querySelector('.right-btn');
    if (nextFromEmail) {
    nextFromEmail.addEventListener('click', function() {
    stepEmail.style.display  = 'none';
    stepNumber.style.display = 'block';
});
}
}

    // “Number”
    if (stepNumber) {
    // Back → Email
    stepNumber.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepNumber.style.display = 'none';
    stepEmail.style.display  = 'block';
});
});
}

    // ──────────────────────────────────────────────────────────────────────────
    // 2) Driver Details: Gender → Birth Month → Birth Year → Married → Incidents
    // ──────────────────────────────────────────────────────────────────────────

    // “Gender” → “Birth Month”
    if (stepGender) {
    stepGender.querySelectorAll('.form--optionPill--aoYkm').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepGender.style.display      = 'none';
    stepBirthMonth.style.display  = 'block';
});
});
}

    // “Birth Month”
    if (stepBirthMonth) {
    // Back → Gender
    stepBirthMonth.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepBirthMonth.style.display = 'none';
    stepGender.style.display     = 'block';
});
});

    // Next → Birth Year
    stepBirthMonth.querySelectorAll('.form--optionPill--aoYkm').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepBirthMonth.style.display = 'none';
    stepBirthYear.style.display  = 'block';
});
});
}

    // “Birth Year”
    if (stepBirthYear) {
    // Back → Birth Month
    stepBirthYear.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepBirthYear.style.display   = 'none';
    stepBirthMonth.style.display  = 'block';
});
});

    // Next → Married
    stepBirthYear.querySelectorAll('.form--optionPill--aoYkm').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepBirthYear.style.display = 'none';
    stepMarried.style.display   = 'block';
});
});
}

    // “Married”
    if (stepMarried) {
    // Back → Birth Year
    stepMarried.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepMarried.style.display    = 'none';
    stepBirthYear.style.display  = 'block';
});
});

    // Next → Incidents
    stepMarried.querySelectorAll('.form--optionPill--aoYkm').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepMarried.style.display   = 'none';
    stepIncidents.style.display = 'block';
});
});
}

    // “Incidents”
    if (stepIncidents) {
    // Back → Married
    stepIncidents.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepIncidents.style.display = 'none';
    stepMarried.style.display   = 'block';
});
});

    // Next → detailAccident / detailTicket / detailDui / final name step
    const nextFromIncidents = stepIncidents.querySelector('.right-btn');
    if (nextFromIncidents) {
    nextFromIncidents.addEventListener('click', function() {
    const accident = document.querySelector('input[name="accident"]:checked').value;
    const ticket   = document.querySelector('input[name="ticket"]:checked').value;
    const dui      = document.querySelector('input[name="dui"]:checked').value;

    stepIncidents.style.display = 'none';
    if (accident === 'yes') {
    stepDetailAccident.style.display = 'block';
}
    else if (ticket === 'yes') {
    stepDetailTicket.style.display   = 'block';
}
    else if (dui === 'yes') {
    stepDetailDui.style.display       = 'block';
}
    else {
    // No incidents → choose Name or RelName based on driverCount
    if (driverCount === 1) {
    stepNameDriver.style.display = 'block';
} else if (driverCount > 1) {
    stepRelName.style.display    = 'block';
} else {
    stepNameDriver.style.display = 'block';
}
}
});
}
}

    // ──────────────────────────────────────────────────────────────────────────
    // 3) detailAccident → detailTicket / detailDui / final name step
    // ──────────────────────────────────────────────────────────────────────────
    if (stepDetailAccident) {
    // Back → Incidents
    stepDetailAccident.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepDetailAccident.style.display = 'none';
    stepIncidents.style.display      = 'block';
});
});

    // Next → detailTicket / detailDui / final name step
    const nextAccidentBtn = stepDetailAccident.querySelector('.right-btn');
    if (nextAccidentBtn) {
    nextAccidentBtn.addEventListener('click', function() {
    const ticket = document.querySelector('input[name="ticket"]:checked').value;
    const dui    = document.querySelector('input[name="dui"]:checked').value;

    stepDetailAccident.style.display = 'none';
    if (ticket === 'yes') {
    stepDetailTicket.style.display = 'block';
}
    else if (dui === 'yes') {
    stepDetailDui.style.display = 'block';
}
    else {
    if (driverCount === 1) {
    stepNameDriver.style.display = 'block';
} else if (driverCount > 1) {
    stepRelName.style.display    = 'block';
} else {
    stepNameDriver.style.display = 'block';
}
}
});
}
}

    // ──────────────────────────────────────────────────────────────────────────
    // 4) detailTicket → detailAccident / Incidents → detailDui / final name step
    // ──────────────────────────────────────────────────────────────────────────
    if (stepDetailTicket) {
    // Back → detailAccident or Incidents
    stepDetailTicket.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepDetailTicket.style.display = 'none';
    const accident = document.querySelector('input[name="accident"]:checked').value;
    if (accident === 'yes') {
    stepDetailAccident.style.display = 'block';
} else {
    stepIncidents.style.display = 'block';
}
});
});

    // Next → detailDui or final name step
    const nextTicketBtn = stepDetailTicket.querySelector('.right-btn');
    if (nextTicketBtn) {
    nextTicketBtn.addEventListener('click', function() {
    const dui = document.querySelector('input[name="dui"]:checked').value;
    stepDetailTicket.style.display = 'none';

    if (dui === 'yes') {
    stepDetailDui.style.display = 'block';
} else {
    if (driverCount === 1) {
    stepNameDriver.style.display = 'block';
} else if (driverCount > 1) {
    stepRelName.style.display    = 'block';
} else {
    stepNameDriver.style.display = 'block';
}
}
});
}
}

    // ──────────────────────────────────────────────────────────────────────────
    // 5) detailDui → detailTicket / detailAccident / Incidents → final name step
    // ──────────────────────────────────────────────────────────────────────────
    if (stepDetailDui) {
    // Back → detailTicket / detailAccident / Incidents
    stepDetailDui.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepDetailDui.style.display = 'none';
    const ticket   = document.querySelector('input[name="ticket"]:checked').value;
    const accident = document.querySelector('input[name="accident"]:checked').value;
    if (ticket === 'yes') {
    stepDetailTicket.style.display = 'block';
}
    else if (accident === 'yes') {
    stepDetailAccident.style.display = 'block';
}
    else {
    stepIncidents.style.display = 'block';
}
});
});

    // Next → final name step
    const nextDuiBtn = stepDetailDui.querySelector('.right-btn');
    if (nextDuiBtn) {
    nextDuiBtn.addEventListener('click', function() {
    stepDetailDui.style.display = 'none';
    if (driverCount === 1) {
    stepNameDriver.style.display = 'block';
} else if (driverCount > 1) {
    stepRelName.style.display    = 'block';
} else {
    stepNameDriver.style.display = 'block';
}
});
}
}

    // ──────────────────────────────────────────────────────────────────────────
    // 6) “Driver Name” step (stepNameDriver) → back to AddDriver
    // ──────────────────────────────────────────────────────────────────────────
    if (stepNameDriver) {
    // Back → Incidents (fallback)
    stepNameDriver.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepNameDriver.style.display = 'none';
    stepIncidents.style.display  = 'block';
});
});

    // Next → AddDriver (to add another driver)
    const nextFromNameDriver = stepNameDriver.querySelector('.right-btn');
    if (nextFromNameDriver) {
    nextFromNameDriver.addEventListener('click', function() {
    stepNameDriver.style.display = 'none';
    stepAddDriver.style.display  = 'block';
});
}
}

    // ──────────────────────────────────────────────────────────────────────────
    // 7) “Relation / Driver Name” step (stepRelName) → back to AddDriver
    // ──────────────────────────────────────────────────────────────────────────
    if (stepRelName) {
    // Back → Incidents (fallback)
    stepRelName.querySelectorAll('.header-back-abs, .left-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
    stepRelName.style.display  = 'none';
    stepIncidents.style.display = 'block';
});
});

    // Next → AddDriver (to add another driver)
    const nextFromRelName = stepRelName.querySelector('.right-btn');
    if (nextFromRelName) {
    nextFromRelName.addEventListener('click', function() {
    stepRelName.style.display    = 'none';
    stepAddDriver.style.display  = 'block';
});
}
}
});





    // // ?????????
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

    document.querySelectorAll('.make-select-floating select').forEach(function (select) {
        select.addEventListener('focus', function () {
            select.classList.add('open');
        });
        select.addEventListener('blur', function () {
            select.classList.remove('open');
        });

        select.addEventListener('change', function () {
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
        if (option.textContent !== 'State') {
            drop.classList.add('has-value');
        } else {
            drop.classList.remove('has-value');
        }
    });


</script>

</body>
</html>



{{--2nd Driver--}}
{{--<div id="step-2gender" style="display: none;">--}}
{{--    @include('addDriver.gender')--}}
{{--</div>--}}
{{--<div id="step-2birthMonth" style="display: none;">--}}
{{--    @include('addDriver.birthmonth')--}}
{{--</div>--}}
{{--<div id="step-2birthYear" style="display: none;">--}}
{{--    @include('addDriver.birthyear')--}}
{{--</div>--}}
{{--<div id="step-2birthDay" style="display: none;">--}}
{{--    @include('addDriver.birthday')--}}
{{--</div>--}}

{{--<div id="step-2married" style="display: none;">--}}
{{--    @include('addDriver.married')--}}
{{--</div>--}}

{{--<div id="step-2incidents" style="display: none;">--}}
{{--    @include('addDriver.incidents')--}}
{{--</div>--}}


{{--<div id="step-2detailAccident" style="display: none;">--}}
{{--    @include('addDriver.detailAccident')--}}
{{--</div>--}}

{{--<div id="step-2detailTicket" style="display: none;">--}}
{{--    @include('addDriver.detailTicket')--}}
{{--</div>--}}

{{--<div id="step-2detailDui" style="display: none;">--}}
{{--    @include('addDriver.detailDui')--}}
{{--</div>--}}


{{--<div id="step-2relName" style="display: none;">--}}
{{--    @include('addDriver.relName')--}}
{{--</div>--}}


{{--2nd Driver--}}
