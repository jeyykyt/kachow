<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kachow</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet"
    >

    <!-- Your existing CSS files -->
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

    <!-- Bootstrap (for responsive grid) -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        /* ──────────────────────────────────────────────────────────────────────────── */
        /* BASIC RESOURCES */
        /* ──────────────────────────────────────────────────────────────────────────── */

        a { text-decoration: none; color: inherit; }

        /* ──────────────────────────────────────────────────────────────────────────── */
        /* QUOTE‐BOXES: CONTAINER + HEADER */
        /* ──────────────────────────────────────────────────────────────────────────── */
        .quote-container {
            max-width: 900px;
            margin: 2rem auto;      /* top/bottom spacing */
            padding: 0 15px;
        }

        .quote-header {
            display: flex;
            align-items: center;
            background-color: #36BDE8;   /* light blue from the screenshot */
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 10px 10px 0 0;
            font-weight: 700;
            font-size: 14px;
        }
        .quote-header svg {
            flex-shrink: 0;
            margin-right: 8px;
        }

        /* ──────────────────────────────────────────────────────────────────────────── */
        /* QUOTE‐BOX: COMMON STYLES */
        /* ──────────────────────────────────────────────────────────────────────────── */
        .quote-box {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            border-radius: 0 0 10px 10px;
            background-color: #ffffff;
            border: 1px solid #dcdcdc;

            /* ↑ Increase left/right padding so the logo isn’t flush with the border */
            padding: 20px 25px;
            margin-bottom: 20px;
        }
        .quote-box.active {
            border: 2px solid #36BDE8;
            border-top: none; /* header above is also blue, so they connect */
        }

        /* ──────────────────────────────────────────────────────────────────────────── */
        /* LOGO (LEFT COLUMN) */
        /* ──────────────────────────────────────────────────────────────────────────── */
        .quote-logo {
            flex: 0 0 auto;

            /* remove fixed 120px width and allow some breathing room */
            /* instead, let the logo “shrink‐to‐fit” inside a padded container */
            display: flex;
            justify-content: center;
            align-items: center;

            /* add horizontal padding so the image is not too close to the edges */
            padding: 0 15px;
            margin-bottom: 15px;
        }

        @media (min-width: 576px) {
            .quote-logo {
                margin-bottom: 0;
            }
        }

        .quote-logo img {
            max-width: 100%;
            max-height: 60px;
            object-fit: contain;
        }

        /* ──────────────────────────────────────────────────────────────────────────── */
        /* CONTENT (MIDDLE COLUMN) */
        /* ──────────────────────────────────────────────────────────────────────────── */
        .quote-content {
            flex: 1 1 0;
            margin-bottom: 15px;
        }
        @media (min-width: 576px) {
            .quote-content {
                margin-bottom: 0;
                padding-left: 15px;
                padding-right: 15px;
            }
        }
        .quote-content h3 {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 20px;
            font-weight: 700;
            color: #124476;
        }
        .quote-content ul {
            padding-left: 18px;
            margin: 0;
        }
        .quote-content ul li {
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 6px;
            color: #2d2d2d;
            position: relative;
        }
        /* Add a small check icon (using CSS pseudo‐element) */
        .quote-content ul li::before {
            content: '✔';
            position: absolute;
            left: -1.2em;
            top: 0;
            color: #14A44D; /* green check color */
            font-size: 14px;
            line-height: 1;
        }

        /* ──────────────────────────────────────────────────────────────────────────── */
        /* CTA BUTTON (RIGHT COLUMN) */
        /* ──────────────────────────────────────────────────────────────────────────── */
        .quote-cta {
            flex: 0 0 100%;
            text-align: right;
            margin-top: 15px;
        }
        @media (min-width: 576px) {
            .quote-cta {
                flex: 0 0 180px;
                margin-top: 0;
            }
        }
        .quote-cta button {
            background-color: #36BDE8;
            border: none;
            color: #ffffff;
            font-size: 14px;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 50px; /* pill shape */
            cursor: pointer;
            transition: background-color 0.25s ease;
        }
        .quote-cta button:hover {
            background-color: #2aa8c9;
        }

        /* ──────────────────────────────────────────────────────────────────────────── */
        /* RESPONSIVE ADJUSTMENTS */
        /* ──────────────────────────────────────────────────────────────────────────── */
        @media (max-width: 575px) {
            .quote-content h3 {
                font-size: 18px;
                text-align: center;
            }
            .quote-content ul li {
                font-size: 13px;
            }
            .quote-cta {
                text-align: center;
            }
            .quote-cta button {
                width: 100%;
                max-width: 260px;
            }
            .header-header{
                margin: 0 100px;
            }
        }

        .header-header{
            margin: 0 200px;
        }
    </style>
</head>
<body>

<!-- Header (your existing header) -->
<header class="header" >
    <div class="header-top">
        <img class="kachow-logo" src="{{ asset('thumbnails/logo.svg') }}" alt="Kachow Logo">
        <button class="search-button-quote">
            <svg class="call-logo" width="30" height="30" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path
                        d="M7.464 2.393l2.993 5.558-2.601 1.562a1 1 0 0 0-.101.069l-.092.081a1 1 0 0 0 0 1.414h0l5.26 5.26a1 1 0 0 0 1.564-.193h0l1.561-2.602 5.559 2.994-2.829 2.828a6 6 0 0 1-8.485 0l-5.657-5.657a6 6 0 0 1 0-8.485l2.828-2.829z"
                        stroke="#000000"
                        stroke-width="2.5"
                    />
                </g>
            </svg>
            <div class="call" style="color: black; font-weight: 700">(833) 319-1754</div>
        </button>
    </div>
</header>


<!-- Main content -->
<main>
    <div class="header-row-center mb-4"
         style="display: flex; align-items: center; justify-content: center;">
        <div class="header-text-stack"
             style="display: flex; flex-direction: column; align-items: center;">
            <h1 class="mb-0 center-title"
                style="font-size: 26px; color: #124476; margin-top: 0.25rem;">
                Click at least TWO quotes to compare and save!
            </h1>
            <h5 style="font-size: 14px; color: #124476; margin-top: 30px;">
                Jejy, we found the best options for you!
            </h5>
        </div>
    </div>

    <!-- ──────────────────────────────────────────────────────────────────────────── -->
    <!-- QUOTE BOXES START HERE -->
    <!-- ──────────────────────────────────────────────────────────────────────────── -->
    <div class="quote-container">
        <!-- Header above all offers -->
        <div class="quote-header">
            <svg width="20" height="20" viewBox="0 0 20 20">
                <path
                    stroke="#ffffff"
                    stroke-width="2"
                    d="M6 10.156L8.9 13 14 8"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                ></path>
            </svg>
            <span>Recommended for you</span>
        </div>

        <!-- Quote Box #1 (active / highlighted) -->
        <div class="quote-box active">
            <div class="quote-logo">
                <img
                    src="https://cdn.transparent.ly/img/red/logo/48159_1682111476.jpeg"
                    alt="USAA (Second) Logo"
                >
            </div>
            <div class="quote-content">
                <h3>USAA – Auto Insurance Made Easy</h3>
                <ul>
                    <li>Members who switched to USAA saved an average of $725 a year on their auto insurance.</li>
                    <li>Multiple discounts may be available to help you save</li>
                    <li>Easily manage your policy online or from a mobile device.</li>
                </ul>
            </div>
            <div class="quote-cta">
                <button>View My Quote</button>
            </div>
        </div>

        <!-- Quote Box #2 -->
        <div class="quote-box">
            <div class="quote-logo">
                <img
                    src="https://choice-production.s3.amazonaws.com/uploads/direct/ad/ad_image/9035/thumb_1ed9f85cd26307b3bfa1399711ef5bf2.png"
                    alt="Direct Auto Logo"
                >
            </div>
            <div class="quote-content">
                <h3>Super Low Down Payments</h3>
            </div>
            <div class="quote-cta">
                <button>View My Quote</button>
            </div>
        </div>

        <!-- Quote Box #3 -->
        <div class="quote-box">
            <div class="quote-logo">
                <img
                    src="https://cdn.transparent.ly/img/red/logo/48159_1682111476.jpeg"
                    alt="USAA (Second) Logo"
                >
            </div>
            <div class="quote-content">
                <h3>USAA Auto Insurance</h3>
                <ul>
                    <li>Members who switched to USAA saved an average of $725 a year on their auto insurance.</li>
                    <li>Save up to 10% when you bundle auto and home insurance.</li>
                    <li>Get a flexible payment plan to fit your pay schedule at no additional cost.</li>
                    <li>Get a free quote from USAA Auto Insurance.</li>
                </ul>
            </div>
            <div class="quote-cta">
                <button>View My Quote</button>
            </div>
        </div>
    </div>
    <!-- ──────────────────────────────────────────────────────────────────────────── -->
    <!-- QUOTE BOXES END HERE -->
    <!-- ──────────────────────────────────────────────────────────────────────────── -->

    <section class="form--footerSection--fpf5T" style="border-top: white">
        <div class="container-footer">
            <div class="form--logoGroup--x0fPr">
                <h4 style="font-size: 14px">
                    Call [rejectedPhone] right now for quotes and savings.
                </h4>
            </div>
        </div>
    </section>
</main>
</body>
</html>
