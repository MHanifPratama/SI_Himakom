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
                'constraint'     => 5,
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
                'constraint' => 5,
            ],
            'id_prodi' => [
                'type'     => 'INT',
                'constraint' => 5,
            ],
            'id_jabatan' => [
                'type'     => 'INT',
                'constraint' => 5,
            ],
            'periode' => [
                'type'     => 'YEAR',
                'constraint' => 5,
            ],
        ]);
        $this->forge->addKey('id_anggota', true);
        $this->forge->createTable('biodata');
    }

    public function down()
    {
        $this->forge->dropTable('biodata');
    }
}
