<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		//CompanyName=Company+Name&CompanyStreet=133+sdfl&CompanyCity=City&CompanyZip=45620&CompanyDescription=description
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
			$table->string("name");
			$table->string("street");
			$table->string("city");
			$table->string("state");
			$table->integer("zip");
			$table->longText("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
