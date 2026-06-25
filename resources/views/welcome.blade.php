<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ 'Web Profile' }}</title>
    <style>
        :root {
            --bg:      #ffffff;
            --firstcolor_bg: #f5f5f5;
            --border:  #e0e0e0;
            --text:    #1a1a1a;
            --nav-bg:  #1a1a1a;
        }

        body {
            font-family: Arial, sans-serif;
            background: var(--firstcolor_bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            position: sticky; top: 0; z-index: 100;
            display: flex; align-items: center; justify-content: space-between;
            background: var(--nav-bg);
            padding: 0 32px; height: 56px;
        }
        .nav-menu { display: flex; list-style: none; gap: 4px; }
        .nav-menu a {
            color: rgba(255,255,255,.65); text-decoration: none;
            font-size: 14px; padding: 6px 18px; border-radius: 4px;
            transition: background .15s, color .15s;
        }
        .nav-menu a:hover, .nav-menu a.active {
            background: rgba(255,255,255,.12); color: #fff;
        }
        .welcome-wrap {
            flex: 1;
            display: flex; align-items: center; justify-content: center;
            padding: 60px 24px;
        }
        .welcome-card { text-align: center; max-width: 500px; }

        .profile-img {
            width: 100px; height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--border);
            margin: 0 auto 20px;
            display: block;
        }
        .profile-placeholder {
            width: 100px; height: 100px;
            border-radius: 50%;
            background: var(--border);
            margin: 0 auto 20px;
            display: flex; align-items: center; justify-content: center;
            font-size: 11px;
        }

        .welcome-greeting {
            font-size: 12px; font-weight: 700;
            text-transform: uppercase; letter-spacing: .1em;
            margin-bottom: 8px;
        }
        .welcome-name {
            font-size: 28px; font-weight: 700;
            margin-bottom: 8px; line-height: 1.2;
        }
        .welcome-role {
            font-size: 14px;
            margin-bottom: 12px;
        }
        .welcome-actions {
            display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;
        }
    </style>
</head>
<body>

<nav class="navbar">
    <a href="/" class="brand">Web Profile</a>
</nav>

<div class="welcome-wrap">
    <div class="welcome-card">
        @php
            $foto = $images->where('name', 'profile')->first()?->url
                 ?? $images->first()?->url
                 ?? null;
        @endphp
        @if($foto)
            <img src="{{ asset($foto) }}" alt="Foto Profil" class="profile-img">
        @else
            <div class="profile-placeholder">Foto</div>
        @endif

        <p class="welcome-greeting">Welcome</p>

        <h1 class="welcome-name">
            {{ $teks->where('name', 'hero_name')->first()?->content ?? $user?->name ?? 'Nama Saya' }}
        </h1>

        <p class="welcome-role">
            {{ $teks->where('name', 'sidebar_role')->first()?->content ?? 'Student || Web Developer' }}
        </p>

        <div class="welcome-actions">
            <a href="{{ route('cv.index') }}" class="btn btn-dark">
                {{ $teks->where('name', 'button_text_me')->first()?->content ?? 'Lihat CV' }}
            </a>
        </div>

    </div>
</div>

</body>
</html>