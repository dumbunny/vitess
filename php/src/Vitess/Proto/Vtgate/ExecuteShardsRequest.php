<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: vtgate.proto

namespace Vitess\Proto\Vtgate {

  class ExecuteShardsRequest extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Vtrpc\CallerID */
    public $caller_id = null;
    
    /**  @var \Vitess\Proto\Vtgate\Session */
    public $session = null;
    
    /**  @var \Vitess\Proto\Query\BoundQuery */
    public $query = null;
    
    /**  @var string */
    public $keyspace = null;
    
    /**  @var string[]  */
    public $shards = array();
    
    /**  @var int - \Vitess\Proto\Topodata\TabletType */
    public $tablet_type = null;
    
    /**  @var boolean */
    public $not_in_transaction = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'vtgate.ExecuteShardsRequest');

      // OPTIONAL MESSAGE caller_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "caller_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Vtrpc\CallerID';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE session = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "session";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Vtgate\Session';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE query = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "query";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Query\BoundQuery';
      $descriptor->addField($f);

      // OPTIONAL STRING keyspace = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "keyspace";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED STRING shards = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "shards";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL ENUM tablet_type = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "tablet_type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Topodata\TabletType';
      $descriptor->addField($f);

      // OPTIONAL BOOL not_in_transaction = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "not_in_transaction";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <caller_id> has a value
     *
     * @return boolean
     */
    public function hasCallerId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <caller_id> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function clearCallerId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <caller_id> value
     *
     * @return \Vitess\Proto\Vtrpc\CallerID
     */
    public function getCallerId(){
      return $this->_get(1);
    }
    
    /**
     * Set <caller_id> value
     *
     * @param \Vitess\Proto\Vtrpc\CallerID $value
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function setCallerId(\Vitess\Proto\Vtrpc\CallerID $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <session> has a value
     *
     * @return boolean
     */
    public function hasSession(){
      return $this->_has(2);
    }
    
    /**
     * Clear <session> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function clearSession(){
      return $this->_clear(2);
    }
    
    /**
     * Get <session> value
     *
     * @return \Vitess\Proto\Vtgate\Session
     */
    public function getSession(){
      return $this->_get(2);
    }
    
    /**
     * Set <session> value
     *
     * @param \Vitess\Proto\Vtgate\Session $value
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function setSession(\Vitess\Proto\Vtgate\Session $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <query> has a value
     *
     * @return boolean
     */
    public function hasQuery(){
      return $this->_has(3);
    }
    
    /**
     * Clear <query> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function clearQuery(){
      return $this->_clear(3);
    }
    
    /**
     * Get <query> value
     *
     * @return \Vitess\Proto\Query\BoundQuery
     */
    public function getQuery(){
      return $this->_get(3);
    }
    
    /**
     * Set <query> value
     *
     * @param \Vitess\Proto\Query\BoundQuery $value
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function setQuery(\Vitess\Proto\Query\BoundQuery $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <keyspace> has a value
     *
     * @return boolean
     */
    public function hasKeyspace(){
      return $this->_has(4);
    }
    
    /**
     * Clear <keyspace> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function clearKeyspace(){
      return $this->_clear(4);
    }
    
    /**
     * Get <keyspace> value
     *
     * @return string
     */
    public function getKeyspace(){
      return $this->_get(4);
    }
    
    /**
     * Set <keyspace> value
     *
     * @param string $value
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function setKeyspace( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <shards> has a value
     *
     * @return boolean
     */
    public function hasShards(){
      return $this->_has(5);
    }
    
    /**
     * Clear <shards> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function clearShards(){
      return $this->_clear(5);
    }
    
    /**
     * Get <shards> value
     *
     * @param int $idx
     * @return string
     */
    public function getShards($idx = NULL){
      return $this->_get(5, $idx);
    }
    
    /**
     * Set <shards> value
     *
     * @param string $value
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function setShards( $value, $idx = NULL){
      return $this->_set(5, $value, $idx);
    }
    
    /**
     * Get all elements of <shards>
     *
     * @return string[]
     */
    public function getShardsList(){
     return $this->_get(5);
    }
    
    /**
     * Add a new element to <shards>
     *
     * @param string $value
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function addShards( $value){
     return $this->_add(5, $value);
    }
    
    /**
     * Check if <tablet_type> has a value
     *
     * @return boolean
     */
    public function hasTabletType(){
      return $this->_has(6);
    }
    
    /**
     * Clear <tablet_type> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function clearTabletType(){
      return $this->_clear(6);
    }
    
    /**
     * Get <tablet_type> value
     *
     * @return int - \Vitess\Proto\Topodata\TabletType
     */
    public function getTabletType(){
      return $this->_get(6);
    }
    
    /**
     * Set <tablet_type> value
     *
     * @param int - \Vitess\Proto\Topodata\TabletType $value
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function setTabletType( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <not_in_transaction> has a value
     *
     * @return boolean
     */
    public function hasNotInTransaction(){
      return $this->_has(7);
    }
    
    /**
     * Clear <not_in_transaction> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function clearNotInTransaction(){
      return $this->_clear(7);
    }
    
    /**
     * Get <not_in_transaction> value
     *
     * @return boolean
     */
    public function getNotInTransaction(){
      return $this->_get(7);
    }
    
    /**
     * Set <not_in_transaction> value
     *
     * @param boolean $value
     * @return \Vitess\Proto\Vtgate\ExecuteShardsRequest
     */
    public function setNotInTransaction( $value){
      return $this->_set(7, $value);
    }
  }
}

