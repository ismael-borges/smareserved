<?php

namespace App\Repository;

use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentRepository
{
    public function getAll()
    {
        return Payment::where('user_id', Auth::id())->get();
    }

    public function create($digit, $mounth, $yearcard, $nameprinted, $cvv, $nickname, $user_id)
    {
        try {
            DB::beginTransaction();

            $payment = new Payment;
            $payment->digit = $digit;
            $payment->mounth = $mounth;
            $payment->yearcard = $yearcard;
            $payment->nameprinted = $nameprinted;
            $payment->cvv = $cvv;
            $payment->nickname = $nickname;
            $payment->user_id = $user_id;
            $payment->save();

            DB::commit();
        } catch (\Exception) {
            DB::rollBack();
        }
    }

    public function find($id)
    {
        return Payment::find($id);
    }

    public function delete($id)
    {
        return Payment::find($id)->delete();
    }
}
