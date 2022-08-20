<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePaymentFormRequest;
use App\Repository\PaymentRepository;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function __construct(
        private PaymentRepository $paymentRepository
    ){}

    public function index()
    {
        $payments = $this->paymentRepository->getAll();
        return view('payment.index', compact('payments'));
    }

    public function create()
    {
        $payment = null;
        return view('payment.form', compact('payment'));
    }

    public function store(StoreUpdatePaymentFormRequest $request)
    {
        $data = $request->only('digit', 'mounth', 'yearcard', 'nameprinted', 'cvv', 'nickname');
        $this->paymentRepository->create($data['digit'], $data['mounth'], $data['yearcard'],
            $data['nameprinted'], $data['cvv'], $data['nickname'], Auth::id());
        return redirect()->route('payment.index');
    }

    public function edit($id)
    {
        if (!$payment = $this->paymentRepository->find($id)) {
            return redirect()->route('payment.index');
        }

        return view('payment.form', compact('payment'));
    }

    public function update(StoreUpdatePaymentFormRequest $request, $id)
    {
        if (!$payment = $this->paymentRepository->find($id)) {
            return redirect()->route('payment.index');
        }

        $data = $request->only('digit', 'mounth', 'yearcard', 'nameprinted', 'cvv', 'nickname');
        $data['user_id'] = Auth::id();

        $payment->update($data);
        return redirect()->route('payment.index');
    }

    public function destroy($id)
    {
        $this->paymentRepository->delete($id);
        return redirect()->route('payment.index');
    }
}
