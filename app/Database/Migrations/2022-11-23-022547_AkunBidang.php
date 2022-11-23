<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AkunBidang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_akun_bidang' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
                
            ],
            'id_bidang' => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'       => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 1000,
            ],
            'password' => [
                'type'     => 'VARCHAR',
                'constraint' => 1000,
            ],
        ]);
        $this->forge->addForeignKey('id_bidang', 'bidang', 'id_bidang', 'CASCADE', 'CASCADE');
        $this->forge->addKey('id_akun_bidang', true);
        $this->forge->createTable('akun_bidang');
    }

    public function down()
    {
        $this->forge->dropTable('akun_bidang');
    }
}
