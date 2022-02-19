<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Clear out the relevant tables
        User::truncate();
        Category::truncate();

        $user = User::factory(10)->create();

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
    }
}
