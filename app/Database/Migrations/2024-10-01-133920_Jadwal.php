<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jadwal' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_pelajaran' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'hari' => [
                'type'       => 'ENUM',
                'constraint' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
                'default'    => 'Senin',
            ],
            'jam' => [
                'type'       => 'TIME',  // Format jam HH:MM:SS
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
        $this->forge->addKey('id_jadwal', true);

        // Foreign Key (Optional: Jika id_pelajaran terkait dengan tabel lain)
        $this->forge->addForeignKey('id_pelajaran', 'mata_pelajaran', 'id_pelajaran', 'CASCADE', 'CASCADE');

        // Create table
        $this->forge->createTable('jadwal');
    }

    public function down()
    {
        // Drop the table
        $this->forge->dropTable('jadwal');
    }
}
