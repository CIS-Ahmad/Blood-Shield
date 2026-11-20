<?php

namespace App\Http\Controllers;
use App\Repositories\DonorRepository;
use Illuminate\Http\Request;
class DonationController extends Controller
{
    private $donor ;
    
    public function __construct()
    {
        $this->donors = DonorRepository::all();
    }
    
    public function index()
    {
        return view('donations.index');
    }


    public function search(Request $request)
{
    $id = $request->input('donor_id');

    $donor = DonorRepository::find($id);

    if (!$donor) {
        return back()->with('error', 'Donor not found. Please check the ID.');
    }

    return view('donations.index', [
        'donor' => $donor
    ]);
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'blood_type' => 'required|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
    ]);

    DonorRepository::add($validated);

    return redirect()
        ->route('donors.index')
        ->with('success', 'Donor added successfully!');
}
}