<?php

class cart extends CI_Controller
{
    function index()
    {
        $this->cart->shopping_cart_model();
        $data['product'];
    }
}
