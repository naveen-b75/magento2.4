<?php
use Magento\Framework\App\Bootstrap;
require __DIR__. '/app/bootstrap.php';
$bootstrap = Bootstrap::create(BP, $_SERVER);
$obj = $bootstrap->getObjectManager();
$state = $obj->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');
try{
    $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    $importDir = __DIR__ . '/pub/media/catalog/product/simple.jpg';
    $i = '1242';
    $product = $objectManager->get('Magento\Catalog\Model\Product')->load($i);
    $id = $product->getId();
    $url = $importDir . $product->getImage();
    $product->addImageToMediaGallery($url, array('image', 'small_image', 'thumbnail'), true, false);
    $product->save();
    echo $id." Product Save Succefully";
}catch (\Exception $e){
    echo $e->getMessage();
    exit;
}