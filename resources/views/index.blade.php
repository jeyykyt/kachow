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

    // //script for routing ONLY

    document.addEventListener('DOMContentLoaded', function() {
        // Gender to Birth Month
        document.querySelectorAll('#step-gender .form--optionPill--aoYkm').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-gender').style.display = 'none';
                document.getElementById('step-birthMonth').style.display = 'block';
            });
        });

        // Birth Month to Birth Year
        document.querySelectorAll('#step-birthMonth .form--optionPill--aoYkm').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-birthMonth').style.display = 'none';
                document.getElementById('step-birthYear').style.display = 'block';
            });
        });

        // Birth Year to Married
        document.querySelectorAll('#step-birthYear .form--optionPill--aoYkm').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-birthYear').style.display = 'none';
                document.getElementById('step-married').style.display = 'block';
            });
        });

        // Married to Incidents
        document.querySelectorAll('#step-married .form--optionPill--aoYkm').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-married').style.display = 'none';
                document.getElementById('step-incidents').style.display = 'block';
            });
        });

        // --- Back buttons for each step ---
        // Back: Birth Month -> Gender
        document.querySelectorAll('#step-birthMonth .header-back-abs').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-birthMonth').style.display = 'none';
                document.getElementById('step-gender').style.display = 'block';
            });
        });
        // Back: Birth Year -> Birth Month
        document.querySelectorAll('#step-birthYear .header-back-abs').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-birthYear').style.display = 'none';
                document.getElementById('step-birthMonth').style.display = 'block';
            });
        });
        // Back: Married -> Birth Year
        document.querySelectorAll('#step-married .header-back-abs').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-married').style.display = 'none';
                document.getElementById('step-birthYear').style.display = 'block';
            });
        });
        // Back: Incidents -> Married
        document.querySelectorAll('#step-incidents .left-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-incidents').style.display = 'none';
                document.getElementById('step-married').style.display = 'block';
            });
        });

    });

    document.addEventListener('DOMContentLoaded', function() {
        // Cache references to each step‐wrapper
        const stepIncidents     = document.getElementById('step-incidents');
        const stepAccident      = document.getElementById('step-detailAccident');
        const stepTicket        = document.getElementById('step-detailTicket');
        const stepDui           = document.getElementById('step-detailDui');
        const stepName          = document.getElementById('step-name');

        // The “Next” button inside step‐incidents
        const nextBtn = stepIncidents.querySelector('.right-btn');
        nextBtn.addEventListener('click', function() {
            // 1) Read each radio’s value
            const accident = document.querySelector('input[name="accident"]:checked').value;
            const ticket   = document.querySelector('input[name="ticket"]:checked').value;
            const dui      = document.querySelector('input[name="dui"]:checked').value;

            // 2) Hide the incidents step
            stepIncidents.style.display = 'none';

            // 3) Show the next appropriate step
            if (accident === 'yes') {
                stepAccident.style.display = 'block';
            }
            else if (ticket === 'yes') {
                stepTicket.style.display = 'block';
            }
            else if (dui === 'yes') {
                stepDui.style.display = 'block';
            }
            else {
                // All “No” → jump directly to “name”
                stepName.style.display = 'block';
            }
        });

        // You probably want Back‐buttons in each detail view to jump backward:
        // (For brevity I only show one. Repeat the same pattern in detailAccident, detailTicket, etc.)
        stepAccident.querySelectorAll('.header-back-abs, .left-btn').forEach(function(el) {
            el.addEventListener('click', function () {
                stepAccident.style.display = 'none';
                stepIncidents.style.display = 'block';
            });
        });
        stepAccident.querySelectorAll('.header-back-abs, .left-btn').forEach(function(el) {
            el.addEventListener('click', function () {
                stepTicket.style.display = 'none';
                stepIncidents.style.display = 'block';
            });
        });
            stepAccident.querySelectorAll('.header-back-abs, .left-btn').forEach(function (el) {
                el.addEventListener('click', function () {
                    stepDui.style.display = 'none';
                    stepIncidents.style.display = 'block';
                });
            });
                // Finally, if user is on detailAccident and presses Next inside that, you can repeat logic:
                // e.g. a Next button inside detailAccident would hide #step-detailAccident and then:
                //    if (ticket==='yes') show #step-detailTicket; else if (dui==='yes') show #step-detailDui; else show #step-name

                // Example for “Next” inside detailAccident (assume it has class .right-btn too):
                const nextAccidentBtn = stepAccident.querySelector('.right-btn');
                if (nextAccidentBtn) {
                    nextAccidentBtn.addEventListener('click', function () {
                        stepAccident.style.display = 'none';
                        // Now skip to “ticket” or “dui” or “name”
                        const ticket = document.querySelector('input[name="ticket"]:checked').value;
                        const dui = document.querySelector('input[name="dui"]:checked').value;
                        if (ticket === 'yes') {
                            stepTicket.style.display = 'block';
                        } else if (dui === 'yes') {
                            stepDui.style.display = 'block';
                        } else {
                            stepName.style.display = 'block';
                        }
                    });
                }

                // Similarly, inside detailTicket:
                const nextTicketBtn = stepTicket.querySelector('.right-btn');
                if (nextTicketBtn) {
                    nextTicketBtn.addEventListener('click', function () {
                        stepTicket.style.display = 'none';
                        const dui = document.querySelector('input[name="dui"]:checked').value;
                        if (dui === 'yes') {
                            stepDui.style.display = 'block';
                        } else {
                            stepName.style.display = 'block';
                        }
                    });
                }

                // Inside detailDui:
                const nextDuiBtn = stepDui.querySelector('.right-btn');
                if (nextDuiBtn) {
                    nextDuiBtn.addEventListener('click', function () {
                        stepDui.style.display = 'none';
                        stepName.style.display = 'block';
                    });
                }

                // If you want a Back button on “Name” to jump back to whichever detail was last,
                // you’d need to track “where we came from.” But in most funnels, once you hit “Name,”
                // the only “Back” is to go back to the immediately preceding detail page.
            });

    document.addEventListener('DOMContentLoaded', function() {
        // name to AddDriver
        document.querySelectorAll('#step-gender .form--optionPill--aoYkm').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-gender').style.display = 'none';
                document.getElementById('step-birthMonth').style.display = 'block';
            });
        });

        // Birth Month to Birth Year
        document.querySelectorAll('#step-birthMonth .form--optionPill--aoYkm').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-birthMonth').style.display = 'none';
                document.getElementById('step-birthYear').style.display = 'block';
            });
        });

        // Birth Year to Married
        document.querySelectorAll('#step-birthYear .form--optionPill--aoYkm').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-birthYear').style.display = 'none';
                document.getElementById('step-married').style.display = 'block';
            });
        });

        // Married to Incidents
        document.querySelectorAll('#step-married .form--optionPill--aoYkm').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-married').style.display = 'none';
                document.getElementById('step-incidents').style.display = 'block';
            });
        });

        // --- Back buttons for each step ---
        // Back: Birth Month -> Gender
        document.querySelectorAll('#step-birthMonth .header-back-abs').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-birthMonth').style.display = 'none';
                document.getElementById('step-gender').style.display = 'block';
            });
        });
        // Back: Birth Year -> Birth Month
        document.querySelectorAll('#step-birthYear .header-back-abs').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-birthYear').style.display = 'none';
                document.getElementById('step-birthMonth').style.display = 'block';
            });
        });
        // Back: Married -> Birth Year
        document.querySelectorAll('#step-married .header-back-abs').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-married').style.display = 'none';
                document.getElementById('step-birthYear').style.display = 'block';
            });
        });
        // Back: Incidents -> Married
        document.querySelectorAll('#step-incidents .left-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-incidents').style.display = 'none';
                document.getElementById('step-married').style.display = 'block';
            });
        });

        document.querySelectorAll('#step-name .left-btn .header-back-abs').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('step-name').style.display = 'none';
                document.getElementById('step-incidents').style.display = 'block';
            });
        });

    });

    document.addEventListener('DOMContentLoaded', function() {
        // Cache each step‐wrapper by its ID
        const stepIncidents = document.getElementById('step-incidents');
        const stepName      = document.getElementById('step-name');
        const stepAddDriver = document.getElementById('step-addDriver');
        const stepAddress   = document.getElementById('step-address');
        const stepOwnership   = document.getElementById('step-ownership');
        const stepEmail   = document.getElementById('step-email');
        const stepNumber   = document.getElementById('step-number');

        // (If you have more steps, cache them here too.)

        //========================================================================
        // 1) From *Vehicle Name* step: Next → AddDriver ; Back → Incidents
        //========================================================================
        if (stepAddDriver) {
            const btnBackAddList = stepAddDriver.querySelectorAll('.header-back-abs, .left-btn');
            btnBackAddList.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    stepAddDriver.style.display = 'none';
                    stepName.style.display      = 'block';
                });
            });
        }

// (2) Now handle stepName’s Back & Next:
        if (stepName) {
            // Back button(s) inside stepName should go back to Incidents:
            const btnBackNameList = stepName.querySelectorAll('.header-back-abs, .left-btn');
            btnBackNameList.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    stepName.style.display      = 'none';
                    stepIncidents.style.display = 'block';
                });
            });

            // Next button inside stepName should go forward to AddDriver:
            const btnNextName = stepName.querySelector('.right-btn');
            if (btnNextName) {
                btnNextName.addEventListener('click', function() {
                    stepName.style.display      = 'none';
                    stepAddDriver.style.display = 'block';
                });
            }
        }

        if (stepAddress) {
            // Back button(s) inside address should go back to addDriver:
            const btnBackAddressList = stepAddress.querySelectorAll('.header-back-abs, .left-btn');
            btnBackAddressList.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    stepAddress.style.display      = 'none';
                    stepAddDriver.style.display = 'block';
                });
            });

            // Next button inside step Address should go forward to Ownership:
            const btnNextAddress = stepAddress.querySelector('.right-btn');
            if (btnNextAddress) {
                btnNextAddress.addEventListener('click', function() {
                    stepAddress.style.display      = 'none';
                    stepOwnership.style.display = 'block';
                });
            }
        }

        if (stepOwnership) {

            const btnBackAddressList = stepOwnership.querySelectorAll('.header-back-abs, .left-btn');
            btnBackAddressList.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    stepOwnership.style.display      = 'none';
                    stepAddress.style.display = 'block';
                });
            });

            // Next button inside step Address should go forward to Ownership:
            const btnNext= stepOwnership.querySelectorAll('.next');
            btnNext.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    stepOwnership.style.display      = 'none';
                    stepEmail.style.display = 'block';
                });
            });
        }

        if (stepEmail) {

            const btnBackEmailList = stepEmail.querySelectorAll('.header-back-abs, .left-btn');
            btnBackEmailList.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    stepEmail.style.display      = 'none';
                    stepOwnership.style.display = 'block';
                });
            });

            // Next button inside step Address should go forward to Ownership:
            const btnNextEmail = stepEmail.querySelector('.right-btn');
            if (btnNextEmail) {
                btnNextEmail.addEventListener('click', function() {
                    stepEmail.style.display      = 'none';
                    stepNumber.style.display = 'block';
                });
            }
        }
        //========================================================================
        // 2) From *AddDriver* step:
        //      - Back → Vehicle Name
        //      - “YES” → move into the driver‐details flow (gender, birth*, etc.)
        //      - “NO”  → go to Address step
        //========================================================================
        if (stepAddDriver) {
            // Back arrow(s):
            const btnBackAdds = stepAddDriver.querySelectorAll('.header-back-abs');
            btnBackAdds.forEach(function(btnBackAdd) {
                btnBackAdd.addEventListener('click', function() {
                    stepAddDriver.style.display = 'none';
                    stepName.style.display      = 'block';
                });
            });
        }

        // If “YES” is clicked → show the driver‐details flow
        const btnYes = stepAddDriver.querySelector('.addDriverYes');
        if (btnYes) {
        btnYes.addEventListener('click', function() {
        stepAddDriver.style.display = 'none';
        // Now show #step-gender (the first of gender→birthmonth→birthday→…)
        // I’ll assume you have an element <div id="step-gender">…</div>
        document.getElementById('step-gender').style.display = 'block';
    });
    }

        // If “NO” is clicked → skip driver flow and go to Address
        const btnNo = stepAddDriver.querySelector('.addDriverNo');
        if (btnNo) {
        btnNo.addEventListener('click', function() {
        stepAddDriver.style.display = 'none';
        stepAddress.style.display   = 'block';
    });
    }


        //========================================================================
        // 3) Example of chaining inside the “driver‐details” flow
        //    (gender → birthmonth → birthday → birthyear → married → incidents → relName → back to AddDriver)
        //    You’ll repeat exactly the same pattern for each sub‐step:
        //      – find .left-btn (Back) to hide current & show previous
        //      – find .right-btn (Next) to hide current & show next
        //
        //    Below is an example for “gender” → “birthmonth” and “gender” Back → AddDriver.
        //========================================================================

        // (a) Gender step
        const stepGender     = document.getElementById('step-2gender');
        const stepBirthMonth = document.getElementById('step-2birthmonth');
        if (stepGender && stepBirthMonth) {
        // Back from Gender → AddDriver
        const backGender = stepGender.querySelector('.left-btn');
        if (backGender) {
        backGender.addEventListener('click', function() {
        stepGender.style.display    = 'none';
        stepAddDriver.style.display = 'block';
    });
    }
        // Next from Gender → BirthMonth
        const nextGender = stepGender.querySelector('.right-btn');
        if (nextGender) {
        nextGender.addEventListener('click', function() {
        stepGender.style.display     = 'none';
        stepBirthMonth.style.display = 'block';
    });
    }
    }

        // (b) BirthMonth → Birthday
        const stepBirthday  = document.getElementById('step-2birthday');
        if (stepBirthMonth && stepBirthday) {
        // Back from BirthMonth → Gender
        const backBM = stepBirthMonth.querySelector('.left-btn');
        if (backBM) {
        backBM.addEventListener('click', function() {
        stepBirthMonth.style.display = 'none';
        stepGender.style.display     = 'block';
    });
    }
        // Next from BirthMonth → Birthday
        const nextBM = stepBirthMonth.querySelector('.right-btn');
        if (nextBM) {
        nextBM.addEventListener('click', function() {
        stepBirthMonth.style.display = 'none';
        stepBirthday.style.display   = 'block';
    });
    }
    }

        // (c) Birthday → BirthYear
        const stepBirthYear = document.getElementById('step-2birthyear');
        if (stepBirthday && stepBirthYear) {
        const backBD = stepBirthday.querySelector('.left-btn');
        if (backBD) {
        backBD.addEventListener('click', function() {
        stepBirthday.style.display  = 'none';
        stepBirthMonth.style.display = 'block';
    });
    }
        const nextBD = stepBirthday.querySelector('.right-btn');
        if (nextBD) {
        nextBD.addEventListener('click', function() {
        stepBirthday.style.display  = 'none';
        stepBirthYear.style.display = 'block';
    });
    }
    }

        // (d) BirthYear → Married
        const stepMarried = document.getElementById('step-2married');
        if (stepBirthYear && stepMarried) {
        const backBY = stepBirthYear.querySelector('.left-btn');
        if (backBY) {
        backBY.addEventListener('click', function() {
        stepBirthYear.style.display = 'none';
        stepBirthday.style.display  = 'block';
    });
    }
        const nextBY = stepBirthYear.querySelector('.right-btn');
        if (nextBY) {
        nextBY.addEventListener('click', function() {
        stepBirthYear.style.display = 'none';
        stepMarried.style.display   = 'block';
    });
    }
    }

        // (e) Married → Incidents (for this driver)
        const stepIncidentsDriver = document.getElementById('step-2incidents');
        if (stepMarried && stepIncidentsDriver) {
        const backM = stepMarried.querySelector('.left-btn');
        if (backM) {
        backM.addEventListener('click', function() {
        stepMarried.style.display   = 'none';
        stepBirthYear.style.display = 'block';
    });
    }
        const nextM = stepMarried.querySelector('.right-btn');
        if (nextM) {
        nextM.addEventListener('click', function() {
        stepMarried.style.display       = 'none';
        stepIncidentsDriver.style.display = 'block';
    });
    }
    }

        // (f) IncidentsDriver → RelName
        const stepRelName = document.getElementById('step-2relName');
        if (stepIncidentsDriver && stepRelName) {
        const backID = stepIncidentsDriver.querySelector('.left-btn');
        if (backID) {
        backID.addEventListener('click', function() {
        stepIncidentsDriver.style.display = 'none';
        stepMarried.style.display         = 'block';
    });
    }
        const nextID = stepIncidentsDriver.querySelector('.right-btn');
        if (nextID) {
        nextID.addEventListener('click', function() {
        stepIncidentsDriver.style.display = 'none';
        stepRelName.style.display         = 'block';
    });
    }
    }

        // (g) RelName → back to AddDriver (the loop)
        if (stepRelName) {
        const backRN = stepRelName.querySelector('.left-btn');
        if (backRN) {
        backRN.addEventListener('click', function() {
        stepRelName.style.display    = 'none';
        stepAddDriver.style.display = 'block';
    });
    }
        const nextRN = stepRelName.querySelector('.right-btn');
        if (nextRN) {
        nextRN.addEventListener('click', function() {
        // After relName, you might want to show AddDriver again (to ask “Add another?”)
        stepRelName.style.display    = 'none';
        stepAddDriver.style.display = 'block';
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
