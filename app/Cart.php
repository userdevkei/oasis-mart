<?php


namespace App;


class Cart
{
    public $items;
    public $totalQuantity;
    public $sumPrice;
        public function __construct($prevCart)
        {
            if ($prevCart != null) {
                $this->items = $prevCart->items;
                $this->totalQuantity = $prevCart->totalQuantity;
                $this->sumPrice = $prevCart->sumPrice;
            } else {
                $this->items = [];
                $this->totalQuantity = 0;
                $this->sumPrice = 0;
            }
        }

            public function addItems($id, $products)
            {
                $price = (int) str_replace(",","",$products->s_price);
                if (array_key_exists($id, $this->items))
                {
                    $productToAdd = $this->items[$id];
                    $productToAdd['quantity']++;
                    $productToAdd['itemPrices'] = $productToAdd['quantity'] * $price;

                }else
                {
                    $productToAdd = ['quantity' => 1, 'itemPrices' => $price, 'data' => $products];

                }

                $this->items[$id] = $productToAdd;
                $this->totalQuantity ++;
                $this->sumPrice = $this->sumPrice + $price;
            }

            public function updatePriceandQuantity()
            {
                $totalPrice = 0;
                $totalQuantity = 0;
                foreach ($this->items as $item)
                {
                    $totalQuantity = $totalQuantity + $item['quantity'];
                    $totalPrice = $totalPrice + $item['itemPrices'];
                }

                $this->totalQuantity = $totalQuantity;
                $this->sumPrice = $totalPrice;
            }
}
