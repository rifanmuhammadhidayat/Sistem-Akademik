<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Guru extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_guru' => [
                'type' =>'INT',
                'constraint' => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_guru' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'mata_pelajaran' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);
        // Primary Key
        $this->forge->addKey('id_guru', true);

        // Create table
        $this->forge->createTable('guru');
    }

    public function down()
    {
        // Drop the table
        $this->forge->dropTable('guru');
    }
}
