<?php
/**
 * Tests for CloudJolt
 */

use PHPUnit\Framework\TestCase;
use Cloudjolt\Cloudjolt;

class CloudjoltTest extends TestCase {
    private Cloudjolt $instance;

    protected function setUp(): void {
        $this->instance = new Cloudjolt(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cloudjolt::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
