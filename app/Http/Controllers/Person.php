<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Person extends Controller
{
    public function index(int $id, Request $request){
        if (! $request->hasValidSignature()) {
            abort(401);
        }
        return view(('person.index'), compact('id'));

    }

    public function show(int $id){
        dd(back()->withInput('location'));

        return view(('person.show'), compact('id'));
    }

    public function create(request $request, int $id){
        $text=$request->input('review');
        $url='http://ana.intrumnet.com:81/sharedapi/purchaser/filter';

        $params=array(
            'byid' => $id
        );

        $post = array(
            'apikey' =>"8648e463b88eeff4e7c078c1e8ed6538",
            'params'=>$params
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = json_decode(curl_exec($ch), true);
        curl_close ($ch);

        $phone=$result['data']['list'][0]['phone'][0]['phone'];

        $message_json = json_encode([
            "recipient" => "79996194533",
            "body" => "Негативный отзыв от клиента:
'".$text."'
Ссылка whatsapp: https://api.whatsapp.com/send?phone=".$phone."
Ссылка интрум: https://ana.intrumnet.com/crm/tools/exec/customer/".$id."#customer",
        ]);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://wappi.pro/api/sync/message/send?profile_id=604548a8-23c0');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $message_json);

        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Authorization: b71577c620cb3ffc84305c5e8d045e065c1b94ee';
        $headers[] = 'Content-Type: text/plain';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

       return redirect('/');

    }

}
