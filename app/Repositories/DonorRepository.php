<?php

namespace App\Repositories;

class DonorRepository
{
    private static $defaultDonors = [
        [
            'id' => 1,
            'name' => 'Ahmad Ali',
            'blood_type' => 'A+',
            'phone' => '0791234567',
            'email' => 'ahmad@example.com',
        ],
        [
            'id' => 2,
            'name' => 'Omar Khaled',
            'blood_type' => 'O-',
            'phone' => '0781234567',
            'email' => 'omar@example.com',
        ],
        [
            'id' => 3,
            'name' => 'Sara Mohammad',
            'blood_type' => 'B+',
            'phone' => '0771234567',
            'email' => 'sara@example.com',
        ],
    ];

    public static function all()
    {
        if (!session()->has('donors')) {
            session()->put('donors', self::$defaultDonors);
        }

        return session()->get('donors');
    }

    public static function find($id)
    {
        return collect(self::all())->firstWhere('id', (int) $id);
    }

    public static function add($donor)
    {
        $donors = self::all();

        $donor['id'] = collect($donors)->max('id') + 1;

        $donors[] = $donor;

        session()->put('donors', $donors);
    }
}
