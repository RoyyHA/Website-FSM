<?php
require_once("Model/product_type_db.php");
require_once("Model/product_db.php");

class Product_type_CT
{
    var $product_type_md;
    protected $productController;
    public function __construct()
    {
        $this->product_type_md = new product_type();
        $this->productController = new product();
    }

    public function list()
    {
        $data = $this->product_type_md->list_all_method();
        var_dump("---- --------");
        require_once("View/index.php");
    }

    public function go_add()
    {
        $category = $this->productController->category();
        $data = $this->product_type_md->list_all_method();
        require_once("View/index.php");
    }

    public function add()
    {
        $data = array(
            'MaDM'  => $_POST['MaDM'],
            'TenLSP' => $_POST['TenLSP']
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value      = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->product_type_md->add($data);
        header('Location:?act=view-type');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->product_type_md->delete($id);
        header('Location:?act=view-type');
    }
}
