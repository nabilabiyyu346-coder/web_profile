<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV - Nabil Abiyyu Amru Ramadhan</title>
  <link href="https://fonts.googleapis.com/css2?family=Arial:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    :root { --accent: #659287; }

    body {
      font-family: 'Arial', system-ui, sans-serif;
      background: #f5f5f5;
      color: #1a1a1a;
    }

    
    nav {
      background: #111;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 24px;
      height: 46px;
    }
    .nav-brand { color: #fff; font-size: 13px; font-weight: 600; }
    .nav-links { display: flex; gap: 4px; }
    .nav-links a {
      color: rgba(255,255,255,.5);
      text-decoration: none;
      font-size: 12px;
      padding: 5px 12px;
      border-radius: 5px;
    }
    .nav-links a.active { color: #fff; background: rgba(255,255,255,.12); }

    
    .page { max-width: 860px; margin: 24px auto; padding: 0 16px; }

    .welcome {
      background: #fff;
      border: 0.5px solid #ddd;
      border-radius: 10px 10px 0 0;
      padding: 14px 20px;
      font-size: 13px;
      font-weight: 500;
      border-bottom: none;
    }
    .welcome span { color: var(--accent); }

    
    .cv-card {
      background: #fff;
      border: 0.5px solid #ddd;
      border-radius: 0 0 10px 10px;
      overflow: hidden;
    }

  
    .row {
      border-bottom: 0.5px solid #ddd;
      display: grid;
    }
    .row:last-child { border-bottom: none; }

    .grid4 { grid-template-columns: 1fr 1fr 1fr 1fr; }

    .cell {
      padding: 14px;
      border-right: 0.5px solid #ddd;
    }
    .cell:last-child { border-right: none; }


    .foto-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }
    .foto-circle {
      width: 60px; height: 60px;
      border-radius: 50%;
      border: 2.5px solid var(--accent);
      background: #eee;
      display: flex; align-items: center; justify-content: center;
      overflow: hidden;
    }
    .foto-circle img { width: 100%; height: 100%; object-fit: cover; }
    .foto-placeholder { font-size: 11px; color: #aaa; }

    .field-label {
      font-size: 9px;
      color: #999;
      text-transform: uppercase;
      letter-spacing: .05em;
      margin-bottom: 2px;
    }
    .field-val { font-size: 12px; color: #1a1a1a; }
    .arrow { font-size: 10px; color: var(--accent); }


    .section-label {
      font-size: 9px;
      color: #999;
      text-transform: uppercase;
      letter-spacing: .05em;
      margin-bottom: 10px;
    }
    .tl-row {
      display: flex;
      align-items: flex-start;
      gap: 8px;
      margin-bottom: 8px;
    }
    .tl-row:last-child { margin-bottom: 0; }
    .tl-dot {
      width: 6px; height: 6px;
      border-radius: 50%;
      background: var(--accent);
      margin-top: 4px;
      flex-shrink: 0;
    }
    .tl-dot.muted { background: #aaa; }
    .tl-text { font-size: 12px; font-weight: 500; }
    .tl-sub { font-size: 11px; color: #777; }
    .year-txt { font-size: 10px; color: #999; line-height: 2; }


    .skill-title {
      font-size: 10px;
      font-weight: 500;
      color: #555;
      border-bottom: 1.5px solid var(--accent);
      padding-bottom: 4px;
      margin-bottom: 8px;
    }
    .skill-item {
      font-size: 11px;
      color: #1a1a1a;
      padding-left: 10px;
      position: relative;
      margin-bottom: 5px;
    }
    .skill-item::before {
      content: '';
      position: absolute;
      left: 0; top: 5px;
      width: 4px; height: 4px;
      border-radius: 50%;
      background: var(--accent);
    }


    .kontak-label {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      font-weight: 500;
      color: #555;
    }
  </style>
</head>
<body>

<nav>
  <span class="nav-brand">Web Profile</span>
</nav>
  <div class="cv-card">
    <div class="row" style="grid-template-columns: 80px 1fr 1fr 1fr">
      <div class="cell foto-box">
        <div class="foto-circle">
          <span class="foto-placeholder">Foto</span>
        </div>
      </div>
      <div class="cell">
        <div class="field-label">Nama</div>
        <div style="font-size:13px;font-weight:500;margin-bottom:10px">
          {{ $texts['cell_user'] ?? $user->name ?? 'Nama Lengkap' }}
        </div>
        <div class="field-label">TTL</div>
        <div class="field-val">{{ $texts['cell_TTL'] ?? $user->TTL ?? 'TTL' }}</div>
      </div>
      <div class="cell">
        <div class="field-label">Alamat</div>
        <div class="field-val">{{ $texts['cell_address'] ?? $user->address ?? 'Alamat' }}</div>
      </div>
      <div class="cell" style="border-right:none">
        <div class="field-label">Kewarganegaraan</div>
        <div class="field-val">{{ $texts['cell_nationality'] ?? $user->kewarganegaraan ?? 'Kewarganegaraan' }}</div>
      </div>
    </div>

    <div class="row" style="grid-template-columns: 80px 1fr 1fr 1fr">
      <div class="cell kontak-label">Kontak</div>
      <div class="cell">
        <div class="field-label">Phone (mobile)</div>
        <div class="field-val" style="margin-bottom:8px">{{ $texts['cell_phone'] ?? $user->phone ?? 'Nomor HP' }}</div>
        <div class="field-label">Sosmed</div>
        <div class="field-val">{{ $texts['cell_sosmed'] ?? $sosmed->name ?? 'Sosial Media' }}</div>
      </div>
      <div class="cell">
        <div class="field-label">Email</div>
        <div class="field-val">{{ $texts['cell_email'] ?? $user->email ?? 'Email' }}</div>
      </div>
      <div class="cell" style="border-right:none"></div>
    </div>

    <div class="row grid4">
      <div class="cell" style="border-right:none">
        <div class="year-txt">{{$texts['year_experience'] ?? $experience->start_year . ' - ' . $experience->end_year ?? 'Year'}}</div>
      </div>
      <div class="cell" style="grid-column:span 2">
        <div class="section-label">Sekolah</div>
        <div class="tl-row">
          <div class="tl-dot"></div>
          <div><div class="tl-text">{{ $texts['cell_experiences'] ?? b ?? 'Nama Sekolah' }}</div><div class="tl-sub">Rekayasa Perangkat Lunak</div></div>
        </div>
      </div>
      <div class="cell" style="border-right:none">
        <div class="year-txt">Year's</div>
      </div>
    </div>

    <div class="row grid4">
      <div class="cell">
        <div class="skill-title">Soft Skill</div>
        <div class="skill-item">{{ $texts['cell_soft_skills'] ?? $keterampilan->soft_skill ?? 'Soft Skills' }}</div>
      </div>
      <div class="cell">
        <div class="skill-title">Hard Skill</div>
        <div class="skill-item">{{ $texts['cell_hard_skills'] ?? $keterampilan->hard_skill ?? 'Hard Skills' }}</div>
      </div>
      <div class="cell" style="border-right:none">
        <div class="skill-title">Bahasa ?</div>
        <div class="skill-item">{{ $texts['cell_bahasa'] ?? $keterampilan->bahasa ?? 'Bahasa' }}</div>
      </div>
    </div>

    <div class="row grid4">
      <div class="cell" style="border-right:none">
        <div class="year-txt">{{ $texts['cell_portofolio_year'] ?? $portofolio->year ?? 'Portofolio Year' }}</div>
      </div>
      <div class="cell" style="grid-column:span 2">
        <div class="section-label">Experience</div>
        <div class="tl-row">
          <div class="tl-dot"></div>
        <div>
            <div class="tl-text">{{ $texts['cell_portofolio'] ?? $portofolio->nama ?? 'Portofolio' }}</div>
        </div>
        </div>
      </div>
      <div class="cell" style="border-right:none">
        <div class="year-txt">Year's</div>
      </div>
    </div>

  </div>
</div>

</body>
</html>