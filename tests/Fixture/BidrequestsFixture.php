<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BidrequestsFixture
 */
class BidrequestsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'biditem_id' => 1,
                'user_id' => 1,
                'price' => 1,
                'created' => '2022-03-07 14:46:47',
            ],
        ];
        parent::init();
    }
}
