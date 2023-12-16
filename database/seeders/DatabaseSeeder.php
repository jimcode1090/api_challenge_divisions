<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /**
         * Divisiones Superiores
         */
        DB::table('divisions')->insert([
            //Divisiones Superiores
            ["nombre" => "Division Superior 1", "parent_id" => null, "nivel" => 1, "colaboradores" => 2, "embajador" => "Juan Perez"], // Division Superior 1
            ["nombre" => "Division Superior 2", "parent_id" => null, "nivel" => 1, "colaboradores" => 3, "embajador" => "Maria Lopez"], // Division Superior 2
            ["nombre" => "Division Superior 3", "parent_id" => null, "nivel" => 1, "colaboradores" => 5, "embajador" => "Pedro Gutierrez"], // Division Superior 3
        ]);

        /**
         * Divisiones
         */

        DB::table('divisions')->insert([
            ["nombre" => "Division 1", "parent_id" => 1, "nivel" => 2, "colaboradores" => 11, "embajador" => "Luisa Gonzalez"], // Division 1
            ["nombre" => "Division 2", "parent_id" => 1, "nivel" => 2, "colaboradores" => 15, "embajador" => "Maria Jimenez"], // Division 2
            ["nombre" => "Division 3", "parent_id" => 1, "nivel" => 3, "colaboradores" => 14, "embajador" => "Carlos Perez"], // Division 3
            ["nombre" => "Division 4", "parent_id" => 2, "nivel" => 2, "colaboradores" => 10, "embajador" => "Jose Mendoza"], // Division 4
            ["nombre" => "Division 5", "parent_id" => 2, "nivel" => 3, "colaboradores" => 5, "embajador" => "Carlos Enrique"], // Division 5
            ["nombre" => "Division 6", "parent_id" => 2, "nivel" => 2, "colaboradores" => 8, "embajador" => "Luis Vargas"], // Division 6
            ["nombre" => "Division 7", "parent_id" => 3, "nivel" => 2, "colaboradores" => 9, "embajador" => "Juan Fernandez"], // Division 7
            ["nombre" => "Division 8", "parent_id" => 3, "nivel" => 3, "colaboradores" => 3, "embajador" => "Felipe Marez"], // Division 8
            ["nombre" => "Division 9", "parent_id" => 3, "nivel" => 2, "colaboradores" => 7, "embajador" => "Carlos Gutierrez"], // Division 9
            ["nombre" => "Division 12", "parent_id" => 3, "nivel" => 2, "colaboradores" => 6, "embajador" => "Sebastian Vega"], // Division 10
        ]);

        /*
         * Subdivisiones
         */
        DB::table('divisions')->insert([
            ["nombre" => "Subdivision 1", "parent_id" => 4, "nivel" => 4, "colaboradores" => 4, "embajador" => "Carmen Gonzalez"], // Subdivision 1
            ["nombre" => "Subdivision 2", "parent_id" => 4, "nivel" => 4, "colaboradores" => 8, "embajador" => "Luis Perez Gonzalez"], // Subdivision 2
            ["nombre" => "Subdivision 3", "parent_id" => 5, "nivel" => 5, "colaboradores" => 18, "embajador" => "Carlos Jimenez"], // Subdivision 3
            ["nombre" => "Subdivision 4", "parent_id" => 6, "nivel" => 5, "colaboradores" => 18, "embajador" => "Marcos Lopez Jimenez"], // Subdivision 4
        ]);
    }
}
