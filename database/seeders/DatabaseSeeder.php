<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Models\Mujer;
use App\Models\User;
use App\Models\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        self::seedUsuarios();
        /* self::seedCategorias(); */
        $this->command->info('Tablas usuarios y categorias inicializadas con datos!');
        // \App\Models\User::factory(10)->create();
    }


    private function seedUsuarios(){
        DB::table('users');
        $u1 = new User;
        $u1->name = "admin";
        $u1->email = "admin@email.com";
        $u1->password = Hash::make("admin1234");
        $u1->save();

        $u2 = new User;
        $u2->name = "admin2";
        $u2->email = "admin2@email.com";
        $u2->password = Hash::make("admin1234");
        $u2->save();

        /* $u3 = new User;
        $u3->name = "Jon Ander";
        $u3->email = "jonanderdecastro@gmail.com";
        $u3->password = Hash::make("jon1234");
        $u3->save();  */

    }

    private function seedCategorias(){
        DB::table('categorias')->delete();
        $c1 = new Categoria;
        $c1->nombreCategoria = "Historia";
        $c1->color = "";
        $c1->save();

        $c2 = new Categoria;
        $c2->nombreCategoria = "Derecho";
        $c2->color = "";
        $c2->save();

        $c3 = new Categoria;
        $c3->nombreCategoria = "Antropología";
        $c3->color = "";
        $c3->save();

        $c4 = new Categoria;
        $c4->nombreCategoria = "Geografía";
        $c4->color = "";
        $c4->save();

        $c5 = new Categoria;
        $c5->nombreCategoria = "Filosofía";
        $c5->color = "";
        $c5->save();

        $c6 = new Categoria;
        $c6->nombreCategoria = "Psicología";
        $c6->color = "";
        $c6->save();

        $c7 = new Categoria;
        $c7->nombreCategoria = "Economía";
        $c7->color = "";
        $c7->save();

        $c8 = new Categoria;
        $c8->nombreCategoria = "Sociología";
        $c8->color = "";
        $c8->save();

        $c9 = new Categoria;
        $c9->nombreCategoria = "Pedagogía";
        $c9->color = "";
        $c9->save();

    }
}
