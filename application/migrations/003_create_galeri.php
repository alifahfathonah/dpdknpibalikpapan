<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_galeri extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idglr' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'namaglr' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'gbrglr' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $this->dbforge->add_key('idglr', TRUE);
        $this->dbforge->create_table('galeri');
    }

    public function down()
    {
        $this->dbforge->drop_table('galeri');
    }
}

/* End of file create_galeri.php */
