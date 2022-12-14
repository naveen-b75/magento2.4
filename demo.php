<?php

    use Magento\Framework\App\Bootstrap;
    require dirname(__DIR__) . '/magento24/app/bootstrap.php';
    $bootstrap = Bootstrap::create(BP, $_SERVER);

    $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    $resource=$objectManager->get('Magento\Framework\App\ResourceConnection');
    $customerDetails = $objectManager->create('Magento\Customer\Model\Customer')->getCollection();

   /* $objectManagers = \Magento\Framework\App\ObjectManager::getInstance();
    $customerAddress=$objectManagers->create('Magento\Customer\Model\Address')->getCollection();
    print_r($customerAddress);
   */

    $customerAddress = $resource->getTableName('customer_address_entity');
    $customerDetails->getSelect()->joinLeft(array('address' => $customerAddress),
        'e.entity_id = address.parent_id');
    print_r($customerDetails->getData());




