<?php
namespace tt\block;

class Blockchain{
	private $chain;
	
	public function __construct(){
		$this->chain = [$this->createGenesisBlock()];
	}
	
	private function createGenesisBlock(){
		return new \tt\block\Block(0,strtotime('2019/01/01'), 'Genesis block','0');
	}
	private function getLatestBlock(){
		return $this->chain[sizeof($this->chain) - 1];
	}
	
	public function addBlock($newBlock){
		$newBlock->previousHash = $this->getLatestBlock()->hash;
		$newBlock->hash = $newBlock->calculateHash();
		$this->chain[] = $newBlock;
	}
}


