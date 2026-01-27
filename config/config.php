<?php
  define('company', 'estate');
  define('db_hostname','localhost');
  define('db_username','root');
  define('db_password','');
  define('db_name','estate');
  function getUserCountry($ip = null) {
    // Default = Nigeria
    $default = [
        'country' => 'Nigeria',
        'code'    => 'ng',
        'currency'=> 'NGN'
    ];

    if ($ip === null) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    $url = "http://ip-api.com/json/{$ip}?fields=status,country,countryCode,currency";

    $response = @file_get_contents($url);
    if ($response === false) {
        return $default;
    }

    $data = json_decode($response, true);

    if (isset($data['status']) && $data['status'] === 'success') {
        return [
            'country'  => $data['country'],
            'code'     => strtolower($data['countryCode']),
            'currency' => $data['currency']
        ];
    }

    return $default;
}


function selectCountry($conn, $id){
    $smt=$conn->prepare('select * from country where country_code=? limit 1');
    $smt->bind_param('s',$id);
    $smt->execute();
    $res=$smt->get_result();
    return $res->fetch_assoc();
}
?>