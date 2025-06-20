{{-- resources/views/vehicle/detailTicket.blade.php --}}
<div data-isloading="false">

    <!-- … header, “1ST DRIVER – Ticket Details” etc. … -->
    <div class="header-row-center mb-4">
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
        <div>
            <h5 class="mb-0 center-title" style="color: #46c2e8; font-size: 14px; font-weight: bold">1ST DRIVER</h5>

            <h1 class="mb-0 center-title" style="color: #124476;">
                Ticket Details
            </h1>
        </div>
    </div>


    <div id="tickets-container">
        <div class="ticket-entry">
            <div class="form-custom-grid">
                <!-- ▼ Month / Year Row (for ticket #0) ▼ -->
                <div class="custom-double-input-row">
                    {{-- Month Dropdown (index=0) --}}
                    <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                        <label class="custom-ticket-dropdown-label" for="ticket_0_month">Month</label>
                        <div class="custom-dropdown-selected">
                            <span class="selected-text"></span>
                            <span class="custom-dropdown-arrow">
                <svg width="32" height="32" viewBox="0 0 24 24">
                  <polyline points="8 10 12 14 16 10"
                            stroke="#858A8DFF"
                            stroke-width="1.5"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"/>
                </svg>
              </span>
                        </div>
                        <ul class="custom-dropdown-options">
                            <li data-value="01">Jan</li>
                            <li data-value="02">Feb</li>
                            <li data-value="03">Mar</li>
                            <li data-value="04">Apr</li>
                            <li data-value="05">May</li>
                            <li data-value="06">Jun</li>
                            <li data-value="07">Jul</li>
                            <li data-value="08">Aug</li>
                            <li data-value="09">Sep</li>
                            <li data-value="10">Oct</li>
                            <li data-value="11">Nov</li>
                            <li data-value="12">Dec</li>
                        </ul>
                        <input type="hidden" name="ticket[0][month]" id="ticket_0_month" />
                    </div>

                    {{-- Year Dropdown (index=0) --}}
                    <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                        <label class="custom-ticket-dropdown-label" for="ticket_0_year">Year</label>
                        <div class="custom-dropdown-selected">
                            <span class="selected-text"></span>
                            <span class="custom-dropdown-arrow">
                <svg width="32" height="32" viewBox="0 0 24 24">
                  <polyline points="8 10 12 14 16 10"
                            stroke="#858A8DFF"
                            stroke-width="1.5"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"/>
                </svg>
              </span>
                        </div>
                        <ul class="custom-dropdown-options">
                            <li data-value="2025">2025</li>
                            <li data-value="2024">2024</li>
                            <li data-value="2023">2023</li>
                            <li data-value="2022">2022</li>
                        </ul>
                        <input type="hidden" name="ticket[0][year]" id="ticket_0_year" />
                    </div>
                </div>
                <!-- ▲ End Month / Year Row ▲ -->

                <!-- Ticket Description (index=0) -->
                <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                    <label class="custom-ticket-dropdown-label" for="ticket_0_desc">
                        Ticket Description
                    </label>
                    <div class="custom-dropdown-selected">
                        <span class="selected-text"></span>
                        <span class="custom-dropdown-arrow">
              <svg width="32" height="32" viewBox="0 0 24 24">
                <polyline points="8 10 12 14 16 10"
                          stroke="#858A8DFF"
                          stroke-width="1.5"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
              </svg>
            </span>
                    </div>
                    <ul class="custom-dropdown-options">
                        <li data-value="other">Speeding</li>
                        <li data-value="other">Speeding Less Than 10 MPH Over</li>
                        <li data-value="other">Speeding More Than 10 MPH Over</li>
                        <li data-value="other">Speeding More Than 20 MPH Over</li>
                        <li data-value="other">Driving Too Fast For Conditions</li>
                        <li data-value="other">Careless Driving</li>
                        <li data-value="other">Inattentive Driving</li>
                        <li data-value="other">Ran A Red Light</li>
                        <li data-value="other">Ran A Stop Light</li>
                        <li data-value="other">Illegal Lane Change</li>
                        <li data-value="other">Illegal Passing</li>
                        <li data-value="other">Illegal Turn</li>
                        <li data-value="other">Illegal Turn On Red</li>
                        <li data-value="other">Illegal U Turn</li>
                        <li data-value="other">Failure To Obey Traffic Signal</li>
                        <li data-value="other">Failure To Signal</li>
                        <li data-value="other">Failure To Stop</li>
                        <li data-value="other">Failure To Yield</li>
                        <li data-value="other">No Seatbelt</li>
                        <li data-value="other">No Insurance</li>
                        <li data-value="hit_vehicle">Following Too Close</li>
                        <li data-value="hit_vehicle">Driving Without A license</li>
                        <li data-value="hit_vehicle">Expired Driver License</li>
                        <li data-value="hit_vehicle">Expired Driver License</li>
                        <li data-value="hit_vehicle">Expired Registration</li>
                        <li data-value="hit_vehicle">Carpool Lane Violation</li>
                    </ul>
                    <input type="hidden" name="ticket[0][description]" id="ticket_0_desc" />
                </div>

                <!-- Trash icon for ticket #0 (hidden by default) -->
                <div class="button-row-flex">
                    <button type="button" class="remove-ticket" style="display: none;">
                        <svg width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="#124476" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6" />
                            <path
                                d="M19 6l-1 14H6L5 6m5 0V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"
                            />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /#tickets-container -->

    <!-- “Add another ticket” + Right‐arrow button row -->
    <div class="form-custom-grid">
        <div><a class="addTicket">
                <svg width="24" height="24" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg"
                     style="vertical-align: middle; margin-right: 8px;">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-width="2" stroke-linecap="square"
                              d="M3 12.5h18M12 3.5v18"></path>
                    </g>
                </svg>
                <span style="font-size: 18px; color: #124476;">
          Add Another Ticket
        </span>
            </a></div>
        <div class="button-row-flex">

            <button type="button" class="left-btn">
            <span class="arrow-wrapper">
                <svg width="24" height="24" viewBox="0 0 24 24" style="transform: rotate(180deg);">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#124476" stroke-width="2" d="M14 20.485L22.485 12h0L14 3.515"></path>
                        <path stroke="#124476" stroke-width="2" stroke-linecap="square" d="M1 12.5h20"></path>
                    </g>
                </svg>
            </span>
            </button>
            <button type="button" class="form--tertiary--nncFY TertiaryButton--tertiary--AsvEe right-btn">
        <span class="arrow-wrapper">
          <svg width="24" height="24" viewBox="0 0 24 24">
            <g fill="none" fill-rule="evenodd">
              <path stroke="#fff" stroke-width="2"
                    d="M14 20.485L22.485 12h0L14 3.515"></path>
              <path stroke="#fff" stroke-width="2" stroke-linecap="square"
                    d="M1 12.5h20"></path>
            </g>
          </svg>
        </span>
            </button>
        </div>
    </div>
</div>

<!-- Hidden template for new tickets -->
<template id="ticket-template">
    <div class="ticket-entry">
        <div class="form-custom-grid">
            <hr style="margin: 0 0 24px 0; border-color: #DDD;" />

            <!-- ▼ Month / Year Row (clone) ▼ -->
            <div class="custom-double-input-row">
                <!-- Month -->
                <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                    <label class="custom-ticket-dropdown-label">
                        Month
                    </label>
                    <div class="custom-dropdown-selected">
                        <span class="selected-text"></span>
                        <span class="custom-dropdown-arrow">
            <svg width="32" height="32" viewBox="0 0 24 24">
                <polyline points="8 10 12 14 16 10"
                          stroke="#858A8DFF"
                          stroke-width="1.5"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
              </svg>
            </span>
                    </div>
                    <ul class="custom-dropdown-options">
                        <li data-value="01">Jan</li>
                        <li data-value="02">Feb</li>
                        <li data-value="03">Mar</li>
                        <li data-value="04">Apr</li>
                        <li data-value="05">May</li>
                        <li data-value="06">Jun</li>
                        <li data-value="07">Jul</li>
                        <li data-value="08">Aug</li>
                        <li data-value="09">Sep</li>
                        <li data-value="10">Oct</li>
                        <li data-value="11">Nov</li>
                        <li data-value="12">Dec</li>
                    </ul>
                    <!-- placeholder to be renamed -->
                    <input type="hidden" name="__dummy" />
                </div>

                <!-- Year -->
                <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                    <label class="custom-ticket-dropdown-label">
                        Year
                    </label>
                    <div class="custom-dropdown-selected">
                        <span class="selected-text"></span>
                        <span class="custom-dropdown-arrow">
                                 <svg width="32" height="32" viewBox="0 0 24 24">
                                                <polyline points="8 10 12 14 16 10"
                                                          stroke="#858A8DFF"
                                                          stroke-width="1.5"
                                                          fill="none"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                              </svg>            </span>
                    </div>
                    <ul class="custom-dropdown-options">
                        <li data-value="2025">2025</li>
                        <li data-value="2024">2024</li>
                        <li data-value="2023">2023</li>
                        <li data-value="2022">2022</li>
                    </ul>
                    <!-- placeholder to be renamed -->
                    <input type="hidden" name="__dummy" />
                </div>
            </div>
            <!-- ▲ End Month/Year Row ▲ -->

            <!-- Ticket Description -->
            <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                <label class="custom-ticket-dropdown-label">
                    Ticket Description
                </label>
                <div class="custom-dropdown-selected">
                    <span class="selected-text"></span>
                    <span class="custom-dropdown-arrow">
                         <svg width="32" height="32" viewBox="0 0 24 24">
                                        <polyline points="8 10 12 14 16 10"
                                                  stroke="#858A8DFF"
                                                  stroke-width="1.5"
                                                  fill="none"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                      </svg>          </span>
                </div>
                <ul class="custom-dropdown-options">
                    <li data-value="other">Speeding</li>
                    <li data-value="other">Speeding Less Than 10 MPH Over</li>
                    <li data-value="other">Speeding More Than 10 MPH Over</li>
                    <li data-value="other">Speeding More Than 20 MPH Over</li>
                    <li data-value="other">Driving Too Fast For Conditions</li>
                    <li data-value="other">Careless Driving</li>
                    <li data-value="other">Inattentive Driving</li>
                    <li data-value="other">Ran A Red Light</li>
                    <li data-value="other">Ran A Stop Light</li>
                    <li data-value="other">Illegal Lane Change</li>
                    <li data-value="other">Illegal Passing</li>
                    <li data-value="other">Illegal Turn</li>
                    <li data-value="other">Illegal Turn On Red</li>
                    <li data-value="other">Illegal U Turn</li>
                    <li data-value="other">Failure To Obey Traffic Signal</li>
                    <li data-value="other">Failure To Signal</li>
                    <li data-value="other">Failure To Stop</li>
                    <li data-value="other">Failure To Yield</li>
                    <li data-value="other">No Seatbelt</li>
                    <li data-value="other">No Insurance</li>
                    <li data-value="hit_vehicle">Following Too Close</li>
                    <li data-value="hit_vehicle">Driving Without A license</li>
                    <li data-value="hit_vehicle">Expired Driver License</li>
                    <li data-value="hit_vehicle">Expired Driver License</li>
                    <li data-value="hit_vehicle">Expired Registration</li>
                    <li data-value="hit_vehicle">Carpool Lane Violation</li>
                </ul>
                <!-- placeholder to be renamed -->
                <input type="hidden" name="__dummy" />
            </div>

            <!-- Trash icon (visible on clones) -->
            <div class="button-row-flex">
                <button type="button" class="remove-ticket" style="display: none;">
                    <svg width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="#858A8DFF" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6" />
                        <path
                            d="M19 6l-1 14H6L5 6m5 0V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"
                        />
                        <line x1="10" y1="11" x2="10" y2="17" />
                        <line x1="14" y1="11" x2="14" y2="17" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>

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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ———————————————————————————————————————————————
        // A) Keep your existing “.custom-select-floating select” logic intact
        // ———————————————————————————————————————————————
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


        // ———————————————————————————————————————————————
        // B) The “custom-dropdown” initialization helper
        // ———————————————————————————————————————————————
        function initializeCustomDropdown(drop) {
            const selected      = drop.querySelector('.custom-dropdown-selected');
            const options       = drop.querySelector('.custom-dropdown-options');
            const optionsList   = Array.from(options.children);
            const hiddenInput   = drop.querySelector('input[type="hidden"]');
            const selectedText  = drop.querySelector('.selected-text');
            // Note: your labels are <label class="custom-accident-dropdown-label">
            //       (we don’t actually need the label element here, but we leave it accessible)
            //       In some versions it might be .custom-dropdown-label, but yours is
            //       .custom-accident-dropdown-label, so we just leave it alone.

            // 1) OPEN / CLOSE on click
            selected.addEventListener('click', function(e) {
                e.stopPropagation();
                drop.classList.toggle('open');
                if (!drop.classList.contains('has-value')) {
                    drop.classList.add('open-float');
                }
            });

            // 2) OPTION click
            optionsList.forEach(function(optionItem) {
                optionItem.addEventListener('click', function(e) {
                    e.stopPropagation();
                    // Remove “active” from all siblings
                    optionsList.forEach(el => el.classList.remove('active'));
                    // Mark this one active
                    optionItem.classList.add('active');
                    // Update text + hiddenInput value
                    selectedText.textContent = optionItem.textContent;
                    hiddenInput.value        = optionItem.getAttribute('data-value');
                    // Float the label up + close
                    drop.classList.add('has-value');
                    drop.classList.remove('open', 'open-float');
                });
            });

            // 3) BLUR: close & defloat if no value
            drop.addEventListener('blur', function(e) {
                setTimeout(function() {
                    drop.classList.remove('open', 'open-float');
                    if (!hiddenInput.value) {
                        drop.classList.remove('has-value');
                    }
                }, 150);
            });

            // 4) CLICK OUTSIDE: close any open dropdown
            document.addEventListener('click', function(e) {
                if (!drop.contains(e.target)) {
                    drop.classList.remove('open', 'open-float');
                }
            });

            // 5) ON PAGE LOAD: if hiddenInput already has a value, mark it
            if (hiddenInput.value) {
                drop.classList.add('has-value');
                const match = optionsList.find(opt =>
                    opt.getAttribute('data-value') === hiddenInput.value
                );
                if (match) {
                    match.classList.add('active');
                    selectedText.textContent = match.textContent;
                }
            } else {
                selectedText.textContent = "";
                drop.classList.remove('has-value', 'open-float');
            }
        }


        // ———————————————————————————————————————————————
        // C) Initialize ALL existing `.custom-dropdown` elements on page load
        // ———————————————————————————————————————————————
        document.querySelectorAll('.custom-dropdown').forEach(function(drop) {
            initializeCustomDropdown(drop);
        });



        // ———————————————————————————————————————————————
        // B) “Add another ticket” CLONING LOGIC
        // ———————————————————————————————————————————————
        const container = document.getElementById('tickets-container');
        const template  = document.getElementById('ticket-template');
        const addLink   = document.querySelector('.addTicket');
        let ticketCount = 1; // index 0 is already on the page

        if (!addLink) {
            console.error("Cannot find .addTicket link in the DOM");
            return;
        }

        addLink.addEventListener('click', function(e) {
            e.preventDefault(); // don’t let the <a> navigate

            // 1) Clone the template
            const clone = template.content.cloneNode(true);

            // 2) Find the three placeholder inputs + labels
            const hiddenInputs = clone.querySelectorAll('input[name="__dummy"]');
            const labels       = clone.querySelectorAll('label.custom-ticket-dropdown-label');

            if (hiddenInputs.length !== 3 || labels.length !== 3) {
                console.error(
                    "Expected 3 __dummy inputs and 3 labels, but found:",
                    hiddenInputs.length,
                    labels.length
                );
                return;
            }

            // 3) Rename them in order:

            // — Month
            hiddenInputs[0].name = `ticket[${ticketCount}][month]`;
            hiddenInputs[0].id   = `ticket_${ticketCount}_month`;
            labels[0].setAttribute('for', `ticket_${ticketCount}_month`);

            // — Year
            hiddenInputs[1].name = `ticket[${ticketCount}][year]`;
            hiddenInputs[1].id   = `ticket_${ticketCount}_year`;
            labels[1].setAttribute('for', `ticket_${ticketCount}_year`);

            // — Description
            hiddenInputs[2].name = `ticket[${ticketCount}][description]`;
            hiddenInputs[2].id   = `ticket_${ticketCount}_desc`;
            labels[2].setAttribute('for', `ticket_${ticketCount}_desc`);

            // 4) Wire up the remove-button on this clone
            const trashBtn = clone.querySelector('.remove-ticket');
            if (trashBtn) {
                trashBtn.style.display = 'inline-flex';
                trashBtn.addEventListener('click', function() {
                    const entry = this.closest('.ticket-entry');
                    if (entry) entry.remove();
                });
            }

            // 5) Append to #tickets-container
            container.appendChild(clone);

            // 6) Re-initialize any new custom-dropdowns inside the clone
            const newlyAddedDropdowns = container
                .lastElementChild
                .querySelectorAll('.custom-dropdown');
            newlyAddedDropdowns.forEach(dd => initializeCustomDropdown(dd));

            ticketCount++;
        });
    });
</script>
