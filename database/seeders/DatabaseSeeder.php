<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Role;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = Role::factory()->count(10)->create();

        foreach ($roles as $role) {
            $person = Person::factory()->create([
                'role_id' => $role->id,
            ]);

            Task::factory()->count(10)->create([
                'person_id' => $person->id,
            ]);
        }
    }
}
