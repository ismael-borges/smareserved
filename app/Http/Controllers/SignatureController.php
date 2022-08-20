<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSignatureFormRequest;
use App\Repository\AddressRepository;
use App\Repository\PaymentRepository;
use App\Repository\ProductRepository;
use App\Repository\SignatureProductRepository;
use App\Repository\SignatureRepository;
use App\Services\SignatureServices;
use Illuminate\Support\Facades\Auth;

class SignatureController extends Controller
{

    public function __construct(
        private PaymentRepository $paymentRepository,
        private AddressRepository $addressRepository,
        private ProductRepository $productRepository,
        private SignatureRepository $signatureRepository,
        private SignatureProductRepository $signatureProductRepository,
        private SignatureServices $signatureServices
    ) {}

    public function index()
    {
        $payments = $this->paymentRepository->getAll();
        $addresses = $this->addressRepository->getAll();
        $products = $this->productRepository->getAll();
        return view('signature.index', compact(['payments', 'addresses', 'products']));
    }

    public function create()
    {}

    public function store(StoreUpdateSignatureFormRequest $request)
    {
        $data = $request->only('products', 'quantity', 'recurrence_type', 'payment_id', 'address_id');
        $signatureId = $this->signatureRepository->create($data['recurrence_type'], $data['payment_id'], $data['address_id'], Auth::id());
        $this->signatureProductRepository->save($data['products'], $data['quantity'], $signatureId, 'create');

        return redirect()->route('dashboard.index');
    }

    public function show($id)
    {}

    public function edit($id)
    {
        $products = $this->productRepository->getAll();
        $payments = $this->paymentRepository->getAll();
        $addresses = $this->addressRepository->getAll();

        $signature = $this->signatureRepository->find($id);
        $paymentSelected = $this->paymentRepository->find($signature['payment_id']);
        $addressSelected = $this->addressRepository->find($signature['address_id']);
        $productsSelected = $this->signatureProductRepository->find($signature['id']);

        return view('signature.index', compact([
            'signature', 'products', 'payments', 'productsSelected',
            'addresses', 'paymentSelected', 'addressSelected'
        ]));
    }

    public function update(StoreUpdateSignatureFormRequest $request, $id)
    {
        $signature = $this->signatureRepository->find($id);
        $productsSelected = $this->signatureProductRepository->find($id);

        $data = $request->only('products', 'quantity', 'recurrence_type', 'payment_id', 'address_id');
        $data['user_id'] = Auth::id();

        $checkedProducts = $this->signatureServices->checkProducts($data, $productsSelected);
        $this->destroy($id, $checkedProducts['delected']);
        $this->signatureProductRepository->save($checkedProducts['added'], $data['quantity'], $id, 'create');
        $this->signatureProductRepository->save($data['products'], $data['quantity'], $id, 'update');

        $signature->update($data);

        return back();
    }

    public function destroy($signatureId, $productsDeleted)
    {
        if (!empty($productsDeleted)) {
            foreach ($productsDeleted as $productId) {
                $this->signatureProductRepository->delete($signatureId, $productId);
            }
        }
    }
}
