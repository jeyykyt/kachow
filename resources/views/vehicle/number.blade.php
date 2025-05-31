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
            <h5 class="mb-0 center-title" style="color: #46c2e8; font-size: 14px; font-weight: bold">LAST STEP: PHONE NUMBER</h5>
            <h1 class="mb-0 center-title" style="color: #124476;">Contact Number</h1>
        </div>

    </div>


    <div class="form-custom-grid">
        <!-- Legal First Name -->
        <div class="Input--textInput--34of2 Input--small--315NH floating-label-input">
            <input id="number" name="number" type="text" placeholder="e.g. (360) 555-5555" required />
            <label for="number">Phone Number</label>
            <span class="Input--errorMessage--SN07v"></span>
        </div>

        <!-- Button with Badge -->
        <div class="custom-btn-wrapper">
            <button type="button" class="custom-cta-btn">
                <span class="custom-btn-text">Get My Quote</span>
                <span class="custom-badge">1</span>
            </button>
        </div>

        <!-- Both buttons on one row -->

    </div>





</div>

<style>
    .custom-btn-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .custom-cta-btn {
        position: relative;
        width: 100%;
        min-width: 320px;
        min-height: 63px;
        background: #44c7ee;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.18s;
    }

    .custom-cta-btn:hover {
        background: #2ec3eb;
        box-shadow: 0 1px 2px 0 rgba(128, 128, 128, .9);

    }

    .custom-btn-text {
        flex: 1;
        text-align: center;
    }

    .custom-badge {
        position: absolute;
        top: -6px;
        right: 0px;
        background: #ffb200;
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        border: 2px solid #fff;
        z-index: 1;
    }

    /* Responsive: Make button and badge scale down on mobile */
    @media (max-width: 600px) {
        .custom-cta-btn {
            min-width: 200px;
            min-height: 63px;
            font-size: 18px;
            border-radius: 36px;

        }
        .custom-badge {
            top: -6px;
            right: 0px;
            width: 24px;
            height: 24px;
            font-size: 15px;
        }

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

