<x-layouts.app title="Donations | Blood Shield">

    <div class="mb-4">
        <h2 class="fw-bold text-danger">
            <i class="bi bi-droplet-half me-2"></i>
            Donations
        </h2>

        <p class="text-muted">
            Search for registered donors and record their donations.
        </p>
    </div>

    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body p-4">

            <h5 class="fw-bold mb-3">
                <i class="bi bi-search text-danger me-2"></i>
                Find Donor
            </h5>

            <form action="{{ route('donations.search') }}" method="Get">
                @csrf

                <div class="row g-2 align-items-center">

                    <div class="col-md-9">
                        <input type="number" name="donor_id" class="form-control" placeholder="Enter donor ID..."
                            value="{{ old('donor_id') }}" required>
                    </div>

                    <div class="col-md-3">
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="bi bi-search me-1"></i>
                            Search
                        </button>
                    </div>

                </div>
            </form>
            @if (session('error'))
                <div class="alert alert-danger mt-3 mb-0">
                    <i class="bi bi-exclamation-circle me-2"></i>
                    {{ session('error') }}
                </div>
            @endif

        </div>
    </div>

    @if (isset($donor))
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="fw-bold mb-0">Donor Information</h5>
                    <span class="badge bg-success">Donor Found</span>
                </div>

                <h4 class="fw-bold text-danger">{{ $donor['name'] }}</h4>

                <p class="text-muted mb-2">
                    Donor ID: #{{ $donor['id'] }}
                </p>

                <p class="mb-2">
                    <i class="bi bi-droplet-fill text-danger me-2"></i>
                    Blood Type: <strong>{{ $donor['blood_type'] }}</strong>
                </p>

                <p class="mb-0">
                    <i class="bi bi-telephone text-danger me-2"></i>
                    {{ $donor['phone'] }}
                </p>

            </div>
        </div>
    @endif
</x-layouts.app>
