<?php

require_once dirname(__FILE__) . '/../../../lib/crowdflower.php';
require_once dirname(__FILE__) . '/CrowdFlower_AbstractGeneric.php';

/**
 * Test class for CrowdFlower_Worker.
 * Generated by PHPUnit on 2011-03-16 at 16:16:49.
 * @note - You won't be able to use this, as this API is currently only available
 * to CF admins (meaning, employees).
 * It will be opened up at some point in a future release
 */
class CrowdFlower_WorkerTest extends CrowdFlower_AbstractGeneric {

    /**
     * @var CrowdFlower_Worker
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new CrowdFlower_Worker_Proxy($this->key);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    /**
     *
     */
    public function testBonus() {
        $resp = $this->object->bonus($this->unorderedJobID, $this->workerID, 0.01, "Good Job");
        #$this->debug=1;
        $this->_reportInfo(__METHOD__, $resp);
        
        $this->assertEquals(302, $resp['info']['http_code']);

    }

    /**
     * 
     */
    public function testApprove() {

        $resp = $this->object->approve($this->unorderedJobID, $this->workerID);
        #$this->debug=1;
        $this->_reportInfo(__METHOD__, $resp);
        
        $this->assertEquals(404, $resp['info']['http_code']);
    }

    /**
     * 
     */
    public function testReject() {
        $resp = $this->object->reject($this->unorderedJobID, $this->workerID);
        #$this->debug=1;
        $this->_reportInfo(__METHOD__, $resp);
        
        $this->assertEquals(302, $resp['info']['http_code']);
    }

    /**
     * 
     */
    public function testBan() {
        $resp = $this->object->ban($this->unorderedJobID, $this->workerID);
        #$this->debug=1;
        $this->_reportInfo(__METHOD__, $resp);
        
        $this->assertEquals(302, $resp['info']['http_code']);

    }

    /**
     * 
     */
    public function testDeban() {
        $resp = $this->object->deban($this->unorderedJobID, $this->workerID);
        #$this->debug=1;
        $this->_reportInfo(__METHOD__, $resp);
        
        $this->assertEquals(302, $resp['info']['http_code']);
    }

    /**
     * 
     */
    public function testNotify() {
        $resp = $this->object->notify($this->unorderedJobID, $this->workerID, "My Subject", "My Message");
        #$this->debug=1;
        $this->_reportInfo(__METHOD__, $resp);
        
        $this->assertEquals(404, $resp['info']['http_code']);
    }

    /**
     * 
     */
    public function testFlag() {
        $resp = $this->object->flag($this->unorderedJobID, $this->workerID);
        #$this->debug=1;
        $this->_reportInfo(__METHOD__, $resp);
        
        $this->assertEquals(404, $resp['info']['http_code']);
    }

    /**
     * 
     */
    public function testDeflag() {
        $resp = $this->object->deflag($this->unorderedJobID, $this->workerID);
        #$this->debug=1;
        $this->_reportInfo(__METHOD__, $resp);
        
        $this->assertEquals(404, $resp['info']['http_code']);
    }

    public function test_bonusURL() {
        $jobID = 6666;
        $workerID = 7777;
        $expected = $this->object->_baseURL() . '/' . $this->object->getParentResource() . '/'. $jobID
                . '/' . $this->object->getResource() . '/' . $workerID . '/bonus';
    }

    public function test_approveURL() {
        $jobID = 6666;
        $workerID = 7777;
        $expected = $this->object->_baseURL() . '/' . $this->object->getParentResource() . '/'. $jobID
                . '/' . $this->object->getResource() . '/' . $workerID . '/approve';

        $this->assertEquals($expected,$this->object->_approveURL($jobID, $workerID));
    }

    public function test_rejectURL() {
        $jobID = 6666;
        $workerID = 7777;
        $expected = $this->object->_baseURL() . '/' . $this->object->getParentResource() . '/'. $jobID
                . '/' . $this->object->getResource() . '/' . $workerID . '/reject';

        $this->assertEquals($expected, $this->object->_rejectURL($jobID, $workerID));
    }

    public function test_banURL() {
        $jobID = 6666;
        $workerID = 7777;
        $expected = $this->object->_baseURL() . '/' . $this->object->getParentResource() . '/'. $jobID
                . '/' . $this->object->getResource() . '/' . $workerID . '/ban';

        $this->assertEquals($expected,$this->object->_banURL($jobID, $workerID));
    }

    public function test_debanURL() {
        $jobID = 6666;
        $workerID = 7777;
        $expected = $this->object->_baseURL() . '/' . $this->object->getParentResource() . '/'. $jobID
                . '/' . $this->object->getResource() . '/' . $workerID . '/deban';

        $this->assertEquals($expected,$this->object->_debanURL($jobID, $workerID));
    }

    public function test_notifyURL() {
        $jobID = 6666;
        $workerID = 7777;
        $expected = $this->object->_baseURL() . '/' . $this->object->getParentResource() . '/'. $jobID
                . '/' . $this->object->getResource() . '/' . $workerID . '/notify';

        $this->assertEquals($expected,$this->object->_notifyURL($jobID, $workerID));
    }

    public function test_flagURL() {
        $jobID = 6666;
        $workerID = 7777;
        $expected = $this->object->_baseURL() . '/' . $this->object->getParentResource() . '/'. $jobID
                . '/' . $this->object->getResource() . '/' . $workerID . '/flag';

        $this->assertEquals($expected,$this->object->_flagURL($jobID, $workerID));
    }

    public function test_deflagURL() {
        $jobID = 6666;
        $workerID = 7777;
        $expected = $this->object->_baseURL() . '/' . $this->object->getParentResource() . '/'. $jobID
                . '/' . $this->object->getResource() . '/' . $workerID . '/deflag';

        $this->assertEquals($expected,$this->object->_deflagURL($jobID, $workerID));
    }


}


Class CrowdFlower_Worker_Proxy extends CrowdFlower_Worker {
    public function _bonusURL($jobID, $workerID) {
        return parent::_bonusURL($jobID, $workerID);
    }

    public function _approveURL($jobID, $workerID) {
        return parent::_approveURL($jobID, $workerID);
    }

    public function _rejectURL($jobID, $workerID) {
        return parent::_rejectURL($jobID, $workerID);
    }

    public function _banURL($jobID, $workerID) {
        return parent::_banURL($jobID, $workerID);
    }

    public function _debanURL($jobID, $workerID) {
        return parent::_debanURL($jobID, $workerID);
    }

    public function _notifyURL($jobID, $workerID) {
        return parent::_notifyURL($jobID, $workerID);
    }

    public function _flagURL($jobID, $workerID) {
        return parent::_flagURL($jobID, $workerID);
    }

    public function _deflagURL($jobID, $workerID) {
        return parent::_deflagURL($jobID, $workerID);
    }
    
}

?>