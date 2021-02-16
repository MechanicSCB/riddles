<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
//    protected $kataIds = [
//        '50654ddff44f800200000007',
//        '50ee6b0bdeab583673000025',
//        '514b92a657cdc65150000006',
//        '515de9ae9dcfc28eb6000001',
//        '515e271a311df0350d00000f',
//        '5168bb5dfe9a00b126000018',
//        '51b62bf6a9c58071c600001b',
//        '51c8991dee245d7ddf00000e',
//        '51e0007c1f9378fa810002a9',
//        '51f9d93b4095e0a7200001b8',
//        '520b9d2ad5c005041100000f',
//        '521c2db8ddc89b9b7a0000c1',
//        '523a86aa4230ebb5420001e1',
//        '523f5d21c841566fde000009',
//        '52423db9add6f6fc39000354',
//        '52449b062fb80683ec000024',
//        '5254ca2719453dcc0b00027d',
//        '525f50e3b73515a6db000b83',
//        '5263c6999e0f40dee200059d',
//        '5264d2b162488dc400000001',
//        '526571aae218b8ee490006f4',
//        '5266876b8f4bf2da9b000362',
//        '526d42b6526963598d0004db',
//        '52742f58faf5485cae000b9a',
//        '5277c8a221e209d3f6000b56',
//        '527fde8d24b9309d9b000c4e',
//        '5287e858c6b5a9678200083c',
//        '5296bc77afba8baa690002d7',
//        '529bf0e9bdf7657179000008',
//        '52a78825cdfc2cfc87000005',
//        '52b7ed099cdc285c300001cd',
//        '52bb6539a4cf1b12d90005b7',
//        '52d1bd3694d26f8d6e0000d3',
//        '52f677797c461daaf7000740',
//        '5324945e2ece5e1f32000370',
//        '537e18b6147aa838f600001b',
//        '53da3dbb4a5168369a0000fe',
//        '53e57dada0cb0400ba000688',
//        '545cedaa9943f7fe7b000048',
//        '5467e4d82edf8bbf40000155',
//        '546d15cebed2e10334000ed9',
//        '54b42f9314d9229fd6000d9c',
//        '54b724efac3d5402db00065e',
//        '54bf1c2cd5b56cc47f0007a1',
//        '54ce4c6804fcc440a1000ecb',
//        '54d496788776e49e6b00052f',
//        '54d7660d2daf68c619000d95',
//        '54da5a58ea159efa38000836',
//        '54dc6f5a224c26032800005c',
//        '54e6533c92449cc251001667',
//        '54eb33e5bc1a25440d000891',
//        '54ff3102c1bad923760001f3',
//        '5500d54c2ebe0a8e8a0003fd',
//        '550498447451fbbd7600041c',
//        '550554fd08b86f84fe000a58',
//        '5544c7a5cb454edb3c000047',
//        '554b4ac871d6813a03000035',
//        '55911ef14065454c75000062',
//        '5592e3bd57b64d00f3000047',
//        '55983863da40caa2c900004e',
//        '559a28007caad2ac4e000083',
//        '55bf01e5a717a0d57e0000ec',
//        '55cf3b567fc0e02b0b00000b',
//        '55e2adece53b4cdcb900006c',
//        '55f89832ac9a66518f000118',
//        '561c20edc71c01139000017c',
//        '5629db57620258aa9d000014',
//        '563e320cee5dddcf77000158',
//        '563f0c54a22b9345bf000053',
//        '564057bc348c7200bd0000ff',
//        '5667e8f4e3f572a8f2000039',
//        '566be96bb3174e155300001b',
//        '5672682212c8ecf83e000050',
//        '56747fd5cb988479af000028',
//        '5679aa472b8f57fb8c000047',
//        '56882731514ec3ec3d000009',
//        '56cac350145912e68b0006f0',
//        '56dec885c54a926dcd001095',
//        '57cebe1dc6fdc20c57000ac9',
//        '57cf3dad05c186ba22000348',
//        '57d0fad6eca26073c3000023',
//        '57d29627c98a52d1630009c0',
//        '57d3c6a043942a34d200015e',
//        '57d41c425dc38eefbc0001cf',
//        '57d6ae421a6282aa4f000b97',
//        '57d93721bfcdc5c92600014e',
//        '57db5923d8f92929380001ae',
//        '57dbd9d68d7f5a785f00000f',
//        '57e0a796f5ec16a11a001c93',
//        '57e0e52c8a8b8dfa6c0000b7',
//        '57feb00f08d102352400026e',
//        '5808dcb8f0ed42ae34000031',
//        '582c297e56373f0426000098',
//        '582cb0224e56e068d800003c',
//        '582d4b425f8677cba9000135',
//        '583203e6eb35d7980400002a',
//        '5839c48f0cf94640a20001d3',
//        '5839edaa6754d6fec10000a2',
//        '5855777bb45c01bada0002ac',
//        '585894545a8a07255e0002f1',
//        '585d7d5adb20cf33cb000235',
//        '5875b200d520904a04000003',
//        '5886e082a836a691340000c3',
//        '58c5577d61aefcf3ff000081',
//        '58c8e1c2a7f31af03600008f',
//        '58c9defe6a3965206600011d',
//        '58ca951592ce34cff500000e',
//        '58ce4e9b360ced9470000106',
//        '58fdcc51b4f81a0b1e00003e',
//        '59549d482a68fe3bc2000146',
//        '59df2f8f08c6cec835000012',
//        '5a00e05cc374cb34d100000d',
//        '5a20eeccee1aae3cbc000090',
//        '5a9c35e9ba1bb5c54a0001ac',
//        '5ce9c1000bab0b001134f5af',
//        '5ef9ca8b76be6d001d5e1c3e',
//        '5f70c883e10f9e0001c89673',
//    ];

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

//    public function testGetKatasDescriptions()
//    {
//        $this->browse(function (Browser $browser) {
//            for ($i=0;$i<count($this->kataIds);$i++){
//                $browser->visit('https://www.codewars.com/kata/'. $this->kataIds[$i])
//                    ->storeSource($this->kataIds[$i]);
//            }
//        });
//    }

}
