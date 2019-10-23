<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_susunan extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idssn' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'orgid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ),
            'susunssn' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('idssn', TRUE);
        $this->dbforge->create_table('susunan');
    }

    public function down()
    {
        $this->dbforge->drop_table('susunan');
    }

}

/* End of file create_susunan.php */
