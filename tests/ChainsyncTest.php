<?php
/**
 * Tests for ChainSync
 */

use PHPUnit\Framework\TestCase;
use Chainsync\Chainsync;

class ChainsyncTest extends TestCase {
    private Chainsync $instance;

    protected function setUp(): void {
        $this->instance = new Chainsync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainsync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
