<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews') ->insert([
            [
                'title' => 'Slight disappointment',
                'text' => 'There is a flaw that I just can\'t understand, nor tolerate.
                           THE MAXIMUM VOLUME IS LOW!
                           Only points in favor are style and comfort. But it wasn\'t what I personally was looking for',
                'rating' =>'3',
                'product_id' => '1'
            ],
            [
                'title' => 'Fantastic headphones',
                'text' => 'For the price they have, they are the best purchase you can make!
                The cable is very durable and the audio is clear, they are comfortable to wear and not overly
                warmed the ears, which other products I tried do.
                Recommended to several people and all were enthusiastic about this product
                After 2 years they have not yet given me a problem and feels very good!',
                'rating' =>'5',
                'product_id' => '1'
            ],
            [
                'title' => 'Excellent',
                'text' => 'Very good audio quality compared to the price paid. they are insulating and
                emit a very clean sound. the volume at most does not break the eardrums, it does not feel muffled.',
                'rating' =>'5',
                'product_id' => '2'
            ],
            [
                'title' => 'Excellent',
                'text' => 'Really a great pc, fast in ignition and doing multiple things at once.
                Large screen from which you can see good and good quality of the audio of the speakers.
                It tends to heat up when used when attached to the charge, but other than that it\'s great for anything
                you want to do.',
                'rating' =>'5',
                'product_id' => '3'
            ],
            [
                'title' => 'Good phone at an honest price!!',
                'text' => ' The battery really lasts a lot even with many hours of screen.
                Very fluid and with a nice screen. Cameras, for the price of the phone can be called great.
                Upgrade to Android 10 expected. I recommend this phone to those who make common use and need a lot
                of battery',
                'rating' =>'5',
                'product_id' => '5'
            ],
            [
                'title' => 'I expected more',
                'text' => 'As for display and speed it is a fantastic cell phone, too bad that it has several flaws:
                first it really weighs a lot holding it, it has the headphone jack at the bottom which is very
                uncomfortable both to keep it in your pocket and to make video calls, the notification LED is almost
                invisible and monochrome, in addition the front camera in low light conditions applies a horrible yellow
                filter that you can not remove in any way.',
                'rating' =>'2',
                'product_id' => '5'
            ]
        ]);
    }
}
