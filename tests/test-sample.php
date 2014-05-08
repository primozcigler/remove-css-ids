<?php

class RemoveCssIDsTest extends WP_UnitTestCase {

	function testSample() {

		$this->assertEquals(
			'<link href="abc.css" />',
			remove_style_tag_id( '<link id="krneki-css" href="abc.css" />' )
		);

		$this->assertEquals(
			'<link href="abc.css" />',
			remove_style_tag_id( '<link href="abc.css" />' )
		);

		$this->assertEquals(
			'',
			remove_style_tag_id( '' )
		);

		$this->assertEquals(
			"<link href='abc.css' />",
			remove_style_tag_id( "<link id='krneki-css' href='abc.css' />" )
		);
	}
}

