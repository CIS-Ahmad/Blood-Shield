<x-layouts.app title="Donors | Blood Shield">

    <div class="mb-4">
        <h2 class="fw-bold text-danger">Donors</h2>
        <p class="text-muted">
            List of all registered donors in the Blood Shield Management System.
        </p>
    </div>

    <div class="mb-3">
        <a href="{{ route('donors.create') }}" class="btn btn-danger">
            <i class="bi bi-plus-circle me-1"></i>
            Add New Donor
        </a>
    </div>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Donors List --}}
    @if (count($donors) > 0)

        <div class="row g-4">

            @foreach ($donors as $donor)
                <div class="col-12 col-sm-6 col-lg-3">

                    <div class="card donor-card shadow-sm h-100">

                        <div class="card-body text-center">

                            {{-- Profile Image --}}
                            <img src="{{ asset('images/default-donor.png') }}" class="rounded-circle donor-image mb-3"
                                alt="Donor profile">

                            <h5 class="fw-bold text-danger mb-1">
                                {{ $donor['name'] }}
                            </h5>

                            <p class="text-muted small fw-bold mb-2">
                                Donor #{{ $donor['id'] }}
                            </p>

                            <span class="badge bg-danger mb-3">
                                {{ $donor['blood_type'] }}
                            </span>

                            <hr>

                            <div class="text-start small">

                                <p>
                                    <i class="bi bi-telephone text-danger me-2"></i>
                                    <span class="fw-bold">{{ $donor['phone'] }}</span>
                                </p>

                                <p>
                                    <i class="bi bi-envelope text-danger me-2"></i>
                                    <a href="mailto:{{ $donor['email'] }}"
                                        class="donor-email fw-semibold text-dark text-decoration-none">
                                        <span class="fw-bold">{{ $donor['email'] }}</span>
                                    </a>
                                </p>

                            </div>

                            <a href="{{ route('donors.show', $donor['id']) }}" class="btn btn-outline-danger w-100">
                                <span class="fw-bold">View Details</span>
                            </a>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>
    @else
        {{-- Empty State --}}
        <div class="card border-0 shadow-sm rounded-4 text-center py-5">
            <div class="card-body">

                <div class="mb-3">
                    <i class="bi bi-people text-danger" style="font-size: 55px;"></i>
                </div>

                <h4 class="fw-bold">No Donors Found</h4>

                <p class="text-muted mb-4">
                    There are currently no registered donors.
                    Start building your donor community today!
                </p>

                <a href="{{ route('donors.create') }}" class="btn btn-danger px-4">
                    <i class="bi bi-person-plus me-2"></i>
                    Add Your First Donor
                </a>

            </div>
        </div>

    @endif

</x-layouts.app>
