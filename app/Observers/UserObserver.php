<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use App\Models\SubKriteria1;
use App\Models\SubKriteria2;
use App\Models\SubKriteria3;
use App\Models\SubKriteria4;
use App\Models\SubKriteria5;
use App\Models\SubKriteria6;
use Illuminate\Support\Str;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $dataKriteria = [
            [
                'kodeKriteria' => 'C1',
                'namaKriteria' => 'Kecepatan Internet',
                'bobot' => '30',
                'jenis' => 'Benefit'
            ],
            [
                'kodeKriteria' => 'C2',
                'namaKriteria' => 'Stabilitas Koneksi',
                'bobot' => '25',
                'jenis' => 'benefit'
            ],
            [
                'kodeKriteria' => 'C3',
                'namaKriteria' => 'Jangkauan Geografis',
                'bobot' => '20',
                'jenis' => 'benefit'
            ],
            [
                'kodeKriteria' => 'C4',
                'namaKriteria' => 'Harga dan Paket Layanan',
                'bobot' => '15',
                'jenis' => 'cost'
            ],
            [
                'kodeKriteria' => 'C5',
                'namaKriteria' => 'Kualitas Layanan Pelanggan',
                'bobot' => '10',
                'jenis' => 'benefit'
            ],
            
        ];

        Kriteria::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataKriteria));

        $dataSubKriteria = [
            [
                'kecepatanInternet' => '20 Mbps - 35 Mbps',
                'nKecepatanInternet' => '1'
            ],
            [
                'kecepatanInternet' => '35 Mbps - 50 Mbps',
                'nKecepatanInternet' => '2'
            ],
            [
               'kecepatanInternet' => '50 Mbps - 70 Mbps',
                'nKecepatanInternet' => '3'
            ],
            [
                'kecepatanInternet' => '70 Mbps - 80 Mbps',
                'nKecepatanInternet' => '4'
            ],
            [
               'kecepatanInternet' => '85 Mbps - 100 Mbps',
                'nKecepatanInternet' => '5'
            ]
        ];

        SubKriteria::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria));

        $dataSubKriteria1 = [
            [
                'StabilitasKoneksi' => '201 - 999 ',
                'nStabilitasKoneksi' => '1'
            ],
            [
               'StabilitasKoneksi' => '101  - 200',
                'nStabilitasKoneksi' => '2'
            ],
            [
                'StabilitasKoneksi' => '51  - 100',
                'nStabilitasKoneksi' => '3'
            ],
            [
                'StabilitasKoneksi' => '21  - 50 ',
                'nStabilitasKoneksi' => '4'
            ],
            [
               'StabilitasKoneksi' => '0  - 20 ',
                'nStabilitasKoneksi' => '5'
            ]
        ];

        SubKriteria1::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria1));

        $dataSubKriteria2 = [
            [
                'jangkauanGeografis' => 'Lokal',
                'njangkauanGeografis' => '1'
            ],
            [
                'jangkauanGeografis' => 'Regional',
                'njangkauanGeografis' => '2'
            ],
            [
                'jangkauanGeografis' => 'Nasional',
                'njangkauanGeografis' => '3'
            ],
            [
                'jangkauanGeografis' => 'Internasional',
                'njangkauanGeografis' => '4'
            ]
        ];

        SubKriteria2::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria2));

        $dataSubKriteria3 = [
            [
                'HargaDanPaketLayanan' => 'Sangat Mahal',
                'nHargaDanPaketLayanan' => '1'
            ],
            [
                'HargaDanPaketLayanan' => 'Mahal',
                'nHargaDanPaketLayanan' => '2'
            ],
            [
                'HargaDanPaketLayanan' => 'Sedang',
                'nHargaDanPaketLayanan' => '3'
            ],
            [
                'HargaDanPaketLayanan' => 'Murah',
                'nHargaDanPaketLayanan' => '4'
            ],
            [
                'HargaDanPaketLayanan' => 'Sangat Murah',
                'nHargaDanPaketLayanan' => '5'
            ]
        ];
        SubKriteria3::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria3));

        $dataSubKriteria4 = [
            [
                'KualitasLayananPelanggan' => 'Sangat Buruk',
                'nKualitasLayananPelanggan' => '1'
            ],
            [
                'KualitasLayananPelanggan' => 'Buruk',
                'nKualitasLayananPelanggan' => '2'
            ],
            [
                'KualitasLayananPelanggan' => 'Cukup',
                'nKualitasLayananPelanggan' => '3'
            ],
            [
                'KualitasLayananPelanggan' => 'Baik',
                'nKualitasLayananPelanggan' => '4'
            ],
            [
                'KualitasLayananPelanggan' => 'Sangat Baik',
                'nKualitasLayananPelanggan' => '5'
            ]
        ];
        SubKriteria4::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria4));
       
    }
}
