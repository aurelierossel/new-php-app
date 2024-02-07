<?php

require_once '../html/index.php';

class Test extends PHPUnit\Framework\TestCase
{
 public function testOutput()
 {
    // Capture the output of index.php
    ob_start();
    include '../html/index.php';
    $output = ob_get_clean();

    // Assert that the output is "My new php project with Docker"
    $this->assertEquals("My updated new php project with Docker", $output);
 }
}
?>