<?php
namespace tt\block;

class Block{
	public $index;
	public $previousHash;
	public $timestamp;
	public $data;
	public $hash;
	
	public function __construct($index,$timestamp,$data,$previousHash=''){
		$this->index = $index;
		$this->previousHash = $previousHash;
		$this->timestamp = $timestamp;
		$this->data = $data;
		$this->hash = $this->calculateHash();
	}
	
	public function calculateHash(){
		return hash('sha256',$this->index.$this->previousHash.$this->timestamp.json_encode($this->data));
	}
}