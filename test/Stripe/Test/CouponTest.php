<?php
namespace Stripe\Test;

use Stripe\Coupon;

class CouponTest extends \UnitTestCase
{
  public function testCreate()
  {
    authorizeFromEnv();
    $c = Coupon::create(array('percent_off' => 25,
      'duration' => 'repeating',
      'duration_in_months' => 5,
      'id' => 'test_coupon'
    ));
    $this->assertEqual('test_coupon', $c->id);
    $this->assertEqual(25, $c->percent_off);
  }

}
