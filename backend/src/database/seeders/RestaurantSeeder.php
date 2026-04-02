<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    public function run()
    {
        $mockData = [
            // โซนบางซื่อ (เป้าหมายหลัก)
            [
                'restaurant_name' => 'Pad Thai Bang Sue',
                'restaurant_latitude' => 13.804921,
                'restaurant_longitude' => 100.539012,
                'restaurant_address' => '123 Pracharat Sai 2 Rd., Bang Sue',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Bang Sue Noodle Hub',
                'restaurant_latitude' => 13.805510,
                'restaurant_longitude' => 100.540134,
                'restaurant_address' => 'Grand Station Food Court, Bang Sue',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Tao Poon Dim Sum',
                'restaurant_latitude' => 13.806214,
                'restaurant_longitude' => 100.531245,
                'restaurant_address' => 'Tao Poon Market, Bang Sue',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Bang Pho Seafood',
                'restaurant_latitude' => 13.811567,
                'restaurant_longitude' => 100.522890,
                'restaurant_address' => 'Bang Pho Pier, Pracharat Sai 1, Bang Sue',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Gateway Bang Sue Food Lounge',
                'restaurant_latitude' => 13.807890,
                'restaurant_longitude' => 100.522312,
                'restaurant_address' => '4th Floor, Gateway Bang Sue',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Khao Man Gai Pracharat',
                'restaurant_latitude' => 13.818456,
                'restaurant_longitude' => 100.530112,
                'restaurant_address' => 'Pracharat Sai 1 Rd., Bang Sue',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Rama 7 Riverside Steak',
                'restaurant_latitude' => 13.815678,
                'restaurant_longitude' => 100.514567,
                'restaurant_address' => 'Rama 7 Bridge, Bang Sue',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Som Tum Bang Sue',
                'restaurant_latitude' => 13.802345,
                'restaurant_longitude' => 100.535678,
                'restaurant_address' => 'Techa Wanit Rd., Bang Sue',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Wongsawang Shabu Buffet',
                'restaurant_latitude' => 13.828901,
                'restaurant_longitude' => 100.527890,
                'restaurant_address' => 'Wongsawang Town Center, Bang Sue',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Prachachuen Boat Noodles',
                'restaurant_latitude' => 13.835678,
                'restaurant_longitude' => 100.542345,
                'restaurant_address' => 'Prachachuen Rd., Bang Sue',
                'restaurant_province' => 'Bangkok',
            ],

            // โซนใกล้เคียง (จตุจักร, ลาดพร้าว, อารีย์)
            [
                'restaurant_name' => 'Chatuchak Grill & Bar',
                'restaurant_latitude' => 13.801234,
                'restaurant_longitude' => 100.554567,
                'restaurant_address' => 'Chatuchak Weekend Market',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Ari Coffee Roasters',
                'restaurant_latitude' => 13.779812,
                'restaurant_longitude' => 100.544678,
                'restaurant_address' => 'Ari Soi 3, Phaya Thai',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Ratchayothin Premium Sushi',
                'restaurant_latitude' => 13.827654,
                'restaurant_longitude' => 100.568901,
                'restaurant_address' => 'Major Cineplex Ratchayothin',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Ladprao K-BBQ',
                'restaurant_latitude' => 13.815432,
                'restaurant_longitude' => 100.561234,
                'restaurant_address' => 'Central Plaza Ladprao',
                'restaurant_province' => 'Bangkok',
            ],
            [
                'restaurant_name' => 'Victory Monument Noodle',
                'restaurant_latitude' => 13.764567,
                'restaurant_longitude' => 100.538901,
                'restaurant_address' => 'Boat Noodle Alley, Ratchathewi',
                'restaurant_province' => 'Bangkok',
            ],

            // โซนนนทบุรี (ข้ามแม่น้ำ / ชานเมือง)
            [
                'restaurant_name' => 'Nonthaburi River Cafe',
                'restaurant_latitude' => 13.861712,
                'restaurant_longitude' => 100.493823,
                'restaurant_address' => 'Nonthaburi Pier Riverside',
                'restaurant_province' => 'Nonthaburi',
            ],
            [
                'restaurant_name' => 'Krua Thai Bang Kruai',
                'restaurant_latitude' => 13.804567,
                'restaurant_longitude' => 100.485678,
                'restaurant_address' => 'Bang Kruai - Sai Noi Rd.',
                'restaurant_province' => 'Nonthaburi',
            ],
            [
                'restaurant_name' => 'Ngamwongwan Artisan Bakery',
                'restaurant_latitude' => 13.856789,
                'restaurant_longitude' => 100.534567,
                'restaurant_address' => 'Pantip Plaza Ngamwongwan',
                'restaurant_province' => 'Nonthaburi',
            ],
            [
                'restaurant_name' => 'Pak Kret Seafood',
                'restaurant_latitude' => 13.912345,
                'restaurant_longitude' => 100.498765,
                'restaurant_address' => 'Koh Kret Island',
                'restaurant_province' => 'Nonthaburi',
            ],
            [
                'restaurant_name' => 'Tiwanon Spicy Salad',
                'restaurant_latitude' => 13.845678,
                'restaurant_longitude' => 100.512345,
                'restaurant_address' => 'Tiwanon Rd., Mueang',
                'restaurant_province' => 'Nonthaburi',
            ]
        ];

        foreach ($mockData as $data) {
            Restaurant::create($data);
        }
    }
}
