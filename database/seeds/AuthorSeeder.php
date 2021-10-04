<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Author;
class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        factory(Author::class, 50)->create();

        // DB::table("authors")->insert([
        //     'name' => 'Vardenis' ,
        //     'surname' => 'Pavardenis',
        //     'username' => 'Slapyvardis'
        // ]);

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
