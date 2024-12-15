<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        //maju
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'int',
                    'auto_increment' => true,
                ],
                'username' => [
                    'type' => 'varchar',
                    'constraint' => 200,
                ]
            ]
        );
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //rollback
        $this->forge->dropTable('users');
    }
}
