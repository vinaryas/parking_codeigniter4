<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCarsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'brand' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'model' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'year' => [
                'type' => 'YEAR',
            ],
            'rental_rate' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('cars');
    }

    public function down()
    {
        $this->forge->dropTable('cars');
    }
}
