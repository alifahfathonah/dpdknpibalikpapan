<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_organisasi extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idorg' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'namaorg' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'jnsorg' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('idorg', TRUE);
        $this->dbforge->create_table('organisasi');
    }

    public function down()
    {
        $this->dbforge->drop_table('organisasi');
    }

}

/* End of file create_organisasi.php */
