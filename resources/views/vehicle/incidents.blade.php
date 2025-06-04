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
            <h1 class="mb-0 center-title" style="color: #124476;">Incidents In The Past 3 Years</h1>
        </div>

    </div>


    <div class="form-align-grid" id="step-incidents">
        <!-- Incident row: label and options in grid columns -->
        <!-- Had an accident -->
        <div class="incident-label">Had an accident</div>
        <div class="incident-options">
            <label class="incident-option">
                <input type="radio" name="accident" value="yes" >
                <span class="checkmark">
            <svg class="check-svg" width="56" height="36" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#333" stroke-width="2" d="M5 12l4.983 5L19 7" stroke-linecap="round"></path>
                </g>
            </svg>
        </span>
                <span class="option-label">Yes</span>
            </label>
            <label class="incident-option">
                <input type="radio" name="accident" value="no" checked>
                <span class="checkmark">
            <svg class="check-svg" width="56" height="36" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#333" stroke-width="2" d="M5 12l4.983 5L19 7" stroke-linecap="round"></path>
                </g>
            </svg>
        </span>
                <span class="option-label">No</span>
            </label>
        </div>

        <!-- Received a ticket -->
        <div class="incident-label">Received a ticket</div>
        <div class="incident-options">
            <label class="incident-option">
                <input type="radio" name="ticket" value="yes">
                <span class="checkmark">
            <svg class="check-svg" width="56" height="36" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#333" stroke-width="2" d="M5 12l4.983 5L19 7" stroke-linecap="round"></path>
                </g>
            </svg>
        </span>
                <span class="option-label">Yes</span>
            </label>
            <label class="incident-option">
                <input type="radio" name="ticket" value="no" checked>
                <span class="checkmark">
            <svg class="check-svg" width="56" height="36" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#333" stroke-width="2" d="M5 12l4.983 5L19 7" stroke-linecap="round"></path>
                </g>
            </svg>
        </span>
                <span class="option-label">No</span>
            </label>
        </div>

        <!-- Received a DUI -->
        <div class="incident-label">Received a DUI</div>
        <div class="incident-options">
            <label class="incident-option">
                <input type="radio" name="dui" value="yes">
                <span class="checkmark">
            <svg class="check-svg" width="56" height="36" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#333" stroke-width="2" d="M5 12l4.983 5L19 7" stroke-linecap="round"></path>
                </g>
            </svg>
        </span>
                <span class="option-label">Yes</span>
            </label>
            <label class="incident-option">
                <input type="radio" name="dui" value="no" checked>
                <span class="checkmark">
            <svg class="check-svg" width="56" height="36" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#333" stroke-width="2" d="M5 12l4.983 5L19 7" stroke-linecap="round"></path>
                </g>
            </svg>
        </span>
                <span class="option-label">No</span>
            </label>
        </div>


        <!-- Button row: Back and Next in same grid columns -->
        <div>
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

        </div>
        <div style="display:flex; justify-content: flex-end;">
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
<div style="height: 100px">
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

