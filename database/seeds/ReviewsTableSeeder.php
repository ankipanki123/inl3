<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
          [
            "name" => "Pelle",
            "comment" => "sämst telefon ever",
            "grade" => 10,
            "product_id" => 1
          ],
          [
            "name" => "Kalle",
            "comment" => "mycet dålig",
            "grade" => 7,
            "product_id" => 2
          ],
          [
            "name" => "Karl",
            "comment" => "sämst banan ",
            "grade" => 5,
            "product_id" => 1
          ],
          [
            "name" => "Jonas",
            "comment" => "kanon",
            "grade" => 3,
            "product_id" => 3
          ]

        ]);
    }
}
