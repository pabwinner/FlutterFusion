<?php
/**
 * Tests for FlutterFusion
 */

use PHPUnit\Framework\TestCase;
use Flutterfusion\Flutterfusion;

class FlutterfusionTest extends TestCase {
    private Flutterfusion $instance;

    protected function setUp(): void {
        $this->instance = new Flutterfusion(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Flutterfusion::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
