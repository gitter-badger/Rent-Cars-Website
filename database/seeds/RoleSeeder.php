<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\models\Roles::create(['name' => "Admin",'description'=> "User that have all permissions in the system"]);
        \App\models\Roles::create(['name' => "Partner",'description'=> "User that have a car that he wants to rent it"]);
        \App\models\Roles::create(['name' => "Employee",'description'=> "User that handle rents and invoices in the system"]);
        \App\models\Roles::create(['name' => "Customer",'description'=> "User that rents the car in the system"]);
    }
}
