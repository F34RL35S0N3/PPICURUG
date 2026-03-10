<x-app-layout>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>
* { box-sizing: border-box; }
body { font-family: 'Inter', sans-serif; background: #f0f2f5; }

.app-layout {
    display: flex;
    min-height: calc(100vh - 100px);
    margin-top: -40px;
    margin-left: -25px;
    margin-right: -25px;
}

/* === SIDEBAR === */
.sidebar {
    width: 240px;
    background: #fff;
    border-right: 1px solid #edf0f7;
    padding: 28px 16px;
    min-height: 100%;
    flex-shrink: 0;
    position: sticky;
    top: 0;
    align-self: flex-start;
    max-height: 100vh;
    overflow-y: auto;
}
.sidebar-logo { font-size: 18px; font-weight: 700; color: #5a67d8; text-decoration: none; display: flex; align-items: center; gap: 8px; margin-bottom: 32px; }
.sidebar-section-title { font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: .08em; color: #aab; margin-bottom: 10px; padding-left: 8px; }
.sidebar-nav { list-style: none; padding: 0; margin: 0 0 24px 0; }
.sidebar-nav li { margin-bottom: 2px; }
.sidebar-nav a { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 10px; text-decoration: none; font-size: 13px; font-weight: 500; color: #555; transition: all .15s; }
.sidebar-nav a:hover { background: #f0f0fb; color: #5a67d8; }
.sidebar-nav a.active { background: linear-gradient(135deg, #667eea, #764ba2); color: #fff; }
.sidebar-divider { border: none; border-top: 1px solid #edf0f7; margin: 12px 0 16px 0; }
.logout-link { color: #e05252 !important; }

/* === SIDEBAR: Mahasiswa list === */
.mhs-search {
    position: relative; margin-bottom: 8px;
}
.mhs-search i { position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #bbb; font-size: 11px; }
.mhs-search input {
    width: 100%; padding: 7px 10px 7px 28px;
    border: 1.5px solid #edf0f7; border-radius: 8px;
    font-size: 12px; font-family: 'Inter', sans-serif;
    outline: none; color: #444; background: #fafbff;
}
.mhs-search input:focus { border-color: #667eea; }
.mhs-list { list-style: none; padding: 0; margin: 0; max-height: 220px; overflow-y: auto; }
.mhs-list::-webkit-scrollbar { width: 3px; }
.mhs-list::-webkit-scrollbar-thumb { background: #c5c8e0; border-radius: 4px; }
.mhs-item { display: flex; align-items: center; gap: 8px; margin-bottom: 8px; }
.mhs-avatar { width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: white; font-size: 10px; font-weight: 700; }
.mhs-info .mhs-name { font-weight: 600; color: #333; font-size: 12px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.mhs-info .mhs-kelas { font-size: 10px; color: #aab; }
.view-all-link { display: block; text-align: center; font-size: 11px; color: #667eea; font-weight: 600; text-decoration: none; margin-top: 8px; }

/* === MAIN === */
.main-content { flex: 1; padding: 28px 28px 28px 24px; min-width: 0; }

/* === GREETING BANNER === */
.greeting-banner {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 20px;
    padding: 32px 36px;
    color: white;
    margin-bottom: 24px;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.greeting-banner::before { content: ''; position: absolute; right: -60px; top: -60px; width: 220px; height: 220px; background: rgba(255,255,255,.08); border-radius: 50%; }
.greeting-banner::after { content: ''; position: absolute; right: 100px; bottom: -80px; width: 180px; height: 180px; background: rgba(255,255,255,.06); border-radius: 50%; }
.greeting-text { position: relative; z-index: 1; }
.greeting-text .greeting { font-size: 13px; opacity: .8; margin-bottom: 4px; }
.greeting-text h1 { font-size: 24px; font-weight: 800; margin: 0 0 6px 0; }
.greeting-text p { font-size: 13px; opacity: .85; margin: 0; }
.greeting-badge {
    position: relative; z-index: 1;
    background: rgba(255,255,255,.18);
    border-radius: 16px; padding: 16px 22px;
    text-align: center; backdrop-filter: blur(4px);
    border: 1px solid rgba(255,255,255,.25);
}
.greeting-badge .ava { width: 52px; height: 52px; border-radius: 50%; background: rgba(255,255,255,.25); display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: 800; margin: 0 auto 8px; }
.greeting-badge .username { font-size: 13px; font-weight: 700; }
.greeting-badge .role { font-size: 11px; opacity: .8; }

/* === STAT CARDS === */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
    margin-bottom: 24px;
}
.stat-card {
    background: white;
    border-radius: 14px;
    padding: 18px;
    box-shadow: 0 2px 12px rgba(0,0,0,.05);
    text-decoration: none;
    display: block;
    transition: transform .2s, box-shadow .2s;
    cursor: pointer;
}
.stat-card:hover { transform: translateY(-3px); box-shadow: 0 6px 20px rgba(0,0,0,.1); }
.stat-icon { width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; font-size: 18px; color: white; }
.stat-count { font-size: 26px; font-weight: 800; color: #333; line-height: 1; margin-bottom: 4px; }
.stat-label { font-size: 12px; color: #888; font-weight: 500; }
.stat-change { font-size: 11px; margin-top: 6px; font-weight: 600; }
.stat-change.up { color: #38a169; }
.stat-change.neutral { color: #aab; }

/* === TWO COLUMN LAYOUT === */
.two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px; }

/* === SECTION HEADER === */
.section-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px; }
.section-title { font-size: 15px; font-weight: 700; color: #333; margin: 0; }
.section-link { font-size: 12px; color: #667eea; font-weight: 600; text-decoration: none; }
.section-link:hover { text-decoration: underline; }

/* === CARD === */
.card { background: white; border-radius: 16px; box-shadow: 0 2px 12px rgba(0,0,0,.05); }
.card-body { padding: 20px; }
.card-body.p-0 { padding: 0; }

/* === ACARA CARDS === */
.acara-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; margin-bottom: 24px; }
.acara-card {
    background: white;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(0,0,0,.06);
    transition: transform .2s;
}
.acara-card:hover { transform: translateY(-4px); }
.acara-card-img { height: 100px; display: flex; align-items: center; justify-content: center; position: relative; }
.acara-card-img .acara-time { position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,.2); padding: 5px 12px; font-size: 11px; color: white; font-weight: 600; display: flex; align-items: center; gap: 5px; }
.acara-card-body { padding: 14px; }
.acara-date { font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; margin-bottom: 5px; }
.acara-card-title { font-size: 13px; font-weight: 700; color: #333; line-height: 1.4; margin-bottom: 4px; }
.acara-card-desc { font-size: 11px; color: #aab; line-height: 1.4; }

/* === SURAT TABLE === */
.surat-table table { width: 100%; border-collapse: collapse; }
.surat-table th { padding: 12px 16px; text-align: left; font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #8a93b0; background: #f8f9ff; }
.surat-table td { padding: 12px 16px; font-size: 13px; color: #444; border-top: 1px solid #f0f2f7; }
.surat-table tr:hover td { background: #fafbff; }
.status-badge { display: inline-flex; align-items: center; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; }

/* === ACARA TABLE === */
.acara-table table { width: 100%; border-collapse: collapse; }
.acara-table th { padding: 12px 16px; text-align: left; font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: #8a93b0; background: #f8f9ff; }
.acara-table td { padding: 12px 16px; font-size: 13px; color: #444; border-top: 1px solid #f0f2f7; }
.acara-table tr:hover td { background: #fafbff; }
.time-badge { background: #eef0ff; color: #667eea; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; }

/* === EMPTY STATE === */
.empty-mini { text-align: center; padding: 28px 16px; color: #bbb; }
.empty-mini i { font-size: 28px; display: block; margin-bottom: 8px; }
.empty-mini p { font-size: 13px; margin: 0; }
</style>

<div class="app-layout">
    <!-- SIDEBAR -->
    <div class="sidebar">
        <a href="{{ route('dashboard') }}" class="sidebar-logo">
            <i class="fas fa-graduation-cap"></i> Pengasuhan
        </a>

        <p class="sidebar-section-title">Menu</p>
        <ul class="sidebar-nav">
            <li><a href="{{ route('dashboard') }}" class="active"><i class="fas fa-th-large" style="width:16px;"></i> Dashboard</a></li>
            <li><a href="{{ route('surat.index') }}"><i class="fas fa-envelope-open-text" style="width:16px;"></i> Administrasi Surat</a></li>
            <li><a href="{{ route('acara.index') }}"><i class="fas fa-calendar-alt" style="width:16px;"></i> Acara</a></li>
            <li><a href="{{ route('poin.index') }}"><i class="fas fa-star" style="width:16px;"></i> POIN</a></li>
            <li><a href="{{ route('mahasiswa.index') }}"><i class="fas fa-users" style="width:16px;"></i> Database Mahasiswa</a></li>
        </ul>

        <hr class="sidebar-divider">

        <!-- Mahasiswa List -->
        <p class="sidebar-section-title">Mahasiswa</p>
        <div class="mhs-search">
            <i class="fas fa-search"></i>
            <input type="text" id="sidebarSearch" placeholder="Cari nama..." oninput="filterSidebar()">
        </div>
        <ul class="mhs-list" id="mahasiswaSidebarList">
            @php
                $avatarColors = ['#667eea','#764ba2','#f093fb','#f5576c','#38a169','#e07020','#3182ce','#d53f8c'];
                $ci = 0;
            @endphp
            @foreach($mahasiswaSidebar as $mhs)
            <li class="mhs-item sidebar-mhs-item" data-search="{{ strtolower($mhs['nama']) }} {{ strtolower($mhs['nickname']) }}">
                <div class="mhs-avatar" style="background:{{ $avatarColors[$ci % count($avatarColors)] }};">
                    {{ strtoupper(substr($mhs['nickname'], 0, 2)) }}
                </div>
                <div class="mhs-info" style="flex:1; min-width:0;">
                    <div class="mhs-name">{{ $mhs['nickname'] }}</div>
                    <div class="mhs-kelas">{{ $mhs['kelas'] }}</div>
                </div>
            </li>
            @php $ci++; @endphp
            @endforeach
        </ul>
        <a href="{{ route('mahasiswa.index') }}" class="view-all-link">Lihat semua {{ $totalMahasiswa }} mahasiswa →</a>

        <hr class="sidebar-divider">
        <p class="sidebar-section-title">Pengaturan</p>
        <ul class="sidebar-nav">
            <li><a href="{{ route('setting.index') }}"><i class="fas fa-cog" style="width:16px;"></i> Setting</a></li>
            <li>
                <a href="{{ route('logout') }}" class="logout-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt" style="width:16px;"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
            </li>
        </ul>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <!-- Greeting Banner -->
        <div class="greeting-banner">
            <div class="greeting-text">
                @php
                    $hour = (int) now()->setTimezone('Asia/Jakarta')->format('H');
                    $greeting = $hour < 12 ? 'Selamat Pagi' : ($hour < 15 ? 'Selamat Siang' : ($hour < 18 ? 'Selamat Sore' : 'Selamat Malam'));
                @endphp
                <div class="greeting">{{ $greeting }},</div>
                <h1>{{ Auth::user()->name }} 👋</h1>
                <p>Selamat datang di Dashboard Pengasuhan — semua data tersaji dengan rapi.</p>
            </div>
            <div class="greeting-badge">
                <div class="ava">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                <div class="username">{{ Auth::user()->name }}</div>
                <div class="role">Administrator</div>
            </div>
        </div>

        <!-- Stat Cards -->
        <div class="stats-grid">
            <!-- Total Mahasiswa -->
            <a href="{{ route('mahasiswa.index') }}" class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #667eea, #764ba2);">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-count">{{ $totalMahasiswa }}</div>
                <div class="stat-label">Total Mahasiswa</div>
                <div class="stat-change neutral"><i class="fas fa-graduation-cap"></i> Semua kelas</div>
            </a>
            <!-- Total Acara -->
            <a href="{{ route('acara.index') }}" class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #43e97b, #38a169);">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="stat-count">{{ $semuaAcara->count() }}</div>
                <div class="stat-label">Total Acara</div>
                <div class="stat-change up"><i class="fas fa-calendar-check"></i> {{ $acaraMendatang->count() }} mendatang</div>
            </a>
            <!-- Total Surat -->
            <a href="{{ route('surat.index') }}" class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #f093fb, #f5576c);">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="stat-count">{{ $suratStats['total'] }}</div>
                <div class="stat-label">Total Surat</div>
                <div class="stat-change {{ $suratStats['diproses'] > 0 ? 'up' : 'neutral' }}">
                    <i class="fas fa-spinner"></i> {{ $suratStats['diproses'] }} diproses
                </div>
            </a>
            <!-- Surat Selesai -->
            <a href="{{ route('surat.index') }}?status=Selesai" class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #0bc5ea, #3182ce);">
                    <i class="fas fa-check-double"></i>
                </div>
                <div class="stat-count">{{ $suratStats['disetujui'] + $suratStats['selesai'] }}</div>
                <div class="stat-label">Surat Selesai</div>
                <div class="stat-change up"><i class="fas fa-check-circle"></i> disetujui & selesai</div>
            </a>
        </div>

        <!-- Acara Mendatang -->
        <div class="section-header">
            <h2 class="section-title"><i class="fas fa-calendar-star" style="color:#667eea; margin-right:8px;"></i>Acara Pengasuhan Mendatang</h2>
            <a href="{{ route('acara.index') }}" class="section-link">Kelola Acara →</a>
        </div>

        @if($acaraMendatang->isEmpty())
        <div class="card" style="margin-bottom:24px;">
            <div class="card-body">
                <div class="empty-mini">
                    <i class="fas fa-calendar-times" style="color:#e2e5ee;"></i>
                    <p>Belum ada acara dijadwalkan. <a href="{{ route('acara.create') }}" style="color:#667eea; font-weight:600;">+ Tambah Acara</a></p>
                </div>
            </div>
        </div>
        @else
        @php
            $eventColors = [
                ['bg' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)', 'icon' => 'fa-chalkboard-teacher', 'color' => '#667eea'],
                ['bg' => 'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)', 'icon' => 'fa-laptop-code', 'color' => '#38a169'],
                ['bg' => 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)', 'icon' => 'fa-gavel', 'color' => '#d53f8c'],
            ];
        @endphp
        <div class="acara-grid" style="margin-bottom:24px;">
            @foreach($acaraMendatang->take(3) as $idx => $event)
            @php $c = $eventColors[$idx % 3]; @endphp
            <div class="acara-card">
                <div class="acara-card-img" style="background: {{ $c['bg'] }};">
                    <i class="fas {{ $c['icon'] }}" style="color: rgba(255,255,255,.85); font-size: 38px;"></i>
                    <div class="acara-time">
                        <i class="fas fa-clock"></i> {{ \Carbon\Carbon::parse($event->jam)->format('H:i') }} WIB
                    </div>
                </div>
                <div class="acara-card-body">
                    <div class="acara-date" style="color: {{ $c['color'] }};">
                        <i class="fas fa-calendar-day" style="margin-right:4px;"></i>
                        {{ \Carbon\Carbon::parse($event->tanggal)->locale('id')->isoFormat('D MMMM Y') }}
                    </div>
                    <div class="acara-card-title">{{ $event->nama_acara }}</div>
                    @if($event->keterangan)
                    <div class="acara-card-desc">{{ Str::limit($event->keterangan, 60) }}</div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @endif

        <!-- Two Column: Surat Terbaru + Jadwal Acara -->
        <div class="two-col">

            <!-- Surat Terbaru -->
            <div>
                <div class="section-header">
                    <h3 class="section-title"><i class="fas fa-envelope-open-text" style="color:#f5576c; margin-right:8px;"></i>Surat Terbaru</h3>
                    <a href="{{ route('surat.index') }}" class="section-link">Lihat Semua →</a>
                </div>
                <div class="card surat-table">
                    @if($suratTerbaru->isEmpty())
                    <div class="card-body">
                        <div class="empty-mini">
                            <i class="fas fa-inbox" style="color:#e2e5ee;"></i>
                            <p>Belum ada surat. <a href="{{ route('surat.create') }}" style="color:#667eea; font-weight:600;">+ Tambah</a></p>
                        </div>
                    </div>
                    @else
                    <table>
                        <thead>
                            <tr>
                                <th>PERIHAL</th>
                                <th>JENIS</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suratTerbaru as $s)
                            <tr onclick="window.location='{{ route('surat.show', $s->id) }}'" style="cursor:pointer;">
                                <td>
                                    <div style="font-weight:600; color:#333; font-size:12px;">{{ Str::limit($s->perihal, 30) }}</div>
                                    <div style="font-size:11px; color:#aab;">{{ $s->pengirim }}</div>
                                </td>
                                <td>
                                    <span style="background:#eef0ff; color:#667eea; padding:2px 8px; border-radius:20px; font-size:10px; font-weight:700; white-space:nowrap;">
                                        {{ Str::limit($s->jenis_surat, 15) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="status-badge" style="background:{{ $s->status_bg_color }}; color:{{ $s->status_badge_color }};">
                                        {{ $s->status }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>

            <!-- Jadwal Acara -->
            <div>
                <div class="section-header">
                    <h3 class="section-title"><i class="fas fa-calendar-alt" style="color:#667eea; margin-right:8px;"></i>Jadwal Acara</h3>
                    <a href="{{ route('acara.create') }}" class="section-link">+ Tambah</a>
                </div>
                <div class="card acara-table">
                    @if($semuaAcara->isEmpty())
                    <div class="card-body">
                        <div class="empty-mini">
                            <i class="fas fa-calendar-times" style="color:#e2e5ee;"></i>
                            <p>Belum ada jadwal.</p>
                        </div>
                    </div>
                    @else
                    <table>
                        <thead>
                            <tr>
                                <th>NAMA ACARA</th>
                                <th>TANGGAL</th>
                                <th>JAM</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($semuaAcara->take(5) as $a)
                            <tr>
                                <td>
                                    <div style="display:flex; align-items:center; gap:8px;">
                                        <div style="width:28px; height:28px; border-radius:8px; background: linear-gradient(135deg,#667eea,#764ba2); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                            <i class="fas fa-calendar-check" style="color:white; font-size:11px;"></i>
                                        </div>
                                        <span style="font-weight:600; color:#333; font-size:12px;">{{ Str::limit($a->nama_acara, 25) }}</span>
                                    </div>
                                </td>
                                <td style="font-size:12px; color:#666; white-space:nowrap;">{{ \Carbon\Carbon::parse($a->tanggal)->locale('id')->isoFormat('D MMM Y') }}</td>
                                <td><span class="time-badge">{{ \Carbon\Carbon::parse($a->jam)->format('H:i') }}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="section-header">
            <h3 class="section-title"><i class="fas fa-bolt" style="color:#e07020; margin-right:8px;"></i>Aksi Cepat</h3>
        </div>
        <div style="display:grid; grid-template-columns: repeat(4,1fr); gap:14px; margin-bottom:28px;">
            <a href="{{ route('surat.create') }}" style="background: linear-gradient(135deg,#f093fb,#f5576c); border-radius:14px; padding:18px; color:white; text-decoration:none; display:flex; align-items:center; gap:12px; font-weight:700; font-size:13px; transition:transform .15s; box-shadow:0 4px 15px rgba(245,87,108,.3);" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform=''">
                <i class="fas fa-file-alt" style="font-size:20px; opacity:.9;"></i>
                <div><div style="font-size:11px; opacity:.8; font-weight:400;">Buat</div>Surat Baru</div>
            </a>
            <a href="{{ route('acara.create') }}" style="background: linear-gradient(135deg,#667eea,#764ba2); border-radius:14px; padding:18px; color:white; text-decoration:none; display:flex; align-items:center; gap:12px; font-weight:700; font-size:13px; transition:transform .15s; box-shadow:0 4px 15px rgba(102,126,234,.3);" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform=''">
                <i class="fas fa-calendar-plus" style="font-size:20px; opacity:.9;"></i>
                <div><div style="font-size:11px; opacity:.8; font-weight:400;">Tambah</div>Acara</div>
            </a>
            <a href="{{ route('poin.index') }}" style="background: linear-gradient(135deg,#43e97b,#38a169); border-radius:14px; padding:18px; color:white; text-decoration:none; display:flex; align-items:center; gap:12px; font-weight:700; font-size:13px; transition:transform .15s; box-shadow:0 4px 15px rgba(56,161,105,.3);" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform=''">
                <i class="fas fa-star" style="font-size:20px; opacity:.9;"></i>
                <div><div style="font-size:11px; opacity:.8; font-weight:400;">Kelola</div>Poin Mahasiswa</div>
            </a>
            <a href="{{ route('mahasiswa.index') }}" style="background: linear-gradient(135deg,#0bc5ea,#3182ce); border-radius:14px; padding:18px; color:white; text-decoration:none; display:flex; align-items:center; gap:12px; font-weight:700; font-size:13px; transition:transform .15s; box-shadow:0 4px 15px rgba(49,130,206,.3);" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform=''">
                <i class="fas fa-users" style="font-size:20px; opacity:.9;"></i>
                <div><div style="font-size:11px; opacity:.8; font-weight:400;">Lihat</div>Database Mahasiswa</div>
            </a>
        </div>

    </div><!-- end main-content -->
</div><!-- end app-layout -->

<script>
function filterSidebar() {
    const q = document.getElementById('sidebarSearch').value.toLowerCase();
    document.querySelectorAll('.sidebar-mhs-item').forEach(function(li) {
        const s = li.dataset.search || '';
        li.style.display = s.includes(q) ? 'flex' : 'none';
    });
}
</script>
</x-app-layout>