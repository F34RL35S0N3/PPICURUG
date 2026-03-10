<!-- Call Volume Chart Section -->
<div class="row mb-4">
    <div class="col-md-8">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title mb-0">Call Volume</h5>
                <div class="dropdown">
                    <button class="btn btn-sm btn-text-secondary rounded-pill text-muted border-0 p-2" type="button" id="callVolumeDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="callVolumeDropdown">
                        <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last 30 Days</a>
                        <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="callVolumeChart" style="height: 300px;"></div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-header">
                <h5 class="card-title mb-0">Call Statistics</h5>
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <small class="text-muted d-block mb-2">Total Duration</small>
                    <h5 class="mb-0">245h 32m</h5>
                </div>
                <div class="mb-4">
                    <small class="text-muted d-block mb-2">Average Duration</small>
                    <h5 class="mb-0">12m 45s</h5>
                </div>
                <div class="mb-4">
                    <small class="text-muted d-block mb-2">Success Rate</small>
                    <h5 class="mb-0">80%</h5>
                </div>
                <div>
                    <small class="text-muted d-block mb-2">Avg. Waiting Time</small>
                    <h5 class="mb-0">2m 15s</h5>
                </div>
            </div>
        </div>
    </div>
</div>
