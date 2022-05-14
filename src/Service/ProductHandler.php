<?php

namespace App\Service;

class ProductHandler
{
    private $products=[];

    public function __construct($products=[])
    {
        $this->products=$products;
    }

    /**
     * 计算商品总金额
     * @return int|string
     */
    public function getTotalPrice(){
        $totalPrice = 0;
        foreach ($this->products as $item){
            if($item['price']>0)$totalPrice=bcadd($totalPrice,$item['price'],2);
        }
        return $totalPrice;
    }

    /**
     * 按价格倒序输出商品列表
     * @param string $type 类型
     * @return array
     */
    public function getProductList($type=''){
        if(!empty($type)){
            foreach ($this->products as $key => $item){
                if($item['type']!=$type)unset($this->products[$key]);
            }
        }
        if(!empty($this->products)){
            $fields = array_column($this->products,'price');
            array_multisort($fields, SORT_DESC, $this->products);
        }
        return $this->products;
    }

    /**
     * 将商品列表中的创建日期改为时间戳格式输出
     * @return array
     */
    public function formatList(){
        foreach ($this->products as &$item){
            $item['create_at']=strtotime($item['create_at']);
        }
        return $this->products;
    }

}