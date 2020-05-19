<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagentoEse\VeniaTest\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\DataInstall\Model\Process;

class Test implements DataPatchInterface
{
    /** @var Process  */
    protected $process;

    public function __construct(Process $process)
    {
        $this->process = $process;
    }

    public function apply()
    {
       $this->process->loadFiles(['MagentoEse_VeniaTest::fixtures/categories.csv',
            'MagentoEse_VeniaTest::fixtures/stores.csv',
            'MagentoEse_VeniaTest::fixtures/product_attributes.csv',
            'MagentoEse_VeniaTest::fixtures/products.csv',
            'MagentoEse_VeniaTest::fixtures/blocks.csv',
            'MagentoEse_VeniaTest::fixtures/dynamic_blocks.csv',
            'MagentoEse_VeniaTest::fixtures/pages.csv',
            'MagentoEse_VeniaTest::fixtures/config.json',
            'MagentoEse_VeniaTest::fixtures/config.csv',
            'MagentoEse_VeniaTest::fixtures/customers.csv']);
        //$this->process->loadFiles(['MagentoEse_VeniaTest::fixtures/config.json','MagentoEse_VeniaTest::fixtures/config.csv']);
       // $this->process->loadFiles(['MagentoEse_VeniaTest::fixtures/customers.csv']);
        //$q=$o;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
