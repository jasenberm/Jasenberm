<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPermisorol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisorol', function (Blueprint $table) {
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id', 'fk_permisorol_rol')
                ->references('id')
                ->on('rol')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedInteger('permiso_id');
            $table->foreign('permiso_id', 'fk_permisorol_permiso')
                ->references('id')
                ->on('permiso')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisorol');
    }
}
