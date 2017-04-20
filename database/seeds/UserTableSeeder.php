<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->toArray());

        $user = User::find(1);
        $user->name = 'yuexiarenjing';
        $user->email = '1541469@tongji.edu.cn';
        $user->password = bcrypt('aszw3035266');
        $user->is_admin = true;
        $user->save();
    }
}
