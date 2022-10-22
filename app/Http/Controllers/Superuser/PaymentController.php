<?php

namespace App\Http\Controllers\Superuser;

use App\Http\Controllers\Controller;
use App\Models\Regis;
use App\Models\SUPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function show()
    {
        $SUPayment = DB::table('regis')
            ->leftJoin('s_u_payments', 'regis.id', '=', 's_u_payments.regis_id');

        $SUPaymentAll = DB::table('regis')
            ->rightJoin('s_u_payments', 'regis.id', '=', 's_u_payments.regis_id')
            ->union($SUPayment)
            ->get();

        // dd($SUPaymentAll);

        return view('superuser.payment.index', [
            'SUPaymentAll' => $SUPaymentAll,
        ]);
    }
}
