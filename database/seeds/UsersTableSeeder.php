<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          [
            'name' => 'Автор не известен',
            'email' => 'autor_unknowing@g.g',
            'password' => bcrypt(Str::random(16)),
          ],
          [
            'name' => 'Автор',
            'email' => 'autor@g.g',
            'password' => bcrypt('123123'),
          ],
        ];

        DB::table('users')->insert($data);
    }
}
