<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $texts['sidebar_name'] ?? 'My Profile' }}</title>
</head>
<body>

    <!-- HERO -->
    <section>
        <div>

            @php $img = $images->first()?->value ?? null; @endphp
            <img src="{{ asset($img ?: 'images/pfp.jpg') }}" alt="Profile">

            <h1>
                {{ $texts['hero_name'] ?? $user->name ?? 'Nama Saya' }}
            </h1>

            <h2>
                {{ $texts['sidebar_role'] ?? $role->name ?? 'Peran Saya' }}
            </h2>

            <p>
                {{ $texts['hero_role'] ?? 'STUDENT || WEB DEVELOPER' }}
            </p>

            <p>
                {!! $texts['about_information'] ?? ($texts['about'] ?? 'Saya adalah seorang pelajar yang sedang mengembangkan keterampilan dalam pengembangan web.') !!}
            </p>

            <div>
                <a href="#contact">
                    {{ $texts['button_text_me'] ?? 'Hubungi Saya' }}
                </a>
                <br>
                <a href="#project">
                    {{ $texts['button_view_portfolio'] ?? 'Lihat Project' }}
                </a>
            </div>

        </div>
    </section>

    <!-- EDUCATION -->
    <section>
        <div>

            <h2>
                {{ $texts['education_title'] ?? $experiences->firstWhere('name', 'education')?->content ?? 'Pendidikan' }}
            </h2>

            <div>
                @forelse($education as $edu)
                    <div>
                        <h3>{{ $edu->name }}</h3>
                        <p>{{ $edu->value }}</p>
                    </div>
                @empty
                    <p>Tidak ada data pendidikan.</p>
                @endforelse
            </div>

        </div>
    </section>

    <!-- PROJECT -->
    <section>
        <div>

            <h2>
                {{ $texts['portofolio_title'] ?? $portofolio->firstWhere('name', 'portofolio')?->content ?? 'Portofolio' }}
            </h2>

            <div>
                @forelse($portofolio as $project)
                    <div>
                        <h3>{{ $project->name }}</h3>
                        <p>{!! $project->value ?? $project->content ?? '' !!}</p>
                    </div>
                @empty
                    <p>Tidak ada project.</p>
                @endforelse
            </div>

        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact">
        <div>

            <h2>
                {{ $texts['contact_title'] ?? 'Kontak' }}
            </h2>

            <div>
                @if(isset($texts['email']))
                    <p>Email : {{ $texts['email'] }}</p>
                @else
                    <p>Email : {{ $texts['sidebar_email'] ?? '' }}</p>
                @endif

                @if(isset($texts['phone']))
                    <p>WhatsApp : {{ $texts['phone'] }}</p>
                @else
                    <p>WhatsApp : {{ $texts['sidebar_phone'] ?? '-' }}</p>
                @endif

                <p>GitHub : {{ $texts['sidebar_github'] ?? ($socials->first()?->value ?? '') }}</p>
            </div>

        </div>
    </section>

</body>
</html>
