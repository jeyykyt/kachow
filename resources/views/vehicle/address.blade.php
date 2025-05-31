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
            <h1 class="mb-0 center-title" style="color: #124476;">Current Address</h1>
        </div>

    </div>


    <div class="custom-form-grid">
        <!-- Street Address -->
        <div class="custom-floating-label-input">
            <input id="streetAddress" name="streetAddress" type="text" placeholder="e.g. 12345 Sesame Street" required />
            <label for="streetAddress">Street Address</label>
            <span class="custom-input-error"></span>
        </div>

        <!-- ZIP code and State in one row -->
        <div class="custom-double-input-row">
            <div class="custom-floating-label-input">
                <input id="zipcode" name="zipcode" type="text" placeholder="e.g. 98683" required />
                <label for="zipcode">Zip Code</label>
                <span class="custom-input-error"></span>
            </div>
{{--            <div class="custom-floating-label-input custom-select-floating">--}}
{{--                <select class="dropdown-select-state" id="state" name="state" required>--}}
{{--                    <option class="option" value="" disabled selected hidden></option>--}}
{{--                    <option value="AL">Alabama</option>--}}
{{--                    <option value="ND">North Dakota</option>--}}
{{--                    <option value="OH">Ohio</option>--}}
{{--                    <option value="OK">Oklahoma</option>--}}
{{--                </select>--}}
{{--                <label for="state">State</label>--}}
{{--                <span class="custom-input-error"></span>--}}
{{--            </div>--}}

            <div class="custom-floating-label-input custom-dropdown"  tabindex="0">
                <label class="custom-dropdown-label" for="state">State</label>
                <div class="custom-dropdown-selected">
                    <span class="selected-text"></span>
                    <span class="custom-dropdown-arrow">
                      <svg  width="32" height="32" viewBox="0 0 24 24">
                        <polyline points="8 10 12 14 16 10" stroke="#858A8DFF" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </span>
                </div>
                <ul class="custom-dropdown-options">
                    <li data-value="AL">Alabama</li>
                    <li data-value="AK">Alaska</li>
                    <li data-value="AZ">Arizona</li>
                    <li data-value="AR">Arkansas</li>
                    <li data-value="CA">California</li>
                    <!-- Add as many as you want -->
                </ul>
                <input type="hidden" name="state" id="state" />
            </div>


        </div>

        <!-- City -->
        <div class="custom-floating-label-input" style="padding-bottom: 25px">
            <input id="city" name="city" type="text" placeholder="e.g. Vancouver" required />
            <label for="city">City</label>
            <span class="custom-input-error"></span>
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

