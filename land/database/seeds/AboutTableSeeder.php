<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('about')->insert([
            [
                'name'=>'<h4>2009-2011</h4><h4 class="subheading">Our Humble Beginnings</h4>',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
                'image'=>'about/1.jpg',
            ],
            [
                'name'=>'<h4>March 2011</h4><h4 class="subheading">An Agency is Born</h4>',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
                'image'=>'about/2.jpg',
            ],
            [
                'name'=>'<h4>December 2012</h4><h4 class="subheading">Transition to Full Service</h4>',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
                'image'=>'about/3.jpg',
            ],
            [
                'name'=>'<h4>July 2014</h4><h4 class="subheading">Phase Two Expansion</h4>',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
                'image'=>'about/4.jpg',
            ],
        ]);
    }
}
