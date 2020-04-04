<?php

use Illuminate\Database\Seeder;
use App\Business;

class BusinessSeeder extends Seeder
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
            [
                'name' => 'Imperial Salon',
                'location_id' => 1,
                'category_id' => 1,
                'description' => 'We are making your hair awesome',
                'service' => 'Haircut (man)',
                'price' => 180
            ],
            [
                'name' => 'Incognito Studio',
                'location_id' => 1,
                'category_id' => 1,
                'description' => 'We\'ll cut you - incognito',
                'service' => 'Haircut (woman)',
                'price' => 280
            ],
            [
                'name' => 'Frisør Kruse',
                'location_id' => 1,
                'category_id' => 1,
                'description' => 'Vi er beder nu!',
                'service' => 'Beardcut',
                'price' => 100
            ],
            [
                'name' => 'Classique Nails & Beauty',
                'location_id' => 1,
                'category_id' => 2,
                'description' => 'Nails, nails, nails',
                'service' => 'Manicure',
                'price' => 300
            ],
            [
                'name' => 'Beauty Boxen',
                'location_id' => 1,
                'category_id' => 2,
                'description' => 'Beauty salon - just for your beauty',
                'service' => 'Pedicure',
                'price' => 250
            ],
            [
                'name' => 'Nyah-Beauty',
                'location_id' => 1,
                'category_id' => 2,
                'description' => 'Nyah - yeah!',
                'service' => 'Yeah service!',
                'price' => 240
            ],
            [
                'name' => 'Urban Living',
                'location_id' => 1,
                'category_id' => 3,
                'description' => 'Wanna make all Copenhageners envy? Come visit us!',
                'service' => 'Envy dealer',
                'price' => 300
            ],
            [
                'name' => 'Niedzeiella & Friends',
                'location_id' => 1,
                'category_id' => 3,
                'description' => 'Make your home hyggelig again',
                'service' => 'Hyggelig painting combo',
                'price' => 240
            ],
            [
                'name' => 'Festbutikken',
                'location_id' => 1,
                'category_id' => 3,
                'description' => 'Sparkle your festival with us',
                'service' => 'A viking helmet',
                'price' => 50
            ],
            [
                'name' => 'Graffiti / Street Art',
                'location_id' => 1,
                'category_id' => 4,
                'description' => 'Come and see the street art - alone, when it ends',
                'service' => 'Quarantine tour',
                'price' => 50
            ],
            [
                'name' => 'Galleri Tom Christoffersen',
                'location_id' => 1,
                'category_id' => 4,
                'description' => 'We are awesome at art',
                'service' => 'Posters',
                'price' => 20
            ],
            [
                'name' => 'Soul Craft Sisters',
                'location_id' => 1,
                'category_id' => 4,
                'description' => 'We are sisters, and we are artsy',
                'service' => 'Your portrait',
                'price' => 150
            ],
            [
                'name' => 'Crossfit Copenhagen',
                'location_id' => 1,
                'category_id' => 5,
                'description' => 'Crossfit yourself',
                'service' => 'Online course',
                'price' => 120
            ],
            [
                'name' => 'White Sport',
                'location_id' => 1,
                'category_id' => 5,
                'description' => 'Learn how to play tennis with us',
                'service' => 'Home online course',
                'price' => 100
            ],
            [
                'name' => 'Rumble Sports',
                'location_id' => 1,
                'category_id' => 5,
                'description' => 'Boxing is in our hears',
                'service' => 'Boxing gloves',
                'price' => 100
            ],
            [
                'name' => 'CPH Bowling & Lounge',
                'location_id' => 1,
                'category_id' => 6,
                'description' => 'Bowl bowl bowl',
                'service' => 'A 2-hour round of bowling',
                'price' => 200
            ],
            [
                'name' => 'Bastard Cafe',
                'location_id' => 1,
                'category_id' => 6,
                'description' => 'Everybody knows us',
                'service' => 'Yearly membership',
                'price' => 100
            ],
            [
                'name' => 'Creative Space',
                'location_id' => 1,
                'category_id' => 6,
                'description' => 'Unleash your creativity',
                'service' => 'Paint',
                'price' => 150
            ],
            [
                'name' => 'Joe - the coach',
                'location_id' => 1,
                'category_id' => 7,
                'description' => 'I can make you fit - from home',
                'service' => 'Fitness program',
                'price' => 200
            ],
            [
                'name' => 'Nutrinize',
                'location_id' => 1,
                'category_id' => 7,
                'description' => 'Nutrition is important, so are you,',
                'service' => '4-week nutrition program',
                'price' => 250
            ],
            [
                'name' => 'Coachingbydane',
                'location_id' => 1,
                'category_id' => 7,
                'description' => 'Life coaching',
                'service' => 'Life-long value coaching program',
                'price' => 400
            ],
            [
                'name' => 'Luxury Beauty Salon ',
                'location_id' => 2,
                'category_id' => 1,
                'description' => 'Luxury hairstyling services ',
                'service' => 'Hairstyling, coloring',
                'price' => 750
            ],
            [
                'name' => 'P.E.R.',
                'location_id' => 2,
                'category_id' => 1,
                'description' => 'Luxury hairstyling services ',
                'service' => 'Hairstyling, coloring',
                'price' => 750
            ],
            [
                'name' => 'Freqenz',
                'location_id' => 2,
                'category_id' => 1,
                'description' => 'GØR KLIPNING HOS DIN FRISØR TIL EN OPLEVELSE',
                'service' => 'Hairstyling, coloring',
                'price' => 500
            ],
            [
                'name' => 'NYCE',
                'location_id' => 2,
                'category_id' => 1,
                'description' => 'New York Cosmetic Experience',
                'service' => 'Hairstyling, coloring',
                'price' => 700
            ],
            [
                'name' => 'Birthe-gleerup',
                'location_id' => 2,
                'category_id' => 1,
                'description' => 'Miljø venlig frisør',
                'service' => 'Hairstyling, coloring',
                'price' => 800
            ],
            [
                'name' => 'Aviva  Clinique',
                'location_id' => 2,
                'category_id' => 2,
                'description' => 'We make you beautiful.',
                'service' => 'Facial masagge ',
                'price' => 350
            ],
            [
                'name' => 'Victoria Beauty ',
                'location_id' => 2,
                'category_id' => 2,
                'description' => 'I care for your face',
                'service' => 'Cleansing treatment ',
                'price' => 300
            ],
            [
                'name' => 'ML Beauty Salon',
                'location_id' => 2,
                'category_id' => 2,
                'description' => 'The brows make the difference',
                'service' => 'Microblending ',
                'price' => 750
            ],
            [
                'name' => 'Cucu Lashes ',
                'location_id' => 2,
                'category_id' => 2,
                'description' => 'Your lashes, my power.',
                'service' => 'Lash extenstion ',
                'price' => 600
            ],
            [
                'name' => 'Maria Nails',
                'location_id' => 2,
                'category_id' => 2,
                'description' => 'Nails to a next level.',
                'service' => 'Manicure',
                'price' => 300
            ],
            [
                'name' => 'City Stoffer & Garn',
                'location_id' => 2,
                'category_id' => 3,
                'description' => 'Find your new material.',
                'service' => 'Materials ',
                'price' => 20
            ],
            [
                'name' => 'Garn og Design ',
                'location_id' => 2,
                'category_id' => 3,
                'description' => 'We know where your red thread is.',
                'service' => 'Knitting thread',
                'price' => 50
            ],
            [
                'name' => 'Formuleret Keramik',
                'location_id' => 2,
                'category_id' => 3,
                'description' => 'Skandinavisk ceramic design',
                'service' => 'Online course',
                'price' => 100
            ],
            [
                'name' => 'Aros',
                'location_id' => 2,
                'category_id' => 4,
                'description' => 'Museum',
                'service' => 'Virtual tour',
                'price' => 50
            ],
            [
                'name' => 'Mosgård',
                'location_id' => 2,
                'category_id' => 4,
                'description' => 'Museum',
                'service' => 'Virtual tour',
                'price' => 51
            ],
            [
                'name' => 'Aarhus Klatreblub',
                'location_id' => 2,
                'category_id' => 5,
                'description' => 'Climb your way. ',
                'service' => 'Climbing personal training',
                'price' => 150
            ],
            [
                'name' => '1900tennis',
                'location_id' => 2,
                'category_id' => 5,
                'description' => 'Hit the ball. ',
                'service' => 'Tennis personal training',
                'price' => 150
            ],
            [
                'name' => 'Spanien',
                'location_id' => 2,
                'category_id' => 5,
                'description' => 'swimming pool',
                'service' => '1 month mebership',
                'price' => 150
            ],
            [
                'name' => 'Brætspil',
                'location_id' => 2,
                'category_id' => 6,
                'description' => 'Board games',
                'service' => 'Drinks gift card',
                'price' => 200
            ],
            [
                'name' => 'Acting for Fun',
                'location_id' => 2,
                'category_id' => 6,
                'description' => 'Acting ',
                'service' => '1 month membership ',
                'price' => 500
            ],
            [
                'name' => 'Fitness institute ',
                'location_id' => 2,
                'category_id' => 7,
                'description' => 'Nutrition and personal training',
                'service' => '20 sessions',
                'price' => 1500
            ],
        ];

        foreach ($items as $item) {
            Business::updateOrCreate($item);
        }
    }
}
