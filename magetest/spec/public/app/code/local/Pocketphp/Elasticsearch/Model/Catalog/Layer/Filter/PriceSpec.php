<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Pocketphp_Elasticsearch_Model_Catalog_Layer_Filter_PriceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pocketphp_Elasticsearch_Model_Catalog_Layer_Filter_Price');
    }
}
