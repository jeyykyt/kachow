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
            <a  href="{{ route('quote1') }}"
                style="text-decoration: none; color: inherit">
            <button type="button" class="custom-cta-btn">
                <span class="custom-btn-text">Get My Quote</span>
                <span class="custom-badge">1</span>
            </button>
            </a>
        </div>

        <!-- Both buttons on one row -->

    </div>

</div>
<section class="form--legalFooter--SaZVO">
    <div class="form--helperText--V2kC4" style="margin-top: -30px">
        <img src="{{ asset('thumbnails/lady.png') }}">
        <span style="font-weight: normal">
            <div class="form--checkCircle--3Rxe3">
                <svg viewBox="0 0 20 20" fill="none">
                    <path d="M6 10.156L8.9 13 14 8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            Your car insurance quotes are ready
        </span>
    </div>


</section>
<div class="form--disclaimer--2UXbf">
    <div class="smsConsentDisplay--consentWrapper--T5+ik">
        <label>
            <input type="hidden" id="leadid_tcpa_disclosure">
            <p>
                By clicking 'Get My Quote' and submitting this form, I provide an electronic signature and express written consent to the SMS terms below and to receive marketing communications for insurance products & services via automatic telephone dialing system, including calls, SMS/MMS, pre-recorded calls or artificial voice messages from coverageprofessor.com and its
                <a href="/disclaimer#marketingPartners" target="_blank">marketing partners</a>.
                Message and data rates may apply. I understand I may opt-out of phone and SMS communication by replying 'STOP' or 'HELP' for more info, or by contacting contact@coverageprofessor.com.
                I understand I will receive marketing communications to the phone number provided, which includes wireless numbers, and if applicable, numbers previously registered on the Federal and State DNC registries.
                See <a href="/sms" target="_blank">SMS Policy</a> for more details. I certify that I am a US resident over 18, and all information submitted with this request is true and accurate to the best of my knowledge.
                Consent is not a condition to receive services or purchase products from coverageprofessor.com and if I do not consent, I can call (877) 512-3977 to speak to a professional to obtain an insurance quote.
                I acknowledge my consent can be revoked at any time. I understand and agree to the
                <a href="/terms" target="_blank">Terms and Conditions</a> including mandatory arbitration.
            </p>
        </label>
    </div>

    <div class="mainConsentDisplay--consentWrapper--T5-vi">
        <label>
            <p>
                By clicking Get My Quote, you consent to CoverageProfessor saving the information you entered and sharing it with insurance carriers so you can get the most up-to-date quotes, no matter what device you're using.
                You also agree to CoverageProfessor's
                <a href="/privacy" target="_blank">Privacy Policy</a> and
                <a href="/terms" target="_blank">Terms of Service.</a>
            </p>
        </label>
    </div>
</div>

<style>

    .form--disclaimer--2UXbf {
        justify-content: center;
        width: 650px;
        font-size: 13px;
        color: #666666;
        margin: 0 auto;          /* Center horizontally */
        text-align: left;
    }

    .form--disclaimer--2UXbf a {
        color: #007bff; /* Keeps the link color default (or use a different color if needed) */
        text-decoration: underline;
    }

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
        },

   .form--disclaimer--2UXbf {
        width: 300px;
    }
    }
    @media (max-width: 600px) {
        .form-align-grid {
            grid-template-columns: 50% 50%;
            padding: 0 2vw;
        },

        .form--disclaimer--2UXbf {
            width: 250px;
        }
    }
    }




</style>

