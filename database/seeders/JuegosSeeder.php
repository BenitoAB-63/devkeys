<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JuegosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juegos')->insert([
            'juego' => 'Dark Souls III',
            'descripcion' => 'Suspendisse orci ligula, venenatis vel mauris sed, blandit tristique lectus. Donec efficitur tincidunt lacus sit amet volutpat. Nunc a dolor in velit auctor efficitur nec et nisi. Suspendisse vitae porta orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec nisi non nibh tincidunt aliquet quis id sem. Proin malesuada elit nec tellus eleifend, at consectetur enim pharetra. ',
            'imagen' => '01.jpg',
            'precio' => 50,
            'cantidad' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('juegos')->insert([
            'juego' => 'Sekiro',
            'descripcion' => 'Suspendisse orci ligula, venenatis vel mauris sed, blandit tristique lectus. Donec efficitur tincidunt lacus sit amet volutpat. Nunc a dolor in velit auctor efficitur nec et nisi. Suspendisse vitae porta orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec nisi non nibh tincidunt aliquet quis id sem. Proin malesuada elit nec tellus eleifend, at consectetur enim pharetra. ',
            'imagen' => '02.jpeg',
            'precio' => 30,
            'cantidad' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('juegos')->insert([
            'juego' => 'Nioh 2 Complete Edition',
            'descripcion' => 'Suspendisse orci ligula, venenatis vel mauris sed, blandit tristique lectus. Donec efficitur tincidunt lacus sit amet volutpat. Nunc a dolor in velit auctor efficitur nec et nisi. Suspendisse vitae porta orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec nisi non nibh tincidunt aliquet quis id sem. Proin malesuada elit nec tellus eleifend, at consectetur enim pharetra. ',
            'imagen' => '03.jpeg',
            'precio' => 20,
            'cantidad' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('juegos')->insert([
            'juego' => 'Dying Light',
            'descripcion' => 'Suspendisse orci ligula, venenatis vel mauris sed, blandit tristique lectus. Donec efficitur tincidunt lacus sit amet volutpat. Nunc a dolor in velit auctor efficitur nec et nisi. Suspendisse vitae porta orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec nisi non nibh tincidunt aliquet quis id sem. Proin malesuada elit nec tellus eleifend, at consectetur enim pharetra. ',
            'imagen' => '04.jpeg',
            'precio' => 15,
            'cantidad' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('juegos')->insert([
            'juego' => 'Death Stranding',
            'descripcion' => 'Suspendisse orci ligula, venenatis vel mauris sed, blandit tristique lectus. Donec efficitur tincidunt lacus sit amet volutpat. Nunc a dolor in velit auctor efficitur nec et nisi. Suspendisse vitae porta orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec nisi non nibh tincidunt aliquet quis id sem. Proin malesuada elit nec tellus eleifend, at consectetur enim pharetra. ',
            'imagen' => '05.jpg',
            'precio' => 35,
            'cantidad' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('juegos')->insert([
            'juego' => 'GTA V',
            'descripcion' => 'Suspendisse orci ligula, venenatis vel mauris sed, blandit tristique lectus. Donec efficitur tincidunt lacus sit amet volutpat. Nunc a dolor in velit auctor efficitur nec et nisi. Suspendisse vitae porta orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec nisi non nibh tincidunt aliquet quis id sem. Proin malesuada elit nec tellus eleifend, at consectetur enim pharetra. ',
            'imagen' => '06.jpg',
            'precio' => 60,
            'cantidad' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('juegos')->insert([
            'juego' => 'Mafia Definitive Edition',
            'descripcion' => 'Suspendisse orci ligula, venenatis vel mauris sed, blandit tristique lectus. Donec efficitur tincidunt lacus sit amet volutpat. Nunc a dolor in velit auctor efficitur nec et nisi. Suspendisse vitae porta orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec nisi non nibh tincidunt aliquet quis id sem. Proin malesuada elit nec tellus eleifend, at consectetur enim pharetra. ',
            'imagen' => '07.jpeg',
            'precio' => 42,
            'cantidad' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('juegos')->insert([
            'juego' => 'Sleeping Dogs',
            'descripcion' => 'Suspendisse orci ligula, venenatis vel mauris sed, blandit tristique lectus. Donec efficitur tincidunt lacus sit amet volutpat. Nunc a dolor in velit auctor efficitur nec et nisi. Suspendisse vitae porta orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec nisi non nibh tincidunt aliquet quis id sem. Proin malesuada elit nec tellus eleifend, at consectetur enim pharetra. ',
            'imagen' => '08.jpg',
            'precio' => 63,
            'cantidad' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('juegos')->insert([
            'juego' => 'Skyrim Special Edition',
            'descripcion' => 'Suspendisse orci ligula, venenatis vel mauris sed, blandit tristique lectus. Donec efficitur tincidunt lacus sit amet volutpat. Nunc a dolor in velit auctor efficitur nec et nisi. Suspendisse vitae porta orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec nisi non nibh tincidunt aliquet quis id sem. Proin malesuada elit nec tellus eleifend, at consectetur enim pharetra. ',
            'imagen' => '09.jpg',
            'precio' => 12,
            'cantidad' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('juegos')->insert([
            'juego' => 'Fallout 4 GOTY',
            'descripcion' => 'Suspendisse orci ligula, venenatis vel mauris sed, blandit tristique lectus. Donec efficitur tincidunt lacus sit amet volutpat. Nunc a dolor in velit auctor efficitur nec et nisi. Suspendisse vitae porta orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec nisi non nibh tincidunt aliquet quis id sem. Proin malesuada elit nec tellus eleifend, at consectetur enim pharetra. ',
            'imagen' => '10.jpg',
            'precio' => 10,
            'cantidad' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('juegos')->insert([
            'juego' => 'God of War Ragnarok',
            'descripcion' => 'Suspendisse orci ligula, venenatis vel mauris sed, blandit tristique lectus. Donec efficitur tincidunt lacus sit amet volutpat. Nunc a dolor in velit auctor efficitur nec et nisi. Suspendisse vitae porta orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec nisi non nibh tincidunt aliquet quis id sem. Proin malesuada elit nec tellus eleifend, at consectetur enim pharetra. ',
            'imagen' => '11.webp',
            'precio' => 46,
            'cantidad' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
