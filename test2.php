<?php
require_once "vendor/autoload.php";

// $file_image_pp = base64_encode(file_get_contents('g3.jpg'));
//         $url = "http://twuc-staging.writersunion.ca/entity/file?_format=hal_json";
//         //$reqHeader['Authorization'] = 'Bearer ' . $token;
//         $reqHeader['Content-Type'] = "application/hal+json";
//         //$reqHeader['X-CSRF-Token'] = $token;
//         //$reqHeader['Authorization'] = format_basic_auth();
//         $fval['value'] = 'image1.jpg';
//         $form_params['_links']['type']['href'] = 'http://twuc-staging.writersunion.ca/rest/type/file/image';
//         $form_params['filename'] =  [$fval];
//         $fmime['value'] = 'image/png';
//         $form_params['filemime'] =  [$fmime];
//         $furi['value'] = 'g3.jpg';
//         $form_params['uri'] =  [$furi];
//         $form_params['type']['target_id'] =  'file';
//         $file_image_pp = base64_encode(file_get_contents('g3.jpg'));

//         //$form_params['data'] =  [array('value'=>'fd')];
//       $form_params['data'] =  array('value'=>$file_image_pp);



        //print_r(json_encode($form_params)); die();
function format_basic_auth(){
    $username = 'wu-admin';
    ///$username = 'shakir_101';
    $password = 'N28hVK@J7&^2';
    $credentials =  'wu-admin:N28hVK@J7&^2';
    $basic = base64_encode($credentials);
    return "Basic ".$basic;
  }
$url = "http://twuc-staging.writersunion.ca/user/login?_format=json";
    $reqHeader['Content-Type'] = "application/json";
    $form_params['name'] = "wu-admin";
    $form_params['pass'] = "N28hVK@J7&^2";
    $client = new GuzzleHttp\Client();
    try {
        $request = $client->post(
            $url,
            [
                'headers' => $reqHeader,
                 //'form_params' => $form_params,
                'body' => json_encode($form_params),
                 //'http_errors' => false
            ]
        );
    } catch (GuzzleHttp\Exception\ClientException $e) {
        $request =  $e->getResponse();
    }
    if ($request->getStatusCode() == 200) {
        $response  = json_decode($request->getBody());
        $token = $response->csrf_token;

    }
    else{
        //var_dump(json_decode($request->getBody())->message); die();
        $message = json_decode($request->getBody())->message;
    }
    if(!empty($token)){
        //$file_image_pp = base64_encode(file_get_contents('/g3.jpg'));
        $url = "http://twuc-staging.writersunion.ca/entity/file?_format=hal_json";
        $reqHeader['Authorization'] = 'Bearer ' . $token;
        $reqHeader['Content-Type'] = "application/hal+json";
        $reqHeader['X-CSRF-Token'] = $token;
        $reqHeader['Authorization'] = format_basic_auth();
       // $url = "http://twuc-staging.writersunion.ca/entity/file?_format=hal_json";
        //$reqHeader['Authorization'] = 'Bearer ' . $token;
        $reqHeader['Content-Type'] = "application/hal+json";
        //$reqHeader['X-CSRF-Token'] = $token;
        //$reqHeader['Authorization'] = format_basic_auth();
        $fval['value'] = 'image1.jpg';
        $form_params['_links']['type']['href'] = 'http://twuc-staging.writersunion.ca/rest/type/file/image';
        $form_params['filename'] =  [$fval];
        $fmime['value'] = 'image/png';
        $form_params['filemime'] =  [$fmime];
        $furi['value'] = 'g3.jpg';
        $form_params['uri'] =  [$furi];
        $form_params['type']['target_id'] =  'file';
        //$file_image_pp = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAApgAAAKYB3X3/OAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAANCSURBVEiJtZZPbBtFFMZ/M7ubXdtdb1xSFyeilBapySVU8h8OoFaooFSqiihIVIpQBKci6KEg9Q6H9kovIHoCIVQJJCKE1ENFjnAgcaSGC6rEnxBwA04Tx43t2FnvDAfjkNibxgHxnWb2e/u992bee7tCa00YFsffekFY+nUzFtjW0LrvjRXrCDIAaPLlW0nHL0SsZtVoaF98mLrx3pdhOqLtYPHChahZcYYO7KvPFxvRl5XPp1sN3adWiD1ZAqD6XYK1b/dvE5IWryTt2udLFedwc1+9kLp+vbbpoDh+6TklxBeAi9TL0taeWpdmZzQDry0AcO+jQ12RyohqqoYoo8RDwJrU+qXkjWtfi8Xxt58BdQuwQs9qC/afLwCw8tnQbqYAPsgxE1S6F3EAIXux2oQFKm0ihMsOF71dHYx+f3NND68ghCu1YIoePPQN1pGRABkJ6Bus96CutRZMydTl+TvuiRW1m3n0eDl0vRPcEysqdXn+jsQPsrHMquGeXEaY4Yk4wxWcY5V/9scqOMOVUFthatyTy8QyqwZ+kDURKoMWxNKr2EeqVKcTNOajqKoBgOE28U4tdQl5p5bwCw7BWquaZSzAPlwjlithJtp3pTImSqQRrb2Z8PHGigD4RZuNX6JYj6wj7O4TFLbCO/Mn/m8R+h6rYSUb3ekokRY6f/YukArN979jcW+V/S8g0eT/N3VN3kTqWbQ428m9/8k0P/1aIhF36PccEl6EhOcAUCrXKZXXWS3XKd2vc/TRBG9O5ELC17MmWubD2nKhUKZa26Ba2+D3P+4/MNCFwg59oWVeYhkzgN/JDR8deKBoD7Y+ljEjGZ0sosXVTvbc6RHirr2reNy1OXd6pJsQ+gqjk8VWFYmHrwBzW/n+uMPFiRwHB2I7ih8ciHFxIkd/3Omk5tCDV1t+2nNu5sxxpDFNx+huNhVT3/zMDz8usXC3ddaHBj1GHj/As08fwTS7Kt1HBTmyN29vdwAw+/wbwLVOJ3uAD1wi/dUH7Qei66PfyuRj4Ik9is+hglfbkbfR3cnZm7chlUWLdwmprtCohX4HUtlOcQjLYCu+fzGJH2QRKvP3UNz8bWk1qMxjGTOMThZ3kvgLI5AzFfo379UAAAAASUVORK5CYII=";
        $file_image_pp = base64_encode(file_get_contents('/Applications/MAMP/htdocs/DevxLab/problem-solving-with-php/g3.jpg'));

        //$form_params['data'] =  [array('value'=>'fd')];
        $form_params['data'] =  array('value'=>$file_image_pp);






        $client = new GuzzleHttp\Client();


        try {
            $request = $client->post(
                $url,
                [
                    'headers' => $reqHeader,
                    //'form_params' => $form_params,
                    'body' => json_encode($form_params),
                    //'http_errors' => false
                ]
            );
        } catch (GuzzleHttp\Exception\ClientException $e) {
            $request =  $e->getResponse();
        }
        if ($request->getStatusCode() == 200) {
            $response  = json_decode($request->getBody());
            var_dump($request->getStatusCode(),json_decode($request->getBody())->message); die();
            //$token = $response->csrf_token;
            //\Drupal::logger('grype_custom')->notice($response);
            //echo "<pre>";
            //var_dump($response);
            //die();
        }
        else{
            var_dump($request->getStatusCode(),$request); die();
            $message = json_decode($request->getBody())->message;
        }




    }
