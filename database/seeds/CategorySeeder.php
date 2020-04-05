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
            [ 'id' => 1,'name' => 'Hairdressers', 'description' => '' ],
            [ 'id' => 2,'name' => 'Beauty salons', 'description' => '' ],
            [ 'id' => 3,'name' => 'Crafts', 'description' => '' ],
            [ 'id' => 4,'name' => 'Arts', 'description' => '' ],
            [ 'id' => 5,'name' => 'Sports groups', 'description' => '' ],
            [ 'id' => 6,'name' => 'Hobby & entertainment centers', 'description' => '' ],
            [ 'id' => 7,'name' => 'Coaching, nutrition, personal trainers', 'description' => '' ],
        ];

        foreach ($items as $item) {
            Category::updateOrCreate($item);
        }
    }
}
