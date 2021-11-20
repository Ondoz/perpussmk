<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;

class Peminjaman
{
    protected $data;


    public function __construct()
    {
        $this->data = config('mailgun.domain');
    }

    public function get_name_mail()
    {
        $data = $this->data.
    }

    private function get_curl($url, $parameter = null)
    {
        return Http::withHeaders([

        ])->withOptions(["verify" => false])->get($this->data. $url, $parameter);
    }

    private function post_curl()
    {

    }


}
