{{-- resources/views/vehicle/detailAccident.blade.php --}}
<div data-isloading="false">

    <!-- ========== Header Row ========== -->
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
            <h5 class="mb-0 center-title"
                style="color: #46c2e8; font-size: 14px; font-weight: bold">
                1ST DRIVER
            </h5>
            <h1 class="mb-0 center-title" style="color: #124476;">
                Accident Details
            </h1>
        </div>
    </div>
    <!-- ============================== -->

    <!-- ========== “Accident #0” BLOCK (Index = 0) ========== -->
    <div id="accidents-container">

        <div class="accident-entry">
            <div class="form-custom-grid">

                {{-- ▼ Month / Year Row (side-by-side) ▼ --}}
                <div class="custom-double-input-row" >
                    {{-- Month Dropdown --}}
                    <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                        <label class="custom-accident-dropdown-label" for="accident_0_month">Month</label>
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
                        <input type="hidden" name="accident[0][month]" id="accident_0_month" />
                    </div>

                    {{-- Year Dropdown --}}
                    <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                        <label class="custom-accident-dropdown-label" for="accident_0_year">Year</label>
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
                        <input type="hidden" name="accident[0][year]" id="accident_0_year" />
                    </div>
                </div>
                {{-- ▲ End Month / Year Row ▲ --}}

                {{-- Accident Description --}}
                <div class="custom-floating-label-input custom-dropdown"  tabindex="0">
                    <label class="custom-accident-dropdown-label" for="accident_0_desc">
                        Accident Description
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
                        <li data-value="0">Other</li>
                        <li data-value="1">Other Vehicle Hit Yours</li>
                        <li data-value="2">Vehicle Damaged Avoiding Accident</li>
                        <li data-value="3">Vehicle Hit Pedestrian</li>
                        <li data-value="4">Vehicle Hit Property</li>
                        <li data-value="5">Vehicle Hit Vehicle</li>
                    </ul>
                    <input type="hidden" name="accident[0][description]" id="accident_0_desc" />
                </div>

                {{-- At Fault? --}}
                <div class="custom-floating-label-input custom-dropdown"  tabindex="0">
                    <label class="custom-accident-dropdown-label" for="accident_0_atfault">At Fault?</label>
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
                        <li data-value="yes">Yes</li>
                        <li data-value="no">No</li>
                    </ul>
                    <input type="hidden" name="accident[0][at_fault]" id="accident_0_atfault" />
                </div>

                {{-- Damaged --}}
                <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                    <label class="custom-accident-dropdown-label" for="accident_0_damage">Damaged</label>
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
                        <li data-value="both">Both</li>
                        <li data-value="no_damage">No Damage</li>
                        <li data-value="people">People</li>
                        <li data-value="property">Property</li>
                    </ul>
                    <input type="hidden" name="accident[0][damage]" id="accident_0_damage" />
                </div>

                {{-- Trash icon for index 0 (hidden by default) --}}
                <div class="button-row-flex">
                    <button type="button" class="remove-accident" style="display: none;">
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
                {{-- ====================================== --}}

            </div>
            {{-- /.form-custom-grid for index 0 --}}
        </div>
        {{-- /.accident-entry (index 0) --}}

    </div>
    {{-- /#accidents-container --}}


    <!-- ===== “Add another accident” + Right‐arrow button in one row ===== -->
    <div class="form-custom-grid" >
        <div><a class="addAccident">

                <svg width="24" height="24" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg"
                     style="vertical-align: middle; margin-right: 8px;">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-width="2" stroke-linecap="square"
                              d="M3 12.5h18M12 3.5v18"></path>
                    </g>
                </svg>
                <span style="font-size: 18px; color: #124476;">
          Add another accident
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
{{-- /data-isloading --}}


<!--------------------------------------------
  HIDDEN <template> for cloning new “Accident” blocks
----------------------------------------------->

<template id="accident-template">
    <div class="accident-entry">
        <div class="form-custom-grid">

            {{-- Horizontal divider before each clone --}}
            <hr style="margin: 0 0 24px 0; border-color: #DDD;">

            {{-- ▼ Month / Year Row ▼ --}}
            <div class="custom-double-input-row" >
                {{-- Month Dropdown --}}
                <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                    <label class="custom-accident-dropdown-label">Month</label>
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
                    <input type="hidden" name="__dummy" />
                </div>

                {{-- Year Dropdown --}}
                <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                    <label class="custom-accident-dropdown-label">Year</label>
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
                    <input type="hidden" name="__dummy" />
                </div>
            </div>
            {{-- ▲ End Month / Year Row ▲ --}}

            {{-- Accident Description --}}
            <div class="custom-floating-label-input custom-dropdown"  tabindex="0">
                <label class="custom-accident-dropdown-label">Accident Description</label>
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
                    <li data-value="0">Other</li>
                    <li data-value="1">Other Vehicle Hit Yours</li>
                    <li data-value="2">Vehicle Damaged Avoiding Accident</li>
                    <li data-value="3">Vehicle Hit Pedestrian</li>
                    <li data-value="4">Vehicle Hit Property</li>
                    <li data-value="5">Vehicle Hit Vehicle</li>
                </ul>
                <input type="hidden" name="__dummy" />
            </div>

            {{-- At Fault? --}}
            <div class="custom-floating-label-input custom-dropdown"  tabindex="0">
                <label class="custom-accident-dropdown-label">At Fault?</label>
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
                    <li data-value="yes">Yes</li>
                    <li data-value="no">No</li>
                </ul>
                <input type="hidden" name="__dummy" />
            </div>

            {{-- Damaged --}}
            <div class="custom-floating-label-input custom-dropdown" tabindex="0">
                <label class="custom-accident-dropdown-label">Damaged</label>
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
                    <li data-value="both">Both</li>
                    <li data-value="no_damage">No Damage</li>
                    <li data-value="people">People</li>
                    <li data-value="property">Property</li>
                </ul>
                <input type="hidden" name="__dummy" />
            </div>

            {{-- Trash icon (visible only on clones) --}}
            <div class="button-row-flex">
                <button type="button" class="remove-accident">
                    <svg width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="#858A8DFF" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6" />
                        <path d="M19 6l-1 14H6L5 6m5 0V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2" />
                        <line x1="10" y1="11" x2="10" y2="17" />
                        <line x1="14" y1="11" x2="14" y2="17" />
                    </svg>
                </button>
            </div>
            {{-- ====================================== --}}

        </div>
        {{-- /.form-custom-grid for clone --}}
    </div>
    {{-- /.accident-entry clone --}}
</template>
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
        // D) “Add another accident” CLONING LOGIC
        // ———————————————————————————————————————————————
        const container     = document.getElementById('accidents-container');
        const template      = document.getElementById('accident-template');
        let accidentCount   = 1;   // Already have index=0 rendered, so next clone = 1
        const addLink       = document.querySelector('.addAccident');

        if (!addLink) {
            console.error("Cannot find .addAccident link in the DOM");
            return;
        }

        addLink.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent <a> from navigating

            // (a) Clone the <template> content
            const clone = template.content.cloneNode(true);

            // (b) Inside that clone, find all <input name="__dummy"> and <label.custom-accident-dropdown-label>
            //     (there should be exactly 5 of each: Month, Year, Description, At Fault, Damaged)
            const hiddenInputs = clone.querySelectorAll('input[name="__dummy"]');
            const labels       = clone.querySelectorAll('label.custom-accident-dropdown-label');

            if (hiddenInputs.length !== 5 || labels.length !== 5) {
                console.error(
                    "Expected exactly 5 __dummy inputs and 5 labels, but found:",
                    hiddenInputs.length, labels.length
                );
                return;
            }

            // —— 1) Month ——
            hiddenInputs[0].setAttribute('name', `accident[${accidentCount}][month]`);
            hiddenInputs[0].setAttribute('id',   `accident_${accidentCount}_month`);
            labels[0].setAttribute('for',         `accident_${accidentCount}_month`);

            // —— 2) Year ——
            hiddenInputs[1].setAttribute('name', `accident[${accidentCount}][year]`);
            hiddenInputs[1].setAttribute('id',   `accident_${accidentCount}_year`);
            labels[1].setAttribute('for',         `accident_${accidentCount}_year`);

            // —— 3) Accident Description ——
            hiddenInputs[2].setAttribute('name', `accident[${accidentCount}][description]`);
            hiddenInputs[2].setAttribute('id',   `accident_${accidentCount}_desc`);
            labels[2].setAttribute('for',         `accident_${accidentCount}_desc`);

            // —— 4) At Fault? ——
            hiddenInputs[3].setAttribute('name', `accident[${accidentCount}][at_fault]`);
            hiddenInputs[3].setAttribute('id',   `accident_${accidentCount}_atfault`);
            labels[3].setAttribute('for',         `accident_${accidentCount}_atfault`);

            // —— 5) Damaged ——
            hiddenInputs[4].setAttribute('name', `accident[${accidentCount}][damage]`);
            hiddenInputs[4].setAttribute('id',   `accident_${accidentCount}_damage`);
            labels[4].setAttribute('for',         `accident_${accidentCount}_damage`);

            // (c) Reveal + hook the trash-icon for this clone
            const trashBtn = clone.querySelector('.remove-accident');
            if (trashBtn) {
                trashBtn.style.display = 'inline-flex';
                trashBtn.addEventListener('click', function() {
                    const entry = this.closest('.accident-entry');
                    if (entry) entry.remove();
                });
            }

            // (d) Append the newly-adjusted clone under #accidents-container
            container.appendChild(clone);

            // (e) Immediately initialize every new `.custom-dropdown` inside that clone
            const newlyAddedDropdowns = container.lastElementChild.querySelectorAll('.custom-dropdown');
            newlyAddedDropdowns.forEach(function(dd) {
                initializeCustomDropdown(dd);
            });

            // (f) Increment for the next clone
            accidentCount++;
        });


    }); // end DOMContentLoaded
</script>
