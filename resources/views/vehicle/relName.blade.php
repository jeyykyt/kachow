<div data-isloading="false">
    <div class="col-12 form--centeredBackBtn--uPc3O">
    </div>

    <!-- Wrap this in d-desktop-header -->
    <div class="header-row-center mb-4">
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
        <div>
            <h5 class="mb-0 center-title" style="color: #46c2e8; font-size: 14px; font-weight: bold">1ST DRIVER</h5>
            <h1 class="mb-0 center-title" style="color: #124476;">Name</h1>
        </div>

    </div>


    <div class="form-custom-grid">
        <!-- Legal First Name -->

        <div class="custom-floating-label-input custom-dropdown" tabindex="0">
            <label class="custom-dui-dropdown-label">
                Relationship to you
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
                <li data-value="other">Child</li>
                <li data-value="other">Domestic Partner</li>
                <li data-value="other">Grandchild</li>
                <li data-value="other">Grandparent</li>
                <li data-value="other">Other</li>
                <li data-value="other">Parent</li>
                <li data-value="other">Self</li>
                <li data-value="other">Sibling</li>
                <li data-value="other">Spouse</li>
            </ul>
            <!-- placeholder to be renamed -->
            <input type="hidden" name="__dummy" />
        </div>

        <div class="Input--textInput--34of2 Input--small--315NH floating-label-input">
            <input id="firstName" name="drivers.0.firstName" type="text" placeholder="e.g. John" required />
            <label for="firstName">Legal First Name</label>
            <span class="Input--errorMessage--SN07v"></span>
        </div>


        <!-- Legal Last Name -->
        <div class="Input--textInput--34of2 Input--small--315NH floating-label-input">
            <input id="firstName" name="drivers.0.firstName" type="text" placeholder="e.g. Smith" required />
            <label for="firstName">Legal Last Name</label>
            <span class="Input--errorMessage--SN07v"></span>
        </div>


        <!-- Military Service -->
        <div>
            <div class="form--military--AWpt7">
                <div class="form--militaryHeader--8vHar">
                    Have you ever honorably served in the U.S. military?
                </div>

                <label class="custom-checkbox-label">
                    <input class="custom-checkbox-input" type="checkbox" name="dui">
                    <span class="custom-checkbox-checkmark">
        <svg class="custom-checkbox-svg" width="56" height="36" viewBox="0 0 24 24">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#333" stroke-width="2" d="M5 12l4.983 5L19 7" stroke-linecap="round"></path>
            </g>
        </svg>
    </span>
                </label>



            </div>
        </div>

        <!-- Both buttons on one row -->
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
                        <path stroke="#fff" stroke-width="2" d="M14 20.485L22.485 12h0L14 3.515"></path>
                        <path stroke="#fff" stroke-width="2" stroke-linecap="square" d="M1 12.5h20"></path>
                    </g>
                </svg>
            </span>
            </button>
        </div>
    </div>





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
    @media (max-width: 800px) and (min-width: 601px) {
        .form-align-grid {
            grid-template-columns: 60% 40%;
            padding: 0 10px;
        }
    }
    @media (max-width: 600px) {
        .form-align-grid {
            grid-template-columns: 50% 50%;
            padding: 0 2vw;
        }
    }
    }




</style>

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
    });

</script>
