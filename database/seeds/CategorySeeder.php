<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $items = [
            ['name' => 'Hairdressers', 'description' => '' ],
            ['name' => 'Beauty salons', 'description' => '' ],
            ['name' => 'Crafts', 'description' => '' ],
            ['name' => 'Arts', 'description' => '' ],
            ['name' => 'Sports groups (dancing, boxing, swimming, yoga etc.)', 'description' => '' ],
            ['name' => 'Hobby & entertainment centers (bowlings, billiards, board games, karaoke bars, choirs, vocal teachers etc.)', 'description' => '' ],
            ['name' => 'Coaching, nutrition, personal trainers', 'description' => '' ],
        ];

        foreach ($items as $item) {
            Category::updateOrCreate($item);
        }
    }
}
