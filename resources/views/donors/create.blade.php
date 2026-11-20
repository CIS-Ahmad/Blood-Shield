<x-layouts.app title="Add Donor | Blood Shield">

    <div class="mb-4">
        <h2 class="fw-bold text-danger">
            <i class="bi bi-person-plus me-2"></i>
            Add New Donor
        </h2>

        <p class="text-muted">
            Register a new donor in Blood Shield.
        </p>
    </div>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

        <div class="donor-form-header p-4">
            <div class="d-flex align-items-center gap-3">
                <div class="donor-form-icon">
                    <i class="bi bi-person-plus"></i>
                </div>
                <div>
                    <h5 class="fw-bold mb-1">Donor Registration</h5>
                    <p class="text-muted mb-0">Enter the donor's information below.</p>
                </div>
            </div>
        </div>

        <div class="card-body p-4">

            <form action="{{ route('donors.store') }}" method="POST">
                @csrf

                <h6 class="fw-bold mb-3">Personal Information</h6>

                <div class="row g-4">

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Full Name</label>
                        <div class="input-group donor-input">
                            <span class="input-group-text">
                                <i class="bi bi-person"></i>
                            </span>
                            <input type="text" name="name" class="form-control" placeholder="Enter full name"
                                required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Phone Number</label>
                        <div class="input-group donor-input">
                            <span class="input-group-text">
                                <i class="bi bi-telephone"></i>
                            </span>
                            <input type="tel" name="phone" class="form-control" placeholder="07XXXXXXXX" required>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label fw-semibold">Email Address</label>
                        <div class="input-group donor-input">
                            <span class="input-group-text">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" name="email" class="form-control" placeholder="donor@example.com"
                                required>
                        </div>
                    </div>

                </div>

                <hr class="my-4">

                <h6 class="fw-bold mb-2">Blood Information</h6>
                <p class="text-muted small mb-3">Select the donor's blood group.</p>

                <div class="row g-3">

                    @foreach (['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $type)
                        <div class="col-6 col-sm-3">
                            <input type="radio" class="btn-check" name="blood_type"
                                id="blood_{{ str_replace('+', 'plus', str_replace('-', 'minus', $type)) }}"
                                value="{{ $type }}" required>

                            <label class="blood-type-card"
                                for="blood_{{ str_replace('+', 'plus', str_replace('-', 'minus', $type)) }}">
                                <i class="bi bi-droplet-fill"></i>
                                <span>{{ $type }}</span>
                            </label>
                        </div>
                    @endforeach

                </div>

                <div class="d-flex justify-content-end gap-2 mt-5">
                    <a href="{{ route('donors.index') }}" class="btn btn-light border px-4">
                        Cancel
                    </a>

                    <button type="submit" class="btn btn-danger px-4">
                        <i class="bi bi-person-plus me-1"></i>
                        Register Donor
                    </button>
                </div>

            </form>

        </div>
    </div>

    <style>
        .donor-form-header {
            background: #fff1f2;
            border-bottom: 1px solid #f8d7da;
        }

        .donor-form-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dc3545;
            color: white;
            border-radius: 13px;
            font-size: 23px;
        }

        .donor-input .input-group-text {
            background: #f8f9fa;
            color: #dc3545;
            border-right: 0;
        }

        .donor-input .form-control {
            border-left: 0;
            padding: 12px;
        }

        .donor-input .form-control:focus {
            box-shadow: none;
            border-color: #dee2e6;
        }

        .donor-input:focus-within .input-group-text {
            border-color: #dc3545;
        }

        .donor-input:focus-within .form-control {
            border-color: #dc3545;
        }

        .blood-type-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 18px 10px;
            border: 1px solid #dee2e6;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.25s ease;
            color: #495057;
        }

        .blood-type-card i {
            color: #dc3545;
            font-size: 20px;
        }

        .blood-type-card span {
            font-size: 19px;
            font-weight: 700;
        }

        .blood-type-card:hover {
            border-color: #dc3545;
            background: #fff8f8;
            transform: translateY(-3px);
        }

        .btn-check:checked+.blood-type-card {
            background: #fff1f2;
            border: 2px solid #dc3545;
            color: #dc3545;
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.12);
        }

        .blood-type-card {
            min-height: 105px;
        }
    </style>
</x-layouts.app>
