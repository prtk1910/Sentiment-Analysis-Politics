<?php
function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "apikey:Lbi-LYdxBaEaJLhA7cobLvoTsDCJCHUmp43tvtZEFiE1");


    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}

function WatsonCall($text,$keyword) {
  $curl = curl_init();
  $x=$text;
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://gateway-tok.watsonplatform.net/natural-language-understanding/api/v1/analyze?version=2018-03-19&apikey=Lbi-LYdxBaEaJLhA7cobLvoTsDCJCHUmp43tvtZEFiE1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 300,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n    \"text\": \" " . $x . "  \",\n    \"features\": {\n        \"emotion\": {\"targets\": [\"" . $keyword . "\"], \"document\" : false},\n        \"keywords\": {\"limit\":10}\n    }\n}",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Basic YXBpa2V5OkxiaS1MWWR4QmFFYUpMaEE3Y29iTHZvVHNEQ0pDSFVtcDQzdHZ0WkVGaUUx",
      "Content-Type: application/json",
      "Postman-Token: bc7f86a3-59ad-4831-b9cb-b4384f3482e8",
      "cache-control: no-cache"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
  //  echo $response;
  }

  return $response;
}

?>
