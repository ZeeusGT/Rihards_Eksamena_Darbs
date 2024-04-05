<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('Song_Name');
            $table->string('Artists_Name');
            $table->string('Songs_Genre');
            $table->string('Files_Name');
            $table->integer('Owners_ID');
            $table->timestamps();
        });

        DB::table('songs')->insert([
            [
                'Song_Name' => 'Help Yourself', 'Artists_Name' => 'Unknown',
                'Songs_Genre' => 'Phonk', 'Files_Name' => '1.mp3',
                'Owners_ID' => 1,
            ],
            [
                'Song_Name' => 'Intelligency', 'Artists_Name' => 'August',
                'Songs_Genre' => 'Pop', 'Files_Name' => '2.mp3',
                'Owners_ID' => 1,
            ],
            [
                'Song_Name' => 'Mr. Rager', 'Artists_Name' => 'Kid Cudi',
                'Songs_Genre' => 'Hip hop / Rap', 'Files_Name' => '3.mp3',
                'Owners_ID' => 1,
            ],
            [
                'Song_Name' => 'Change', 'Artists_Name' => 'Change',
                'Songs_Genre' => 'Hip hop / Rap', 'Files_Name' => '4.mp3',
                'Owners_ID' => 1,
            ],
            [
                'Song_Name' => 'Spaceship', 'Artists_Name' => 'Carti',
                'Songs_Genre' => 'Rock', 'Files_Name' => '5.mp3',
                'Owners_ID' => 1,
            ],
            [
                'Song_Name' => 'Swang', 'Artists_Name' => 'Rae Sremmurd',
                'Songs_Genre' => 'Hip hop', 'Files_Name' => '6.mp3',
                'Owners_ID' => 1,
            ],
            [
                'Song_Name' => 'Change', 'Artists_Name' => 'Change',
                'Songs_Genre' => 'Change', 'Files_Name' => '7.mp3',
                'Owners_ID' => 1,
            ],
            [
                'Song_Name' => 'Odin X', 'Artists_Name' => 'Morgenshtern',
                'Songs_Genre' => 'Rap', 'Files_Name' => '8.mp3',
                'Owners_ID' => 1,
            ],
            [
                'Song_Name' => 'Vot Tak', 'Artists_Name' => 'Morgenshtern',
                'Songs_Genre' => 'Rap', 'Files_Name' => '9.mp3',
                'Owners_ID' => 1,
            ],
            [
                'Song_Name' => 'No Idea', 'Artists_Name' => 'Don Toliver',
                'Songs_Genre' => 'Hip hop / Rap', 'Files_Name' => '10.mp3',
                'Owners_ID' => 1,
            ],
        
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
