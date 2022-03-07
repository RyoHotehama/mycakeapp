<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BiditemsFixture
 */
class BiditemsFixture extends TestFixture
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
                'user_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'finished' => 1,
                'endtime' => '2022-03-07 14:46:19',
                'created' => '2022-03-07 14:46:19',
            ],
        ];
        parent::init();
    }
}
