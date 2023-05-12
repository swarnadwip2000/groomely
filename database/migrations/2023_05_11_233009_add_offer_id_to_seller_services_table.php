<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOfferIdToSellerServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seller_services', function (Blueprint $table) {
            $table->foreignId('offer_id')->after('service_id')->nullable()->references('id')->on('offers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seller_services', function (Blueprint $table) {
            $table->dropForeign('seller_services_offer_id_foreign');
            $table->dropColumn('offer_id');
        });
    }
}
