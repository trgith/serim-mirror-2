<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\RoleHierarchy;

class UsersAndNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfUsers = 10;
        $numberOfNotes = 100;
        $usersIds = array();
        $statusIds = array();
        $faker = Faker::create();

        /* Create roles */
        $adminRole = Role::create(['name' => 'admin']);
        RoleHierarchy::create([
            'role_id' => $adminRole->id,
            'hierarchy' => 1,
        ]);

        $userRole = Role::create(['name' => 'user']);
        RoleHierarchy::create([
            'role_id' => $userRole->id,
            'hierarchy' => 2,
        ]);

        $guestRole = Role::create(['name' => 'guest']);
        RoleHierarchy::create([
            'role_id' => $guestRole->id,
            'hierarchy' => 3,
        ]);

        $auditoria = Role::create(['name' => 'auditoria']);
        RoleHierarchy::create([
            'role_id' => $auditoria->id,
            'hierarchy' => 4
        ]);

        $server_publicRole = Role::create(['name' => 'servidor_publico']);
        RoleHierarchy::create([
            'role_id' => $server_publicRole->id,
            'hierarchy' => 5
        ]);

        $witnessRole = Role::create(['name' => 'testigo']);
        RoleHierarchy::create([
            'role_id' => $witnessRole->id,
            'hierarchy' => 6
        ]);

        $president = Role::create(['name' => 'presidente']);
        RoleHierarchy::create([
            'role_id' => $president->id,
            'hierarchy' => 7
        ]);

        $comptroller = Role::create(['name' => 'contraloria']);
        RoleHierarchy::create([
            'role_id' => $comptroller->id,
            'hierarchy' => 8
        ]);


        $treasury = Role::create(['name' => 'tesoreria']);
        RoleHierarchy::create([
            'role_id' => $treasury->id,
            'hierarchy' => 9
        ]);

        $receivership = Role::create(['name' => 'sindicatura']);
        RoleHierarchy::create([
            'role_id' => $receivership->id,
            'hierarchy' => 10
        ]);

        $publicWork = Role::create(['name' => 'obra_publica']);
        RoleHierarchy::create([
            'role_id' => $publicWork->id,
            'hierarchy' => 11
        ]);

        $otherDependency = Role::create(['name' => 'demas_depedencias']);
        RoleHierarchy::create([
            'role_id' => $otherDependency->id,
            'hierarchy' => 12
        ]);

        /*  insert status  */
        DB::table('status')->insert([
            'name' => 'ongoing',
            'class' => 'badge badge-pill badge-primary',
        ]);
        array_push($statusIds, DB::getPdo()->lastInsertId());
        DB::table('status')->insert([
            'name' => 'stopped',
            'class' => 'badge badge-pill badge-secondary',
        ]);
        array_push($statusIds, DB::getPdo()->lastInsertId());
        DB::table('status')->insert([
            'name' => 'completed',
            'class' => 'badge badge-pill badge-success',
        ]);
        array_push($statusIds, DB::getPdo()->lastInsertId());
        DB::table('status')->insert([
            'name' => 'expired',
            'class' => 'badge badge-pill badge-warning',
        ]);
        array_push($statusIds, DB::getPdo()->lastInsertId());
        /*  insert users   */
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'menuroles' => 'user,admin'
        ]);
        $user->assignRole('admin');
        $user->assignRole('user');

        //Insert Adan
        $user = User::create([
            'name' => 'Adan de Jesus',
            'email' => 'a@hotmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'menuroles' => 'user,auditoria'
        ]);
        $user->assignRole('auditoria');
        $user->assignRole('user');


        for($i = 0; $i<$numberOfUsers; $i++){
            $user = User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'menuroles' => 'user'
            ]);
            $user->assignRole('user');
            array_push($usersIds, $user->id);
        }
        /*  insert notes  */
        for($i = 0; $i<$numberOfNotes; $i++){
            $noteType = $faker->word();
            if(random_int(0,1)){
                $noteType .= ' ' . $faker->word();
            }
            DB::table('notes')->insert([
                'title'         => $faker->sentence(4,true),
                'content'       => $faker->paragraph(3,true),
                'status_id'     => $statusIds[random_int(0,count($statusIds) - 1)],
                'note_type'     => $noteType,
                'applies_to_date' => $faker->date(),
                'users_id'      => $usersIds[random_int(0,$numberOfUsers-1)]
            ]);
        }
    }
}
