<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Nilai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_nilai' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_siswa' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'id_pelajaran' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'nilai' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',  // nilai dengan maksimal 3 digit sebelum koma dan 2 digit setelah koma, misal 100.00
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
        $this->forge->addKey('id_nilai', true);

        // Foreign Keys (Optional: Jika id_siswa dan id_pelajaran terkait dengan tabel lain)
        $this->forge->addForeignKey('id_siswa', 'siswa', 'id_siswa', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_pelajaran', 'mata_pelajaran', 'id_pelajaran','CASCADE', 'CASCADE');

        // Create table
        $this->forge->createTable('nilai');
    }

    public function down()
    {
        // Drop the table
        $this->forge->dropTable('nilai');
    }
}
