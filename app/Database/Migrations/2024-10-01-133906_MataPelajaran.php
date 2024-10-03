<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MataPelajaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pelajaran' => [
                'type' =>'INT',
                'constraint' => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pelajaran' => [
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
        $this->forge->addKey('id_pelajaran', true);

        // Create table
        $this->forge->createTable('mata_pelajaran');
    }

    public function down()
    {
        // Drop the table
        $this->forge->dropTable('mata_pelajaran');
    }
}
