<?php
class Task
{
    protected $product;
    protected $client;
	protected $number; 
	protected $volume;
  public function __construct(){
	  $this->product="";
	  $this->client="";
	  $this->number=0;
	  $this->volume=0.00;
	  
  }
    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;
    }
	public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }
	public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
    }
}
?>