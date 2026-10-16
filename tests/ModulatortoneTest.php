<?php
/**
 * Tests for ModulatorTone
 */

use PHPUnit\Framework\TestCase;
use Modulatortone\Modulatortone;

class ModulatortoneTest extends TestCase {
    private Modulatortone $instance;

    protected function setUp(): void {
        $this->instance = new Modulatortone(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Modulatortone::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
