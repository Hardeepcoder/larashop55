<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use Auth;
use App\dAddress;
use App\orders;
class checkoutController extends Controller
{
    public function index(){
        return view('front.checkout',[
            'data' => Cart::content()
          ]);
    }

    public function placeOrder(Request $request){

        $this->validate($request, [
            'fullname' => 'required|min:5|max:35',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'city' => 'required|min:5|max:25',
            'state' => 'required|min:5|max:25',
            'country' => 'required',
            'fullAddress' => 'required'
            ]);

        $address = new dAddress;
       
        $address->userid = Auth::user()->id;
        $address->fullname = $request->fullname;
        $address->email = $request->email;
        $address->phone = $request->phone;
        $address->state = $request->state;
        $address->city = $request->city;
        $address->country = $request->country;
        $address->fullAddress = $request->fullAddress;
        $address->save();


        orders::createOrder();

        Cart::destroy();
        return redirect('thankyou');
    }


    public function checkCoupon(Request $res)
    {
        $code = $res->code;

        $check = DB::table('coupons')
        ->where('coupon_code',$code)
        ->get();
        if(count($check)=="1"){
            //ok
            $user_id = Auth::user()->id;
            $check_used = DB::table('used_coupons')
            ->where('user_id',$user_id)
            ->where('coupon_id',$check[0]->id)
            ->count();
           if($check_used=="0"){
                //insert used one
            $used_add = DB::table('used_coupons')
            ->insert([
                    'coupon_id' => $check[0]->id,
                    'user_id' => $user_id
            ]);
            $insert_cart_total = DB::table('cart_total')
            ->insert([
                    'cart_totol' => Cart::total(),
                    'discount' => $check[0]->discount,
                    'user_id' => $user_id,
                    'gtotal' =>  Cart::total() - (Cart::total() * $check[0]->discount)/100,
            ]);
            $disnew = $check[0]->discount;
            $gtnew = Cart::total() - (Cart::total() * $check[0]->discount)/100;
            
            //echo "applied";

            ?>
 <div class="cart-total" >
                                <h4>Total Amount</h4>
                                <table>
                                  <tbody>
                                    <tr>
                                      <td>Sub Total</td>
                                      <td>$ <?php echo Cart::subtotal(); ?></td>
                                    </tr>
                                    <tr>
                                      <td>Tax (%)</td>
                                      <td>$ <?php echo Cart::tax(); ?></td>
                                    </tr>
                                   
                                  
                                    <tr>
                                      <td>Grand Total </td>
                                      <td>$ <?php echo Cart::total(); ?></td>
                                    </tr>

                                    <tr><td colspan="2"><hr></td></tr>
                                    <tr>
                                      <td>Discount(%) </td>
                                      <td> <?php echo $disnew; ?></td>
                                    </tr>

                                     <tr>
                                      <td>Grand Total (After discount) </td>
                                      <td>$ <?php echo $gtnew; ?></td>
                                    </tr>
                                  </tbody>
                                </table>
                           <input type="submit" class="btn update btn-block" value="Continue Shopping">
                         <a href="{{url('checkout')}}" class="btn check_out btn-block">checkout</a>
                                </div>

            <?php 
           }
           else{?>

               <div class="alert alert-warning">you already used this coupon</div>
               <div class="cart-total" >
                                <h4>Total Amount</h4>
                                <table>
                                  <tbody>
                                    <tr>
                                      <td>Sub Total</td>
                                      <td>$ <?php echo Cart::subtotal(); ?></td>
                                    </tr>
                                    <tr>
                                      <td>Tax (%)</td>
                                      <td>$ <?php echo  Cart::tax(); ?></td>
                                    </tr>
                                   
                                  
                                    <tr>
                                      <td>Grand Total</td>
                                      <td>$ <?php echo Cart::total(); ?></td>
                                    </tr>
                                  </tbody>
                                </table>
                           <input type="submit" class="btn update btn-block" value="Continue Shopping">
                         <a href="{{url('checkout')}}" class="btn check_out btn-block">checkout</a>
                                </div>
           <?php }
        }else{
            //echo "wrong coupon"; 
            ?>
            <div class="alert alert-danger">Wrong Coupon code you entered</div>

            <div class="cart-total" >
            <h4>Total Amount</h4>
            <table>
              <tbody>
                <tr>
                  <td>Sub Total</td>
                  <td>$ <?php echo Cart::subtotal(); ?></td>
                </tr>
                <tr>
                  <td>Tax (%)</td>
                  <td>$ <?php echo  Cart::tax(); ?></td>
                </tr>
               
              
                <tr>
                  <td>Grand Total</td>
                  <td>$ <?php echo Cart::total(); ?></td>
                </tr>
              </tbody>
            </table>
       <input type="submit" class="btn update btn-block" value="Continue Shopping">
     <a href="{{url('checkout')}}" class="btn check_out btn-block">checkout</a>
            </div>
        <?php }
    }
}
