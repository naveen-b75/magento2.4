<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\ProductOptionInterface
 */
interface ProductOptionExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Catalog\Api\Data\CustomOptionInterface[]|null
     */
    public function getCustomOptions();

    /**
     * @param \Magento\Catalog\Api\Data\CustomOptionInterface[] $customOptions
     * @return $this
     */
    public function setCustomOptions($customOptions);

    /**
     * @return \Magento\Bundle\Api\Data\BundleOptionInterface[]|null
     */
    public function getBundleOptions();

    /**
     * @param \Magento\Bundle\Api\Data\BundleOptionInterface[] $bundleOptions
     * @return $this
     */
    public function setBundleOptions($bundleOptions);

    /**
     * @return \Magento\Downloadable\Api\Data\DownloadableOptionInterface|null
     */
    public function getDownloadableOption();

    /**
     * @param \Magento\Downloadable\Api\Data\DownloadableOptionInterface $downloadableOption
     * @return $this
     */
    public function setDownloadableOption(\Magento\Downloadable\Api\Data\DownloadableOptionInterface $downloadableOption);

    /**
     * @return \Magento\GiftCard\Api\Data\GiftCardOptionInterface|null
     */
    public function getGiftcardItemOption();

    /**
     * @param \Magento\GiftCard\Api\Data\GiftCardOptionInterface $giftcardItemOption
     * @return $this
     */
    public function setGiftcardItemOption(\Magento\GiftCard\Api\Data\GiftCardOptionInterface $giftcardItemOption);

    /**
     * @return \Magento\ConfigurableProduct\Api\Data\ConfigurableItemOptionValueInterface[]|null
     */
    public function getConfigurableItemOptions();

    /**
     * @param \Magento\ConfigurableProduct\Api\Data\ConfigurableItemOptionValueInterface[] $configurableItemOptions
     * @return $this
     */
    public function setConfigurableItemOptions($configurableItemOptions);

    /**
     * @return \Magento\GroupedProduct\Api\Data\GroupedOptionsInterface[]|null
     */
    public function getGroupedOptions();

    /**
     * @param \Magento\GroupedProduct\Api\Data\GroupedOptionsInterface[] $groupedOptions
     * @return $this
     */
    public function setGroupedOptions($groupedOptions);
}
