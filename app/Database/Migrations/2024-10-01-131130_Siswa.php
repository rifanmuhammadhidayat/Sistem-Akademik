<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nis' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'kelas' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'jenis_kelamin' => [
                'type'       => 'ENUM',
                'constraint' => ['L', 'P'],
                'default'    => 'L',
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
        $this->forge->addKey('id_siswa', true);

        // Create table
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        // Drop the table
        $this->forge->dropTable('siswa');
    }
}
