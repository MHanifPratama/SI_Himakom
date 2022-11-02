<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Biodata extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_anggota' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
                
            ],
            'nama_anggota' => [
                'type'       => 'VARCHAR',
                'constraint' => 1000,
            ],
            'npm' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'id_bidang' => [
                'type'     => 'INT',
                'constraint' => 20,
                'unsigned'       => true,
            ],
            'id_prodi' => [
                'type'     => 'INT',
                'constraint' => 20,
                'unsigned'       => true,
            ],
            'id_jabatan' => [
                'type'     => 'INT',
                'constraint' => 20,
                'unsigned'       => true,
                
            ],
            'id_status_kepanitiaan' => [
                'type'     => 'INT',
                'constraint' => 20,
                'unsigned'       => true,
                
            ],
            'periode' => [
                'type'     => 'YEAR',
                'constraint' => 5,
            ],
        ]);
        $this->forge->addKey('id_anggota', true);
        
        // $db = db_connect();
        $this->forge->addForeignKey('id_bidang', 'bidang', 'id_bidang', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_prodi', 'prodi', 'id_prodi', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_jabatan', 'jabatan', 'id_jabatan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_status_kepanitiaan', 'kepanitiaan', 'id_status_kepanitiaan', 'CASCADE', 'CASCADE');
        $this->forge->createTable('biodata');
        // $db->query('ALTER TABLE `biodata` ADD CONSTRAINT `jabatan_ibfk` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan`(`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE');
        
        // $this->forge->addForeignKey('id_bidang', 'bidang', 'id_bidang');

    }

    public function down()
    {
        $this->forge->dropTable('biodata');
    }
}
