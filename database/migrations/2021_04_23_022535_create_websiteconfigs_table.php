<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteconfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websiteconfigs', function (Blueprint $table) {
            $table->id();

            $table->string('config_key')->unique();
            $table->text('config_value')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });
        $data_keys = ['SHOP_NAME','LOGO_IMAGE','ADDRESS','PHONE_NUMBER','EMAIL','FACEBOOK','YOUTUBE','INSTAGRAM'];
        foreach ($data_keys as $data_key) {
            DB::table('websiteconfigs')->insert([
                'config_key' => $data_key,
                'config_value'=>'',
            ]);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websiteconfigs');
    }


}
