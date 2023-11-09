<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Models\Permission;
use Carbon\Carbon;
use App\Http\Models\Role;
use DB;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = config('permissions');

        foreach ($permissions as $key => $value) {
            foreach($value as $key1 => $value1){
                $permission1 = $value1;
                    $data = [
                        'name' => $permission1['name'],
                        'displayname' => $permission1['displayname'],
                        'discription' => $permission1['discription'],
                        'guard_name' => 'web',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                    DB::table('permissions')
                    ->updateOrInsert(['name'=>$data['name']],$data);
            }
        }


    }



    }

