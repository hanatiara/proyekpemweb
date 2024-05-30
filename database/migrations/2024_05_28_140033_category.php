<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id('id_category');
            $table->string('title');
            $table->integer('price');
            $table->string('location');
            $table->string('image');
            $table->string('tags');
        });

        DB::table('category')->insert(
            array(
                'title' => 'Malang Night Paradise',
                'price' => '90000',
                'location' => 'Malang',
                'image' => 'mpl.png',
                'tags' => 'terbaru'
            )
        );
        DB::table('category')->insert(
            array(
                'title' => 'Surabaya North Quay',
                'price' => '10000',
                'location' => 'Surabaya',
                'image' => 'snq.jpg',
                'tags' => 'terbaru'
            )
        );
        DB::table('category')->insert(
            array(
                'title' => 'De Djawatan Benculuk',
                'price' => '7500',
                'location' => 'Banyuwangi',
                'image' => 'ddb.jpg',
                'tags' => 'terbaru'
            )
        );
        DB::table('category')->insert(
            array(
                'title' => 'The Onsen Hot Spring Resort',
                'price' => '50000',
                'location' => 'Batu',
                'image' => 'to.jpg',
                'tags' => 'terbaru'
            )
        );
        DB::table('category')->insert(
            array(
                'title' => 'Bromo Tengger Semeru',
                'price' => '29000',
                'location' => 'Malang',
                'image' => 'bts.jpg',
                'tags' => 'terpopuler'
            )
        );
        DB::table('category')->insert(
            array(
                'title' => 'Pantai Goa China',
                'price' => '15000',
                'location' => 'Malang',
                'image' => 'pgc.jpg',
                'tags' => 'terpopuler'
            )
        );
        DB::table('category')->insert(
            array(
                'title' => 'Air Terjun Coban Rondo',
                'price' => '20000',
                'location' => 'Batu',
                'image' => 'cr.jpg',
                'tags' => 'terpopuler'
            )
        );
        DB::table('category')->insert(
            array(
                'title' => 'Taman Selecta',
                'price' => '50000',
                'location' => 'Batu',
                'image' => 'ts.jpg',
                'tags' => 'terpopuler'
            )
        );
        DB::table('category')->insert(
            array(
                'title' => 'Kawah Ijen',
                'price' => '50000',
                'location' => 'Banyuwangi',
                'image' => 'ki.jpg',
                'tags' => 'terpopuler'
            )
        );
        DB::table('category')->insert(
            array(
                'title' => 'Pantai Pulau Merah',
                'price' => '10000',
                'location' => 'Banyuwangi',
                'image' => 'ppm.jpg',
                'tags' => 'terpopuler'
            )
        );
        DB::table('category')->insert(
            array(
                'title' => 'Pantai Wedi Ireng',
                'price' => '7500',
                'location' => 'Banyuwangi',
                'image' => 'pwi.jpg',
                'tags' => 'terpopuler'
            )
        );
        DB::table('category')->insert(
            array(
                'title' => 'Gili Ketapang',
                'price' => '10000',
                'location' => 'Probolinggo',
                'image' => 'gk.jpg',
                'tags' => 'terpopuler'
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
