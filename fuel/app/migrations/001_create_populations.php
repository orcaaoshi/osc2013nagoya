<?php

namespace Fuel\Migrations;

class Create_populations
{
	public function up()
	{
		\DBUtil::create_table('populations', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'pref' => array('constraint' => 10, 'type' => 'varchar'),
			'city' => array('constraint' => 10, 'type' => 'varchar'),
			'pop' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('populations');
	}
}