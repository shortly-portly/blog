<?php
namespace Database\Seeders;

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
        //     $user = User::factory()->create([
        //     ]);

        //     Post::factory(10)->create([
        //         'user_id' => $user->id
        //     ]);
        // }

        User::factory()
            ->count(9)
            ->hasPosts(9)
            ->create();
    }
}
