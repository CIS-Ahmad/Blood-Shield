<x-layouts.app title="Donor Details | Blood Shield">

    <div class="mb-4">
        <a href="{{ route('donors.index') }}" class="btn btn-outline-danger">
            <i class="bi bi-arrow-left me-1"></i>
            Back to Donors
        </a>
    </div>

    <div class="row g-4">

        {{-- Donor Profile --}}
        <div class="col-lg-4">
            <div class="card shadow-sm border-0 donor-details-card">
                <div class="card-body text-center p-4">

                    <img src="{{ asset('images/default-donor.png') }}" class="rounded-circle donor-image mb-3"
                        alt="Donor profile">

                    <h3 class="fw-bold">{{ $donor['name'] }}</h3>

                    <span class="badge bg-danger fs-6">
                        {{ $donor['blood_type'] }}
                    </span>

                    <p class="text-muted mt-3 mb-0">
                        Donor #{{ $donor['id'] }}
                    </p>

                </div>
            </div>
        </div>

        {{-- Contact Information --}}
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 donor-details-card">
                <div class="card-body p-4">

                    <h4 class="fw-bold text-danger mb-4">
                        <i class="bi bi-person-vcard me-2 "></i>
                        Contact Information
                    </h4>

                    <div class="row g-4">

                        {{-- Full Name --}}
                        <div class="col-12">
                            <div class="donor-info-item">
                                <div class="donor-info-icon">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div>
                                    <small class="text-muted">Full Name</small>
                                    <h6 class="fw-bold mb-0">{{ $donor['name'] }}</h6>
                                </div>
                            </div>
                        </div>

                        {{-- Phone --}}
                        <div class="col-12">
                            <div class="donor-info-item">
                                <div class="donor-info-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div>
                                    <small class="text-muted">Phone Number</small>
                                    <h6 class="fw-bold mb-0">
                                        <a href="tel:{{ $donor['phone'] }}" class="text-dark text-decoration-none">
                                            {{ $donor['phone'] }}
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="col-12">
                            <div class="donor-info-item">
                                <div class="donor-info-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div>
                                    <small class="text-muted">Email Address</small>
                                    <h6 class="fw-bold mb-0">
                                        <a href="mailto:{{ $donor['email'] }}"
                                            class="donor-email fw-semibold text-dark text-decoration-none">
                                            {{ $donor['email'] }}
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>

</x-layouts.app>
