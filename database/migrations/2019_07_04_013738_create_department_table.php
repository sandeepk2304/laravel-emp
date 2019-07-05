<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->tinyInteger('status');
            $table->timestamps();
        });
        //insert data here
        DB::table('department')->insert(
                [
                    'name' => 'Accounting',
                    'name' => 'Research',
                    'name' => 'Sales',
                    'name' => 'Operations',
                    'name' => 'Tech',
                ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department');
    }
}
