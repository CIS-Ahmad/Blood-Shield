<?php
namespace App\Http\Controllers;
use App\Repositories\DonorRepository;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    private $donors ;
    
    public function __construct()
    {
        $this->donors = DonorRepository::all();
    }

    public function index()
    {
        return view('donors.index', [
            'donors' => $this->donors
        ]);
    }

    public function show($id)
    {
        $donor = collect($this->donors)->firstWhere('id', $id);

        if (!$donor) {
            abort(404, 'Donor not found');
        }

        return view('donors.show', [
            'donor' => $donor
        ]);
    }

    public function create()
    {
        return view('donors.create');
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
