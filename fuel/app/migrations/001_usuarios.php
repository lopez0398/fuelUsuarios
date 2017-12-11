<?php
namespace Fuel\Migrations;

class usuarios
{

    function up()
    {
        \DBUtil::create_table('usuarios2', array(
            'id' => array('type' => 'int', 'constraint' => 5, 'auto_incremental'=> true ),
            'name' => array('type' => 'varchar', 'constraint' => 100),
            'password' => array('type' => 'varchar', 'constraint' => 100),
        ), array('id'));
    }


    function down()
    {
       \DBUtil::drop_table('usuarios2');
    }
}