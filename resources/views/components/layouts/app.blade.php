<html>

<header>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Dashboard card animation */
        .dashboard-card {
            border: none;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 0.6s ease both;
        }

        /* Hover effect */
        .dashboard-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12) !important;
        }

        /* Entrance animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Respect reduced-motion preferences */
        @media (prefers-reduced-motion: reduce) {
            .dashboard-card {
                animation: none;
                transition: none;
            }
        }

        .donor-card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            animation: fadeInUp 0.6s ease both;
        }

        .donor-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12) !important;
        }

        .donor-image {
            width: 85px;
            height: 85px;
            object-fit: cover;
            border: 3px solid #f8d7da;
        }

        .donor-card .badge {
            padding: 8px 14px;
            font-size: 13px;
        }

        .donor-details-card {
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .donor-details-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.10) !important;
        }

        .donor-info-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .donor-info-icon {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: #dc3545;
            color: white;
            font-size: 22px;
            flex-shrink: 0;
        }

        .blood-type-display {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 18px;
            background: #fff5f5;
            border: 1px solid #f8d7da;
            border-radius: 14px;
            color: #dc3545;
        }

        .blood-type-icon {
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dc3545;
            color: white;
            border-radius: 14px;
            font-size: 25px;
        }

        .blood-type-display small {
            color: #777;
        }

        .donor-email {
            transition: color 0.2s ease;
        }

        .donor-email:hover {
            color: #dc3545 !important;
        }
    </style>

</header>

<body class="d-flex flex-column min-vh-100">

    <x-header />

    <main class="container py-4 flex-grow-1">
        {{ $slot }}
    </main>

    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
