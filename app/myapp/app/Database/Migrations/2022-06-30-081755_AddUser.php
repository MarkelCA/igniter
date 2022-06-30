<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

// Generated using Command-Line Tool...
class AddUser extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'mail' => [
                'type' => 'TEXT',
                'constraint' => '100',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'date'
            ],
            'updated_at' => [
                'type' => 'date'
            ],
            'deleted_at' => [
                'type' => 'date'
            ]
        ]);
        $this->forge->addKey('username', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
