<x-app-layout>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
* { box-sizing: border-box; }
body { font-family: 'Inter', sans-serif; background: #f0f2f5; }
.app-layout { display: flex; min-height: calc(100vh - 100px); margin-top: -40px; margin-left: -25px; margin-right: -25px; }
.sidebar { width: 240px; background: #fff; border-right: 1px solid #edf0f7; padding: 28px 16px; min-height: 100%; flex-shrink: 0; position: sticky; top: 0; align-self: flex-start; max-height: 100vh; overflow-y: auto; }
.sidebar-logo { font-size: 18px; font-weight: 700; color: #5a67d8; text-decoration: none; display: flex; align-items: center; gap: 8px; margin-bottom: 32px; }
.sidebar-section-title { font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: .08em; color: #aab; margin-bottom: 10px; padding-left: 8px; }
.sidebar-nav { list-style: none; padding: 0; margin: 0 0 24px 0; }
.sidebar-nav li { margin-bottom: 2px; }
.sidebar-nav a { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 10px; text-decoration: none; font-size: 13px; font-weight: 500; color: #555; transition: all .15s; }
.sidebar-nav a:hover { background: #f0f0fb; color: #5a67d8; }
.sidebar-nav a.active { background: linear-gradient(135deg, #667eea, #764ba2); color: #fff; }
.logout-link { color: #e05252 !important; }
.main-content { flex: 1; padding: 28px; display: flex; align-items: center; justify-content: center; }
.form-card { background: white; border-radius: 20px; padding: 36px; box-shadow: 0 4px 24px rgba(0,0,0,.08); width: 100%; max-width: 520px; }
.form-title { font-size: 20px; font-weight: 800; color: #333; margin: 0 0 6px 0; }
.form-subtitle { font-size: 13px; color: #888; margin: 0 0 28px 0; }
.form-group { margin-bottom: 18px; }
.form-label { display: block; font-size: 12px; font-weight: 700; color: #555; margin-bottom: 6px; text-transform: uppercase; letter-spacing: .05em; }
.form-control { width: 100%; padding: 11px 14px; border: 1.5px solid #e8eaf0; border-radius: 10px; font-size: 13px; font-family: 'Inter', sans-serif; color: #333; outline: none; transition: border-color .15s; }
.form-control:focus { border-color: #667eea; }
.form-control.is-invalid { border-color: #e05252; }
.invalid-feedback { font-size: 11px; color: #e05252; margin-top: 4px; }
.role-select select { appearance: none; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23888' stroke-width='2'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 12px center; background-size: 16px; padding-right: 36px; cursor: pointer; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.btn-group { display: flex; gap: 12px; margin-top: 24px; }
.btn-primary { background: linear-gradient(135deg, #667eea, #764ba2); color: white; border: none; padding: 12px 24px; border-radius: 10px; font-size: 13px; font-weight: 700; cursor: pointer; transition: all .15s; flex: 1; }
.btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(102,126,234,.35); }
.btn-secondary { background: #f0f2f5; color: #555; border: none; padding: 12px 24px; border-radius: 10px; font-size: 13px; font-weight: 600; cursor: pointer; text-decoration: none; display: flex; align-items: center; justify-content: center; transition: all .15s; }
.btn-secondary:hover { background: #e2e5ee; color: #333; }
.hint-text { font-size: 11px; color: #aab; margin-top: 4px; }
.role-desc { font-size: 11px; color: #666; padding: 10px 14px; border-radius: 8px; margin-top: 8px; line-height: 1.5; display: none; }
.role-taruna { background: #f0fff4; border-left: 4px solid #38a169; }
.role-pengasuh { background: #ebf4ff; border-left: 4px solid #3182ce; }
.role-penyelenggara { background: #f3eeff; border-left: 4px solid #764ba2; }
</style>

<div class="app-layout">
    <div class="sidebar">
        <a href="{{ route('dashboard') }}" class="sidebar-logo">
            <i class="fas fa-graduation-cap"></i> Pengasuhan
        </a>
        <p class="sidebar-section-title">Sistem</p>
        <ul class="sidebar-nav">
            <li><a href="{{ route('users.index') }}" class="active"><i class="fas fa-user-shield" style="width:16px;"></i> Manajemen Akun</a></li>
            <li><a href="{{ route('dashboard') }}"><i class="fas fa-th-large" style="width:16px;"></i> Dashboard</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="form-card">
            <h1 class="form-title"><i class="fas fa-user-edit" style="color:#764ba2; margin-right:10px;"></i>Edit Akun</h1>
            <p class="form-subtitle">Ubah data akun <strong>{{ $user->name }}</strong></p>

            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf @method('PUT')

                <div class="form-group">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}"
                           class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" value="{{ old('username', $user->username) }}"
                               class="form-control @error('username') is-invalid @enderror">
                        @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" value="{{ old('jabatan', $user->jabatan) }}"
                               class="form-control @error('jabatan') is-invalid @enderror">
                        @error('jabatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}"
                           class="form-control @error('email') is-invalid @enderror" required>
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Role</label>
                    <div class="role-select">
                        <select name="role" id="roleSelect"
                                class="form-control @error('role') is-invalid @enderror"
                                onchange="updateRoleDesc(this.value)" required>
                            <option value="taruna" {{ old('role', $user->role) == 'taruna' ? 'selected' : '' }}>Taruna</option>
                            <option value="pengasuh" {{ old('role', $user->role) == 'pengasuh' ? 'selected' : '' }}>Pengasuh</option>
                            <option value="penyelenggara" {{ old('role', $user->role) == 'penyelenggara' ? 'selected' : '' }}>Penyelenggara</option>
                        </select>
                    </div>
                    <div id="roleDesc" class="role-desc"></div>
                    @error('role')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Password Baru</label>
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Kosongkan jika tidak diubah">
                        <div class="hint-text">Kosongkan jika tidak ingin mengubah password.</div>
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation"
                               class="form-control" placeholder="Ulangi password baru">
                    </div>
                </div>

                <div class="btn-group">
                    <a href="{{ route('users.index') }}" class="btn-secondary">
                        <i class="fas fa-arrow-left" style="margin-right:6px;"></i>Batal
                    </a>
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-save" style="margin-right:6px;"></i>Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
const roleDescs = {
    taruna: { cls: 'role-taruna', text: '👤 Taruna hanya dapat melihat dashboard dan raport poin pengasuhan.' },
    pengasuh: { cls: 'role-pengasuh', text: '📋 Pengasuh dapat mengelola kegiatan, poin, acara, dan surat. Tidak dapat akses manajemen akun & setting sistem.' },
    penyelenggara: { cls: 'role-penyelenggara', text: '👑 Penyelenggara memiliki akses penuh termasuk manajemen akun dan konfigurasi sistem.' },
};
function updateRoleDesc(role) {
    const el = document.getElementById('roleDesc');
    if (!role || !roleDescs[role]) { el.style.display = 'none'; return; }
    el.className = 'role-desc ' + roleDescs[role].cls;
    el.textContent = roleDescs[role].text;
    el.style.display = 'block';
}
// trigger on load
updateRoleDesc(document.getElementById('roleSelect').value);
</script>
</x-app-layout>
