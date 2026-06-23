<?php

use App\Models\Setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Setting::create([
            'key' => 'site_name',
            'label' => 'Site Name',
            'value' => 'Portofolio Hanif',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => 'Address',
            'label' => 'My Address',
            'value' => 'Jl. Sadewo no. 29 Brotonegaran Ponorogo',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => 'phone',
            'label' => 'My Phone Number',
            'value' => '0123456789',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => 'email',
            'label' => 'My Email',
            'value' => 'hanif@example.com',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => 'github',
            'label' => 'My GitHub',
            'value' => 'https://github.com/kenip200',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => 'site_description',
            'label' => 'Site Description',
            'value' => 'Thasil tugas portofolio hanif',
            'type' => 'text',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
