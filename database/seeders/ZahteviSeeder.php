<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\VrstaZahteva;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZahteviSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zahtevs')->insert([
            [
                'zahtev_id'=>1,
                'datum_kreiranja'=>'2025-03-25',
                'podnosilac_zahteva'=>'Erste banka',
                'status_zahteva'=>5,
                'vrsta'=>'Razvoj',
                'prioritet'=>1,
                'naziv'=>'Nova sifra placanja',
                'sadrzaj'=>'Omoguciti novu sifru placanja za devizne transakcije',
            ],
            [
                'zahtev_id'=>2,
                'datum_kreiranja'=>'2025-01-08',
                'podnosilac_zahteva'=>'Adriatic banka',
                'status_zahteva'=>3,
                'vrsta'=>'Zakonska izmena',
                'prioritet'=>1,
                'naziv'=>'Security aspekt mobilna',
                'sadrzaj'=>'Uvesti dodatne security aspekte na mobilnoj aplikaciji prema predlogu NBS.',
            ],
            [
                'zahtev_id'=>3,
                'datum_kreiranja'=>'2025-02-20',
                'podnosilac_zahteva'=>'NLB Komercijalna banka',
                'status_zahteva'=>4,
                'vrsta'=>'Razvoj',
                'prioritet'=>2,
                'naziv'=>'Novi izgled aplikacije',
                'sadrzaj'=>'Zelimo novi izgled web aplikacije, na ekranu za Kursne liste. Specifikaciju cemo dostaviti naknadno.',
            ],
            [
                'zahtev_id'=>4,
                'datum_kreiranja'=>'2025-05-25',
                'podnosilac_zahteva'=>'Erste banka',
                'status_zahteva'=>2,
                'vrsta'=>'Bug',
                'prioritet'=>1,
                'naziv'=>'Neispravan prikaz kamatnih stopa',
                'sadrzaj'=>'Na ekranu za pregled kredita, kamatne stope nisu pravilno prikazane za različite iznose kredita.',
            ]
            ]);

            DB::table('users')->insert([
            [
                'name'=>'admin@pwa.rs',
                'email'=>'admin@pwa.rs',
                'email_verified_at'=>NULL,
                'password' => '$2y$12$pfQPro3d1eBiZsVknkUS5uKjpzfG3U6Vx6fwWt0J5YGoPggub2t/C',
                'remember_token' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);
    }
}
