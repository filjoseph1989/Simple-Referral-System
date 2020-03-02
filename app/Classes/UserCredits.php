<?php

namespace App\Classes;

use Auth;
use App\Models\Referral;
use App\Models\Credit;

class UserCredits
{
    protected $data = [];

    /**
     * Initiate credit object
     *
     * @param Referral $model
     * @param Credit $credit
     * @param [type] $data
     */
    public function __construct(&$data)
    {
        $this->data = $data;
    }

    /**
     * Give a credit to user who invited
     *
     * @return boolean
     */
    public function credit()
    {
        if (self::hasInvitationCode()) {
            if (!is_null($user = self::whoInvited())) {
                $credit = Credit::where('user_id', $user->id);

                if ($credit->count() > 0) {
                    $credit->increment('points', 2);
                } else {
                    Credit::create([
                        'user_id' => $user->id,
                        'points'  => 2
                    ]);
                }

                return true;
            }
        }

        return false;
    }

    /**
     * Check if has invitation code
     *
     * @return boolean
     */
    private function hasInvitationCode()
    {
        if (isset($this->data['invitation_code']) && !empty($this->data['invitation_code'])) {
            return true;
        }

        return false;
    }

    /**
     * Check who invited
     *
     * @return null|object
     */
    private function whoInvited()
    {
        $referral = Referral::with('user')
            ->where('code', $this->data['invitation_code'])
            ->first();

        if (!is_null($referral)) {
            return $referral->user;
        }

        return null;
    }
}
