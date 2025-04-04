<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);

        $user1 = User::create([
            'name'          => 'Nguyen Van A',
            'email'         => 'teacher1@gmail.com',
            'password'      => bcrypt('123456a@A'),
            'phone'         => '0123456789',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user1->assignRole('Teacher');

        $user2 = User::create([
            'name'          => 'Nguyen Van B',
            'email'         => 'teacher2@gmail.com',
            'password'      => bcrypt('123456a@A'),
            'phone'         => '0123456789',
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user2->assignRole('Teacher');

        $user3 = User::create([
            'name'          => 'Tran Van Chinh',
            'email'         => 'chinh31503@gmail.com',
            'password'      => bcrypt('chinh31503'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user3->assignRole('Student');

        DB::table('teachers')->insert([
            [
                'user_id'           => $user1->id,
                'gender'            => 'male',
                'phone'             => '0123456789',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('teachers')->insert([
            [
                'user_id'           => $user2->id,
                'gender'            => 'male',
                'phone'             => '0123456789',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('students')->insert([
            [
                'user_id'           => $user3->id,
                'gender'            => 'male',
                'phone'             => '0123456789',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);
        /*
        $user3 = User::create([
            'name'          => 'Parent',
            'email'         => 'parent@demo.com',
            'password'      => bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user3->assignRole('Parent');

        $user4 = User::create([
            'name'          => 'Student',
            'email'         => 'student@demo.com',
            'password'      => bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user4->assignRole('Student');


        DB::table('teachers')->insert([
            [
                'user_id'           => $user2->id,
                'gender'            => 'male',
                'phone'             => '0123456789',
                'dateofbirth'       => '1993-04-11',
                'current_address'   => 'Dhaka-1215',
                'permanent_address' => 'Dhaka-1215',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('parents')->insert([
            [
                'user_id'           => $user3->id,
                'gender'            => 'male',
                'phone'             => '0123456789',
                'current_address'   => 'Dhaka-1215',
                'permanent_address' => 'Dhaka-1215',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('grades')->insert([
            'teacher_id'        => 1,
            'class_numeric'     => 1,
            'class_name'        => 'One',
            'class_description' => 'class one'
        ]);
        
        DB::table('students')->insert([
            [
                'user_id'           => $user4->id,
                'parent_id'         => 1,
                'class_id'          => 1,
                'roll_number'       => 1,
                'gender'            => 'male',
                'phone'             => '0123456789',
                'dateofbirth'       => '1993-04-11',
                'current_address'   => 'Dhaka-1215',
                'permanent_address' => 'Dhaka-1215',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);
        */
    }
}
