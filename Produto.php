<?php

	class Produto implements JsonSerializable
{
		private $codigo;
		private $preco;

		public function setCodigo($newval)
		{
			$this->codigo = $newval;
		}
		public function getCodigo()
		{
				return $this->codigo;
		}

		public function setPreco($newval)
		{
			$this->preco = $newval;
		}
		public function getPreco()
		{
				return $this->preco;
		}

		public function __construct($codigo, $preco){
			$this->codigo = $codigo;
			$this->preco = $preco;
		}
		public function __toString(){
			$resultado = 
			"Código: ".$this->codigo. "<br/>".
			"Preço R$: ".$this->preco . "<br/>";
			return $resultado;
		}
		public function jsonSerializabe()
		{
			return[
				'codigo'=>$this->getCodigo()];
		}
	public function jsonSerialize(){
	return [
			'Código: '=> $this->codigo,
			'Preço R$: ' => $this->preco
			];
	}
}

>