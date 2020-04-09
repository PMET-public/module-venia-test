<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 */

namespace MagentoEse\VeniaTest\Setup\Patch\Data;


use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\DataInstall\Model\Converter;


class Content implements DataPatchInterface
{
    /** @var Converter  */
    protected $converter;

    public function __construct(Converter $converter)
    {
        $this->converter = $converter;
    }

    public function apply()
    {
        // Product $content ='<a href="{{producturl sku="VSK04"}}" class="block-promo giftcard-mailed">';
        // Category $content ='<li class="item"><a href="{{category key="venia-dresses"}}">Dresses</a></li>';
        // Product attribute Select - $content = '<li class="item"><a href="{{productattribute code="fashion_color:Peach"}}">Dresses</a></li>';
        // Segment $content = '"operator":null,"value":"{{segment name="VIP Cdustomers"}}","is_value_processed":null,>';
        // Block $content = '"operator":null,"value":"{{block code="smeg_hee"}}","is_value_processed":null,>';
        // Dynamic Block $content ='<a href="{{dynamicblock name="Foo of Bar Bar"}}" class="block-promo giftcard-mailed">';
        // attribute set $content ='<a href="{{attributeset name="Default"}}" class="block-promo giftcard-mailed">';
        // customer group $content ='<a href="{{customergroup name="Wholesale"}}" class="block-promo giftcard-mailed">';
        $content = 'unique_id="{{dynamicblock name="Featured Products (VIP)"}}" type_name="Dynamic Blocks Rotator"}}';
        echo "BEFORE\n\n".$content."\n\n\n\n\n\n";
        echo "AFTER\n\n".$this->converter->convertContent($content)."\n\n\n\n\n\n";
        //echo $this->converter->convertRow('foobar');
        //$r=$e;
    }

    public
    static function getDependencies()
    {
        return [Test::class];
    }

    public

    function getAliases()
    {
        return [];
    }
}
