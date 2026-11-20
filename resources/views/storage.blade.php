 <x-layouts.app title="Blood Storage | Blood Shield">

     <div class="mb-4">
         <h2 class="fw-bold text-danger">
             <i class="bi bi-droplet-half me-2"></i>
             Blood Storage
         </h2>
         <p class="text-muted">
             Monitor available blood units and keep track of blood supplies.
         </p>
     </div>

     <div class="row g-4 mb-5">

         <div class="col-md-6">
             <div class="card storage-summary-card shadow-sm h-100">
                 <div class="card-body d-flex align-items-center gap-3">
                     <div class="storage-summary-icon">
                         <i class="bi bi-droplet-fill"></i>
                     </div>
                     <div>
                         <p class="text-muted mb-1">Total Available Units</p>
                         <h2 class="fw-bold mb-0">72</h2>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-md-6">
             <div class="card storage-summary-card shadow-sm h-100">
                 <div class="card-body d-flex align-items-center gap-3">
                     <div class="storage-summary-icon">
                         <i class="bi bi-grid-fill"></i>
                     </div>
                     <div>
                         <p class="text-muted mb-1">Blood Types</p>
                         <h2 class="fw-bold mb-0">8</h2>
                     </div>
                 </div>
             </div>
         </div>

     </div>

     <div class="d-flex justify-content-between align-items-center mb-4">
         <div>
             <h4 class="fw-bold mb-1">Available Blood Groups</h4>
             <p class="text-muted mb-0 small">Current available quantities by blood type.</p>
         </div>
     </div>

     @php
         $bloodTypes = [
             ['type' => 'A+', 'units' => 12],
             ['type' => 'A-', 'units' => 6],
             ['type' => 'B+', 'units' => 10],
             ['type' => 'B-', 'units' => 4],
             ['type' => 'AB+', 'units' => 8],
             ['type' => 'AB-', 'units' => 5],
             ['type' => 'O+', 'units' => 18],
             ['type' => 'O-', 'units' => 9],
         ];
     @endphp

     <div class="row g-4">

         @foreach ($bloodTypes as $blood)
             <div class="col-12 col-sm-6 col-lg-3">

                 <div class="card blood-type-card shadow-sm h-100">
                     <div class="card-body p-4">

                         <div class="d-flex justify-content-between align-items-center mb-3">
                             <div class="blood-type-icon">
                                 <i class="bi bi-droplet-fill"></i>
                             </div>

                             <span class="badge bg-light text-danger">
                                 {{ $blood['type'] }}
                             </span>
                         </div>

                         <h2 class="fw-bold mb-1">
                             {{ $blood['units'] }}
                         </h2>

                         <p class="text-muted small mb-3">Available Units</p>

                         <div class="progress" style="height: 7px;">
                             <div class="progress-bar bg-danger" style="width: {{ ($blood['units'] / 20) * 100 }}%">
                             </div>
                         </div>

                         <div class="d-flex justify-content-between mt-2">
                             <small class="text-muted">Stock level</small>
                             <small class="fw-semibold text-danger">
                                 {{ $blood['units'] >= 10 ? 'Good' : 'Low' }}
                             </small>
                         </div>

                     </div>
                 </div>

             </div>
         @endforeach

     </div>

     <style>
         .storage-summary-card,
         .blood-type-card {
             border: none;
             border-radius: 15px;
             transition: all 0.3s ease;
             animation: fadeInUp 0.6s ease both;
         }

         .storage-summary-card:hover,
         .blood-type-card:hover {
             transform: translateY(-7px);
             box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12) !important;
         }

         .storage-summary-icon {
             width: 60px;
             height: 60px;
             display: flex;
             align-items: center;
             justify-content: center;
             border-radius: 15px;
             background: #fff1f2;
             color: #dc3545;
             font-size: 27px;
             flex-shrink: 0;
         }

         .blood-type-icon {
             width: 45px;
             height: 45px;
             display: flex;
             align-items: center;
             justify-content: center;
             background: #fff1f2;
             color: #dc3545;
             border-radius: 12px;
             font-size: 22px;
         }

         .blood-type-card .badge {
             font-size: 15px;
             padding: 8px 13px;
         }

         .blood-type-card .progress {
             background-color: #f1f1f1;
             border-radius: 10px;
         }

         .blood-type-card .progress-bar {
             border-radius: 10px;
         }

         @media (prefers-reduced-motion: reduce) {

             .storage-summary-card,
             .blood-type-card {
                 animation: none;
                 transition: none;
             }
         }
     </style>

 </x-layouts.app>
