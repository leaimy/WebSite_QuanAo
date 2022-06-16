<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProvinceAPITest extends TestCase
{
    public function test_get_provinces_success()
    {
        $response = $this->getJson('/api/v1/tinh');

        $response
            ->assertStatus(200)
            ->assertJsonPath('26.name', 'Vĩnh Phúc')
            ->assertJsonPath('68.name', 'Lâm Đồng');
    }

    public function test_get_districts_success()
    {
        $response = $this->getJson('/api/v1/quan-huyen/68');

        $response
            ->assertStatus(200)
            ->assertJsonCount(12)
            ->assertJsonFragment([
                "name" => "Đà Lạt",
                "type" => "thanh-pho",
                "slug" => "da-lat",
                "name_with_type" => "Thành phố Đà Lạt",
                "path" => "Đà Lạt, Lâm Đồng",
                "path_with_type" => "Thành phố Đà Lạt, Tỉnh Lâm Đồng",
                "code" => "672",
                "parent_code" => "68"
            ]);
    }

    public function test_get_wards_success()
    {
        $response = $this->getJson('/api/v1/xa-phuong/672');

        $response
            ->assertStatus(200)
            ->assertJsonPath('24769.name_with_type', 'Phường 7')
            ->assertJsonPath('24772.name_with_type', 'Phường 8')
            ->assertJsonPath('24775.name_with_type', 'Phường 12')
            ->assertJsonPath('24778.name_with_type', 'Phường 9')
            ->assertJsonPath('24781.name_with_type', 'Phường 2')
            ->assertJsonPath('24784.name_with_type', 'Phường 1')
            ->assertJsonPath('24787.name_with_type', 'Phường 6')
            ->assertJsonPath('24790.name_with_type', 'Phường 5')
            ->assertJsonPath('24793.name_with_type', 'Phường 4')
            ->assertJsonPath('24796.name_with_type', 'Phường 10')
            ->assertJsonPath('24799.name_with_type', 'Phường 11')
            ->assertJsonPath('24802.name_with_type', 'Phường 3')
            ->assertJsonPath('24805.name_with_type', 'Xã Xuân Thọ')
            ->assertJsonPath('24808.name_with_type', 'Xã Tà Nung')
            ->assertJsonPath('24810.name_with_type', 'Xã Trạm Hành')
            ->assertJsonPath('24811.name_with_type', 'Xã Xuân Trường');
    }
}
