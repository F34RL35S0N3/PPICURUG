<x-app-layout>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #f0f2f5; }

        .db-layout {
            display: flex;
            gap: 0;
            min-height: calc(100vh - 100px);
            margin-top: -40px;
            margin-left: -25px;
            margin-right: -25px;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: 240px;
            background: #fff;
            border-right: 1px solid #edf0f7;
            padding: 28px 16px;
            min-height: 100%;
            position: sticky;
            top: 0;
        }
        .sidebar-logo {
            font-size: 18px;
            font-weight: 700;
            color: #5a67d8;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 32px;
        }
        .sidebar-section-title {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: #aab;
            margin-bottom: 10px;
            padding-left: 8px;
        }
        .sidebar-nav { list-style: none; padding: 0; margin: 0 0 24px 0; }
        .sidebar-nav li { margin-bottom: 2px; }
        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            color: #555;
            transition: all .15s;
        }
        .sidebar-nav a:hover { background: #f0f0fb; color: #5a67d8; }
        .sidebar-nav a.active { background: linear-gradient(135deg, #667eea, #764ba2); color: #fff; }
        .sidebar-nav a.active i { color: #fff; }
        .sidebar-divider { border: none; border-top: 1px solid #edf0f7; margin: 12px 0 20px 0; }
        .logout-link { color: #e05252 !important; }

        /* ===== MAIN ===== */
        .main-content { flex: 1; padding: 28px 30px; }

        /* Header */
        .page-header {
            background: linear-gradient(135deg, #5a67d8 0%, #9f7aea 100%);
            border-radius: 18px;
            padding: 32px 36px;
            color: white;
            margin-bottom: 28px;
            position: relative;
            overflow: hidden;
        }
        .page-header::before {
            content: '';
            position: absolute;
            right: -60px;
            top: -60px;
            width: 220px;
            height: 220px;
            background: rgba(255,255,255,.1);
            border-radius: 50%;
        }
        .page-header::after {
            content: '';
            position: absolute;
            right: 60px;
            bottom: -80px;
            width: 180px;
            height: 180px;
            background: rgba(255,255,255,.07);
            border-radius: 50%;
        }
        .page-header h1 { margin: 0 0 4px 0; font-size: 24px; font-weight: 700; position: relative; z-index: 1; }
        .page-header p { margin: 0; opacity: .85; font-size: 14px; position: relative; z-index: 1; }

        /* Stats bar */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 14px;
            margin-bottom: 28px;
        }
        .stat-card {
            background: white;
            border-radius: 14px;
            padding: 18px 16px;
            text-align: center;
            box-shadow: 0 1px 6px rgba(0,0,0,.05);
            cursor: pointer;
            border: 2px solid transparent;
            transition: all .2s;
        }
        .stat-card:hover { transform: translateY(-2px); box-shadow: 0 4px 14px rgba(0,0,0,.1); }
        .stat-card.active-tab { border-color: #5a67d8; }
        .stat-card .count { font-size: 22px; font-weight: 700; color: #333; }
        .stat-card .label { font-size: 11px; color: #888; margin-top: 2px; font-weight: 500; }

        /* Search */
        .search-bar {
            display: flex;
            align-items: center;
            background: white;
            border-radius: 12px;
            padding: 10px 16px;
            margin-bottom: 20px;
            box-shadow: 0 1px 6px rgba(0,0,0,.05);
            gap: 10px;
        }
        .search-bar i { color: #aab; }
        .search-bar input {
            border: none;
            outline: none;
            width: 100%;
            font-size: 14px;
            font-family: 'Inter', sans-serif;
            color: #333;
        }

        /* Class tabs */
        .class-tabs {
            display: flex;
            gap: 8px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .class-tab {
            padding: 7px 18px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            border: 2px solid #e2e5ee;
            background: white;
            color: #666;
            transition: all .15s;
        }
        .class-tab:hover { border-color: #5a67d8; color: #5a67d8; }
        .class-tab.active { background: #5a67d8; color: white; border-color: #5a67d8; }

        /* Table */
        .table-container {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0,0,0,.05);
        }
        .table-head { padding: 16px 20px; border-bottom: 1px solid #edf0f7; display: flex; justify-content: space-between; align-items: center; }
        .table-head h2 { font-size: 15px; font-weight: 700; color: #333; margin: 0; }
        .badge-count {
            background: #eef0ff;
            color: #5a67d8;
            font-size: 12px;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 50px;
        }

        table { width: 100%; border-collapse: collapse; }
        thead tr { background: #f8f9ff; }
        th {
            padding: 12px 16px;
            text-align: left;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .06em;
            color: #8a93b0;
        }
        td { padding: 13px 16px; font-size: 13px; color: #444; border-top: 1px solid #f0f2f7; }
        tbody tr { transition: background .1s; }
        tbody tr:hover { background: #fafbff; }

        .student-name { font-weight: 600; color: #222; }
        .npm-badge {
            font-family: monospace;
            font-size: 12px;
            color: #777;
        }
        .nickname-badge {
            background: #eef0ff;
            color: #5a67d8;
            padding: 3px 10px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
        }

        .btn-edit {
            background: linear-gradient(135deg, #5a67d8, #9f7aea);
            color: white;
            border: none;
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: opacity .15s;
        }
        .btn-edit:hover { opacity: .85; color: white; }

        /* Class section header for "all" view */
        .class-header-row {
            background: linear-gradient(135deg, #5a67d8, #9f7aea);
        }
        .class-header-row td {
            color: white;
            font-weight: 700;
            padding: 10px 16px;
            font-size: 13px;
            border-top: none;
        }

        .hidden { display: none; }
    </style>

    <div class="db-layout">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="{{ route('dashboard') }}" class="sidebar-logo">
                <i class="fas fa-graduation-cap"></i> Pengasuhan
            </a>

            <p class="sidebar-section-title">Overview</p>
            <ul class="sidebar-nav">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-th-large" style="width:16px;"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('surat.index') }}">
                        <i class="fas fa-envelope-open-text" style="width:16px;"></i> Administrasi Surat
                    </a>
                </li>
                <li>
                    <a href="{{ route('acara.index') }}">
                        <i class="fas fa-calendar-alt" style="width:16px;"></i> Acara
                    </a>
                </li>
                <li>
                    <a href="{{ route('poin.index') }}">
                        <i class="fas fa-star" style="width:16px;"></i> POIN
                    </a>
                </li>
                <li>
                    <a href="{{ route('mahasiswa.index') }}" class="active">
                        <i class="fas fa-users" style="width:16px;"></i> Database Mahasiswa
                    </a>
                </li>
            </ul>

            <hr class="sidebar-divider">
            <p class="sidebar-section-title">Pengaturan</p>
            <ul class="sidebar-nav">
                <li>
                    <a href="#">
                        <i class="fas fa-cog" style="width:16px;"></i> Setting
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="logout-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt" style="width:16px;"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="page-header">
                <h1><i class="fas fa-database"></i> Database Mahasiswa</h1>
                <p>Data biodata dan akun seluruh mahasiswa berdasarkan kelas</p>
            </div>

            <!-- Stats -->
            <div class="stats-row">
                <div class="stat-card active-tab" onclick="filterClass('all', this)">
                    <div class="count">{{ array_sum(array_map('count', $mahasiswaData)) }}</div>
                    <div class="label">Semua Kelas</div>
                </div>
                @foreach($mahasiswaData as $kelas => $students)
                <div class="stat-card" onclick="filterClass('{{ str_replace([' ', '-'], '_', $kelas) }}', this)">
                    <div class="count">{{ count($students) }}</div>
                    <div class="label">{{ $kelas }}</div>
                </div>
                @endforeach
            </div>

            <!-- Search -->
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Cari nama, NPM, atau nickname..." oninput="searchStudents()">
            </div>

            <!-- Class Tabs -->
            <div class="class-tabs">
                <div class="class-tab active" onclick="filterClass('all', null, this)">Semua</div>
                @foreach($mahasiswaData as $kelas => $students)
                <div class="class-tab" onclick="filterClass('{{ str_replace([' ', '-'], '_', $kelas) }}', null, this)">{{ $kelas }}</div>
                @endforeach
            </div>

            <!-- Table -->
            <div class="table-container">
                <div class="table-head">
                    <h2 id="tableTitle">Semua Mahasiswa</h2>
                    <span class="badge-count" id="tableCount">{{ array_sum(array_map('count', $mahasiswaData)) }} mahasiswa</span>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NPM</th>
                            <th>Nama Lengkap</th>
                            <th>Nickname</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="studentTableBody">
                        @php $no = 1; @endphp
                        @foreach($mahasiswaData as $kelas => $students)
                            <tr class="class-header-row class-{{ str_replace([' ', '-'], '_', $kelas) }}" data-class="{{ str_replace([' ', '-'], '_', $kelas) }}">
                                <td colspan="8"><i class="fas fa-users"></i> Kelas {{ $kelas }} &mdash; {{ count($students) }} mahasiswa</td>
                            </tr>
                            @foreach($students as $student)
                            <tr class="student-row class-{{ str_replace([' ', '-'], '_', $kelas) }}"
                                data-class="{{ str_replace([' ', '-'], '_', $kelas) }}"
                                data-search="{{ strtolower($student['nama']) }} {{ strtolower($student['npm']) }} {{ strtolower($student['nickname']) }}">
                                <td style="color:#bbb; font-size:12px;">{{ $no++ }}</td>
                                <td><span class="npm-badge">{{ $student['npm'] }}</span></td>
                                <td class="student-name">{{ $student['nama'] }}</td>
                                <td><span class="nickname-badge">{{ $student['nickname'] }}</span></td>
                                <td style="font-size:12px; color:#555;">{{ $student['email'] }}</td>
                                <td style="font-family:monospace; color:#5a67d8; font-size:13px; font-weight:600;">{{ $student['username'] }}</td>
                                <td style="font-family:monospace; color:#e07020; font-size:13px;">{{ $student['password'] }}</td>
                                <td>
                                    <a href="{{ route('mahasiswa.edit', ['npm' => $student['npm']]) }}" class="btn-edit">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
                <div id="emptyState" class="hidden" style="text-align:center; padding:40px; color:#aab;">
                    <i class="fas fa-search" style="font-size:32px; margin-bottom:10px; display:block;"></i>
                    Tidak ada mahasiswa ditemukan
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentClass = 'all';
        let currentSearch = '';

        function filterClass(cls, statCard, tabEl) {
            currentClass = cls;

            // Update stat cards
            document.querySelectorAll('.stat-card').forEach(c => c.classList.remove('active-tab'));
            if (statCard) statCard.classList.add('active-tab');

            // Update tabs
            if (!tabEl) {
                document.querySelectorAll('.class-tab').forEach((t, i) => {
                    const tabCls = i === 0 ? 'all' :
                        t.textContent.trim().replace(/\s+/g, '_').replace(/-/g, '_');
                    t.classList.toggle('active', tabCls === cls);
                });
            } else {
                document.querySelectorAll('.class-tab').forEach(t => t.classList.remove('active'));
                tabEl.classList.add('active');
                // sync stat card
                if (cls !== 'all') {
                    document.querySelectorAll('.stat-card').forEach((c, i) => {
                        const labels = ['all', ...Object.keys({!! json_encode(array_keys($mahasiswaData)) !!}).map(k => Object.values({!! json_encode(array_keys($mahasiswaData)) !!})[k].replace(/\s+/g,'_').replace(/-/g,'_'))];
                        // simpler: find matching label text
                        const labelEl = c.querySelector('.label');
                        if (labelEl) {
                            const labelCls = labelEl.textContent.trim().replace(/\s+/g,'_').replace(/-/g,'_');
                            c.classList.toggle('active-tab', cls === 'all' ? i === 0 : labelCls === cls);
                        }
                    });
                }
            }

            applyFilters();
        }

        function searchStudents() {
            currentSearch = document.getElementById('searchInput').value.toLowerCase();
            applyFilters();
        }

        function applyFilters() {
            const rows = document.querySelectorAll('.student-row');
            const headers = document.querySelectorAll('.class-header-row');
            let visible = 0;

            // Hide/show class header rows
            headers.forEach(h => {
                const hClass = h.dataset.class;
                h.classList.toggle('hidden', currentClass !== 'all' && hClass !== currentClass);
            });

            rows.forEach(row => {
                const rowClass = row.dataset.class;
                const searchData = row.dataset.search || '';
                const classMatch = currentClass === 'all' || rowClass === currentClass;
                const searchMatch = !currentSearch || searchData.includes(currentSearch);
                const show = classMatch && searchMatch;
                row.classList.toggle('hidden', !show);
                if (show) visible++;
            });

            document.getElementById('tableCount').textContent = visible + ' mahasiswa';
            document.getElementById('emptyState').classList.toggle('hidden', visible > 0);

            // Update title
            if (currentClass === 'all') {
                document.getElementById('tableTitle').textContent = 'Semua Mahasiswa';
            } else {
                const label = document.querySelector(`.class-header-row.class-${currentClass} td`);
                document.getElementById('tableTitle').textContent = label ? label.textContent.split('—')[0].trim() : currentClass;
            }
        }
    </script>
</x-app-layout>
