<?php

namespace App\Http\Controllers;

use App\Repository\AddressRepository;
use App\Repository\PaymentRepository;
use App\Repository\ProductRepository;
use App\Repository\SignatureProductRepository;
use App\Repository\SignatureRepository;
use App\Services\SignatureServices;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $data = $request->only('products', 'quantity', 'recurrence',
            'payment', 'address', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday');

        $signatureId = $this->signatureRepository->create(
            $data['recurrence'],
            $data['payment'],
            $data['address'],
            Auth::id()
        );

        foreach ($data['products'] as $productId) {
            $quantity = $data['quantity'][$productId];

            $this->signatureProductRepository->create(
                $signatureId,
                $productId,
                $quantity
            );
        }

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

    public function update(Request $request, $id)
    {
        $signature = $this->signatureRepository->find($id);
        $productsSelected = $this->signatureProductRepository->find($id);

        $data = $request->only('products', 'quantity', 'recurrence',
            'payment', 'address', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'fgstatus');
        $data['user_id'] = Auth::id();

        $productsDeleted = $this->signatureServices->checkProducts($data, $productsSelected);
        dd($productsDeleted);
        $signature->update($data);

        return redirect()->route('dashboard.index');
    }

    public function destroy($id)
    {}
}
