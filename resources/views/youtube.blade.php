<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Youtube.com Clone</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('styles/general.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/header.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/video.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/sidebar.css') }}">
</head>
<body>

<!-- Header -->
<header class="header">
    <div class="left-section">
        <img class="hamburger-menu" src="{{ asset('thumbnails/hamburger-menu.svg') }}">
        <img class="youtube-logo" src="{{ asset('icons/youtube-logo.svg') }}">
    </div>
    <div class="middle-section">
        <input class="search-bar" type="text" placeholder="Search...">
        <button class="search-button">
            <img class="search-icon" src="{{ asset('icons/search.svg') }}">
            <div class="tooltip">Search</div>
        </button>
        <button class="voice-search-button">
            <img class="voice-search-icon" src="{{ asset('icons/voice-search-icon.svg') }}">
            <div class="tooltip">Search with your voice</div>
        </button>
    </div>
    <div class="right-section">
        <div class="upload-icon-container">
            <img class="upload-icon" src="{{ asset('icons/upload.svg') }}">
            <div class="tooltip">Create</div>
        </div>
        <div class="youtube-apps-icon-container">
            <img class="youtube-apps-icon" src="{{ asset('icons/youtube-apps.svg') }}">
            <div class="tooltip">YouTube apps</div>
        </div>
        <div class="notifications-icon-container">
            <img class="notifications-icon" src="{{ asset('icons/notifications.svg') }}">
            <div class="tooltip">Notifications</div>
            <div class="notifications-count">3</div>
        </div>
        <img class="current-user-picture" src="{{ asset('thumbnails/jeyykyt.jpg') }}">
    </div>
</header>

<!-- Sidebar -->
<nav class="sidebar">
    <div class="sidebar-link">
        <img src="{{ asset('icons/home.svg') }}">
        <div>Home</div>
    </div>
    <div class="sidebar-link">
        <img src="{{ asset('icons/explore.svg') }}">
        <div>Explore</div>
    </div>
    <div class="sidebar-link">
        <img src="{{ asset('icons/subscriptions.svg') }}">
        <div>Subscriptions</div>
    </div>
    <div class="sidebar-link">
        <img src="{{ asset('icons/originals.svg') }}">
        <div>Originals</div>
    </div>
    <div class="sidebar-link">
        <img src="{{ asset('icons/youtube-apps.svg') }}">
        <div>YouTube Music</div>
    </div>
    <div class="sidebar-link">
        <img src="{{ asset('icons/library.svg') }}">
        <div>Library</div>
    </div>
</nav>

<!-- Main content -->
<main>
    <section class="video-grid">
        @for ($i = 1; $i <= 6; $i++)
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="#">
                        <img class="thumbnail" src="{{ asset("thumbnails/thumbnail-$i.webp") }}">
                    </a>
                    <div class="video-time">10:00</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                        <img class="profile-picture" src="{{ asset("thumbnails/channel-$i.jpeg") }}">
                        <div class="tooltip">
                            <img class="profile-picture-tooltip" src="{{ asset("thumbnails/channel-$i.jpeg") }}">
                            <div class="info-tooltip">
                                <p class="video-author-tooltip">Channel {{ $i }}</p>
                                <p class="stat-tooltip">{{ rand(1, 50) }}M subscribers</p>
                            </div>
                        </div>
                    </div>
                    <div class="video-info">
                        <p class="video-title">Sample Video Title {{ $i }}</p>
                        <p class="video-author">Channel {{ $i }}</p>
                        <p class="video-stats">{{ rand(100, 999) }}K views · {{ rand(1, 12) }} months ago</p>
                    </div>
                </div>
            </div>
        @endfor
    </section>
</main>

</body>
</html>
