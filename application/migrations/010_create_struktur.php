<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_struktur extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idstrktr' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'orgid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            'namastrktr' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'jbtnstrktr' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'gbrstrktr' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('idstrktr', TRUE);
        $this->dbforge->create_table('struktur');
    }

    public function down()
    {
        $this->dbforge->drop_table('struktur');
    }

}

/* End of file create_struktur.php */
