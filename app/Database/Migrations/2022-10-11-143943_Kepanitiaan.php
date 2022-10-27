<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kepanitiaan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_status_kepanitiaan' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_kepanitiaan' => [
                'type'       => 'VARCHAR',
                'constraint' => 1000,
            ],
            'id_bidang' => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'       => true,
            ],
            'jumlah_panitia' => [
                'type'           => 'INT',
                'constraint'     => 150,
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id_status_kepanitiaan', true);
        $this->forge->createTable('kepanitiaan');
    }

    public function down()
    {
        $this->forge->dropTable('kepanitiaan');
    }
}
