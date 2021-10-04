<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Author;
// use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Author::factory()->count(50)->create();
        factory(Author::class, 50)->create();

        // for($i=0; $i<=50; $i++) {
        //     DB::table("authors")->insert([
        //         'name' => 'Vardenis'.$i ,
        //         'surname' => 'Pavardenis'.$i,
        //         'username' => 'Slapyvardis'.$i
        //     ]);
        // }

        // DB::table("authors")->insert([
        //     'name' => 'Vardenis1' ,
        //     'surname' => 'Pavardenis1',
        //     'username' => 'Slapyvardis1'
        // ]);

        // DB::table("authors")->insert([
        //     'name' => 'Vardenis2' ,
        //     'surname' => 'Pavardenis2',
        //     'username' => 'Slapyvardis2'
        // ]);
    }
}
