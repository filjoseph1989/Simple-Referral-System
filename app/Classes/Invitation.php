<?php

namespace App\Classes;

use Auth;
use App\Models\Referral;

class Invitation
{
    protected $model;
    protected $code = false;

    /**
     * Initiate referral object
     *
     * @param Referral $model
     */
    public function __construct(Referral $model)
    {
        $this->model = $model;
    }

    /**
     * Return referral code
     *
     * @return string
     */
    public function code()
    {
        if (self::hasReferralCode()) {
            return $this->code;
        }

        return self::generate();
    }

    /**
     * Generate referral code
     *
     * @return string
     */
    private function generate()
    {
        $model = $this->model->create([
            'user_id' => Auth::id(),
            'code'    => bin2hex(random_bytes(8))
        ]);

        return $model->code;
    }

    /**
     * Return current logged in user
     *
     * @return object|null
     */
    private function isLogin()
    {
        return Auth::user() !== null;
    }

    /**
     * Check for referral code existense
     *
     * @return boolean
     */
    private function hasReferralCode()
    {
        if (self::isLogin()) {
            $model = $this->model->where('user_id', Auth::id());

            if ($model->count() > 0) {
                $this->code = $model->first()->code;
                return true;
            }
        }

        return false;
    }
}
