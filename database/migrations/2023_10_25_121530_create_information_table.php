<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    // public function up(): void
    // {
    //     Schema::create('information', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('email');
    //         $table->string('phone');
    //         $table->string('address');
    //         $table->string('github');
    //         $table->string('facebook');
    //         $table->string('whatsapp');
    //         $table->string('linkedin');
    //         $table->string('instagram');
    //         $table->binary('image');
    //         $table->timestamps();
    //     });
    //     DB::table('information')->insert([
    //         'email' => 'mina.saad2255@gmail.com',
    //         'phone' => '(+012) 2793-8783',
    //         'address' => 'Egypt.Cairo.Shubra',
    //         'github' => 'https://cutt.us/5TMRf',
    //         'facebook' => 'https://cutt.us/u38pd',
    //         'whatsapp' => 'https://cutt.us/35GSh',
    //         'linkedin' => 'https://cutt.us/V6fBo',
    //         'instagram' => 'https://cutt.us/0LkY1',
    //         'image' => 'https://2h.ae/sMfr',
    //     ]);
    // }
    public function up(): void
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('github');
            $table->string('facebook');
            $table->string('whatsapp');
            $table->string('pdf')->default('dashboard/assets/imagespdf/c_v.png');
            $table->string('linkedin');
            $table->string('instagram');
            $table->string('image')->default('dashboard/assets/images/information/banner.png'); // Change the data type to string
            $table->timestamps();
        });

        DB::table('information')->insert([
            'email' => 'mina.saad2255@gmail.com',
            'phone' => '(+012) 2793-8783',
            'address' => 'Egypt.Cairo.Shubra',
            'github' => 'https://github.com/Mina-Saad-2022',
            'facebook' => 'https://www.facebook.com/Coveted.Death',
            'whatsapp' => 'https://api.whatsapp.com/send/?phone=201227938783&text=Hi%2C+I%27m+Mina+Saad++%0AI%27d+be+happy+to+talk+to+you&type=phone_number&app_absent=0',
            'linkedin' => 'https://www.linkedin.com/in/mina-sa%C8%9Dd-81850920a/',
            'instagram' => 'https://www.instagram.com/mina__sa3d/',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};