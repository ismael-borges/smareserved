<?php

namespace App\Repository;

use App\Models\Signatures;
use App\Models\SignaturesProducts;
use App\Services\RecurrenceServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SignatureRepository
{
    private const ACTIVE = 1;

    public function __construct(
        private RecurrenceServices $recurrenceServices
    ) {}

    public function getAll()
    {
        $signatures = Signatures::where('user_id', Auth::id())->get();

        $data['data'] = [];
        foreach ($signatures as $signature) {
            $data['data'][$signature->id] = $signature;
            $data['itens'][$signature->id] = SignaturesProducts::where('signature_id', $signature->id)->count();

        }
        return $data;
    }

    public function create(
        int $recurrenceId,
        int $paymentId,
        int $addressId,
        int $userId
    ) {
        try {
            DB::beginTransaction();

            $signature = new Signatures;
            $signature->payment_id = $paymentId;
            $signature->address_id = $addressId;
            $signature->recurrence_type = $recurrenceId;
            $signature->dtnextexecution = $this->recurrenceServices->chooseRecurrence($recurrenceId);
            $signature->user_id = $userId;
            $signature->fgstatus = self::ACTIVE;
            $signature->save();

            DB::commit();

            return $signature->id;
        }catch (\Exception) {
            DB::rollBack();
        }
    }

    public function find($id)
    {
        return Signatures::firstWhere('id', $id);
    }
}
