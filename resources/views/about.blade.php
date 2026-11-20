 <x-layouts.app title="About Us | Blood Shield">

     {{-- Hero Section --}}
     <section class="about-hero text-center p-5 mb-5 rounded-4">
         <div class="mb-3">
             <i class="bi bi-heart-pulse-fill text-danger" style="font-size: 3.5rem;"></i>
         </div>

         <h1 class="fw-bold display-5 mb-3">
             About <span class="text-danger">Blood Shield</span>
         </h1>

         <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">
             A smarter way to manage blood donations, organize donor information,
             and support the life-saving mission of blood donation.
         </p>

         <a href="{{ route('donors.index') }}" class="btn btn-danger btn-lg mt-3">
             <i class="bi bi-people-fill me-2"></i>
             Explore Our Donors
         </a>
     </section>

     {{-- Who We Are --}}
     <section class="mb-5">
         <div class="row align-items-center g-4">

             <div class="col-lg-6">
                 <img src="{{ asset('images/About_us.jpg') }}" class="img-fluid rounded-4 shadow-sm about-image"
                     alt="Blood donation">
             </div>

             <div class="col-lg-6">
                 <span class="text-danger fw-semibold">WHO WE ARE</span>

                 <h2 class="fw-bold mt-2 mb-3">
                     Making Blood Donation Management Easier
                 </h2>

                 <p class="text-muted">
                     Blood Shield is a blood donation management system designed
                     to organize donor records, track donations, and monitor
                     available blood supplies.
                 </p>

                 <p class="text-muted">
                     Our goal is to provide a simple and organized platform
                     that helps manage important blood donation information
                     efficiently.
                 </p>
             </div>

         </div>
     </section>

     {{-- Mission and Vision --}}
     <section class="mb-5">
         <div class="text-center mb-4">
             <span class="text-danger fw-semibold">OUR PURPOSE</span>
             <h2 class="fw-bold mt-2">Mission & Vision</h2>
         </div>

         <div class="row g-4">

             <div class="col-md-6">
                 <div class="card about-card shadow-sm h-100 p-4">
                     <div class="about-icon mb-3">
                         <i class="bi bi-heart-pulse-fill"></i>
                     </div>

                     <h4 class="fw-bold">Our Mission</h4>

                     <p class="text-muted mb-0">
                         To simplify blood donation management by providing
                         an organized system for managing donors, donations,
                         and blood availability.
                     </p>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="card about-card shadow-sm h-100 p-4">
                     <div class="about-icon mb-3">
                         <i class="bi bi-eye-fill"></i>
                     </div>

                     <h4 class="fw-bold">Our Vision</h4>

                     <p class="text-muted mb-0">
                         To contribute to a more organized and accessible
                         blood donation process through technology and
                         efficient information management.
                     </p>
                 </div>
             </div>

         </div>
     </section>

     {{-- What We Manage --}}
     <section class="mb-5">
         <div class="text-center mb-4">
             <span class="text-danger fw-semibold">OUR SYSTEM</span>
             <h2 class="fw-bold mt-2">What We Manage</h2>
             <p class="text-muted">
                 The main features that make Blood Shield useful.
             </p>
         </div>

         <div class="row g-4">

             <div class="col-md-4">
                 <div class="card about-card text-center shadow-sm h-100 p-4">
                     <div class="about-icon mx-auto mb-3">
                         <i class="bi bi-people-fill"></i>
                     </div>

                     <h5 class="fw-bold">Donor Management</h5>

                     <p class="text-muted mb-0">
                         Organize donor information, contact details,
                         and blood types in one place.
                     </p>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="card about-card text-center shadow-sm h-100 p-4">
                     <div class="about-icon mx-auto mb-3">
                         <i class="bi bi-droplet-fill"></i>
                     </div>

                     <h5 class="fw-bold">Donation Tracking</h5>

                     <p class="text-muted mb-0">
                         Record donations and maintain donation history
                         for registered donors.
                     </p>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="card about-card text-center shadow-sm h-100 p-4">
                     <div class="about-icon mx-auto mb-3">
                         <i class="bi bi-clipboard2-pulse-fill"></i>
                     </div>

                     <h5 class="fw-bold">Blood Storage</h5>

                     <p class="text-muted mb-0">
                         Monitor available blood quantities and organize
                         blood supplies by type.
                     </p>
                 </div>
             </div>

         </div>
     </section>

     {{-- Closing Section --}}
     <section class="about-closing text-center p-5 rounded-4">
         <i class="bi bi-heart-fill text-danger fs-1"></i>

         <h2 class="fw-bold mt-3">Every Donation Matters</h2>

         <p class="text-muted mx-auto" style="max-width: 600px;">
             Behind every donation is an opportunity to make a difference.
             Blood Shield aims to make the management behind this process
             simpler and more organized.
         </p>

         <h5 class="fw-bold text-danger mt-4">
             Saving Lives, One Donation at a Time.
         </h5>
     </section>

     {{-- Page Styles --}}
     <style>
         .about-hero {
             background: linear-gradient(135deg, #fff1f2, #ffffff);
         }

         .about-card {
             border: none;
             border-radius: 16px;
             transition: all 0.3s ease;
         }

         .about-card:hover {
             transform: translateY(-7px);
             box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12) !important;
         }

         .about-icon {
             width: 65px;
             height: 65px;
             display: flex;
             align-items: center;
             justify-content: center;
             border-radius: 16px;
             background: #fff1f2;
             color: #dc3545;
             font-size: 28px;
         }

         .about-image {
             width: 100%;
             max-height: 350px;
             object-fit: cover;
         }

         .about-closing {
             background: #fff1f2;
         }

         @media (prefers-reduced-motion: reduce) {
             .about-card {
                 transition: none;
             }
         }
     </style>

 </x-layouts.app>
