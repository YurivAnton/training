<?php


class Cart
{
    private $products = [];

    public function add($product){
        $this->products[] = $product;
    }
    public function getProducts(){
        return $this->products;
    }
    public function remove($name){

        foreach($this->products as $product){
            if($product->getName() === $name){
            }
        }
    }
    public function getTotalCost(){
        $sum = 0;
        foreach($this->products as $product){
            $sum += $product->getCost();
        }
        return $sum;
    }
    public function getTotalQuantity(){
        $sum = 0;
        foreach($this->products as $product){
            $sum += $product->getQuantity();
        }
        return $sum;
    }
    public function getAvgPrice(){
        return $this->getTotalCost()/$this->getTotalQuantity();
    }
}