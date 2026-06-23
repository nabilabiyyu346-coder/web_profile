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
            'key' => 'site_title',
            'label' => 'Site Title',
            'value' => 'My Website',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => 'location',
            'label' => 'alamat',
            'value' => 'JL. sadewo no.29',
            'type' => 'textarea',
        ]);

        Setting::create([
            'key' => 'email',
            'label' => 'Email',
            'value' => 'haniffikr@gmail.com',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => 'site_description',
            'label' => 'Site Description',
            'value' => 'tugas portofolio',
            'type' => 'longtext',
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
