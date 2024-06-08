<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('imie');
            $table->string('nazwisko');
            $table->date('data_urodzenia');
            $table->string('adres_do_korespondencji');
            $table->string('numer_telefonu_prywatny');
            $table->string('numer_telefonu_sluzbowy');
            $table->integer('id_biura');
            $table->string('stanowisko');
            $table->timestamp('data_rozpoczecia_pracy');
            $table->integer('wyplata');
            $table->string('email');
            $table->timestamps();
        });

        DB::table('employees')->insert([
            [
                'imie' => 'John',
                'nazwisko' => 'Doe',
                'data_urodzenia' => '1990-08-15',
                'adres_do_korespondencji' => '123 Main St, Anytown, USA',
                'numer_telefonu_prywatny' => '+1234567890',
                'numer_telefonu_sluzbowy' => '+9876543210',
                'id_biura' => 1,
                'stanowisko' => 'Software Engineer',
                'data_rozpoczecia_pracy' => '2020-01-15 09:00:00',
                'wyplata' => 70000,
                'email' => 'john.doe@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'imie' => 'Jane',
                'nazwisko' => 'Smith',
                'data_urodzenia' => '1985-05-20',
                'adres_do_korespondencji' => '456 Elm St, Othertown, USA',
                'numer_telefonu_prywatny' => '+1987654321',
                'numer_telefonu_sluzbowy' => '+1234509876',
                'id_biura' => 2,
                'stanowisko' => 'Marketing Manager',
                'data_rozpoczecia_pracy' => '2018-06-10 08:30:00',
                'wyplata' => 80000,
                'email' => 'jane.smith@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'imie' => 'Michael',
                'nazwisko' => 'Johnson',
                'data_urodzenia' => '1982-12-10',
                'adres_do_korespondencji' => '789 Maple St, Anycity, USA',
                'numer_telefonu_prywatny' => '+1122334455',
                'numer_telefonu_sluzbowy' => '+9988776655',
                'id_biura' => 3,
                'stanowisko' => 'HR Specialist',
                'data_rozpoczecia_pracy' => '2015-03-20 10:45:00',
                'wyplata' => 60000,
                'email' => 'michael.johnson@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
