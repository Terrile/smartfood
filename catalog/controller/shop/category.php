<?php
/**
 * Created by PhpStorm.
 * User: Min
 * Date: 2015/8/2
 * Time: 21:54
 */
class ControllerShopCategory extends Controller{
    public function index()
    {
        $this->load->model('shop/category');
        $categories = $this->model_shop_category->getCategories();
        $data = array();
        $data['categories']=$categories;
        /*
        foreach ($categories as $category){
            echo $category;
        }*/
        //$this->response->setOutput($this->load->view('default/template/shop/category.tpl', $data));
        return $this->load->view('default/template/shop/category.tpl', $data);
    }
}