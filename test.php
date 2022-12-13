<?php
function grype_custom_member_announcement_to_notice_newsite($form_element, FormStateInterface $form_state){

    //dsm($form_element);

    //first we have to login and get the token for further  requests
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
        //dsm($token);
    }
    else{
        var_dump(json_decode($request->getBody())->message); die();
        $message = json_decode($request->getBody())->message;
    }
    // if token is isset and valid then we will try to send data to twuc site
    if(isset($token)) {
      $uid_to_create = $form_state->getformObject()->getEntity()->getOwnerId();
      //$user_details =  \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
      $user_details =  \Drupal\user\Entity\User::load($uid_to_create);
      $current_user_id = $user_details->id();
      $user_email = $user_details->getEmail();
      $pen_name = $user_details->get('field_pen_name')->value;
      //echo "<pre>";
      //kint($user_details);

      $fid = $form_element['field_announcement_image']['widget'][0]['#value']['fids'][0]; //The file ID

      if( isset( $form_element['body']['widget'][0]['value']['#value']) == true &&   $form_element['body']['widget'][0]['value']['#value'] == NULL ){
        $form_element['body']['widget'][0]['value']['#value'] = NULL;
      }
      $field_body_text = $form_element['field_body']['widget'][0]['value']['#value'];
      $field_body_format = $form_element['field_body']['widget'][0]['format']['format']['#value'];
      $title = $form_element['title']['widget'][0]['value']['#value'];
      $field_notice_type = $form_element['field_no']['widget']['#value'];
      $field_event_date = $form_element['field_announcement_date']['widget'][0]['value']['#value'];
      $just_date = $form_element['field_announcement_date']['widget'][0]['value']['#value']['date'];
      $just_time = $form_element['field_announcement_date']['widget'][0]['value']['#value']['time'];
      $field_is_this_a_virtual_event =  $form_element['field_this_is_a_virtual_event']['widget']['value']['#value'];

      $new_date = date("M d Y", strtotime($just_date)); // for date format Jul 11 2021
      // converting time string to time
      $new_time = date('H:i:s', $just_time);
      if($field_notice_type =="Members Activity"){
        $field_notice_type = "Members' Activity";
      }
      if($field_notice_type =="Writing Residency" || $field_notice_type =="Classified Ad"){
        $field_notice_type = "Employment or Volunteer Opportunity";
      }
      $url = "http://twuc-staging.writersunion.ca/rest/grypecustom/api/post/items?_format=json";
      //$reqHeader['Authorization'] = 'Bearer ' . $token;
      $reqHeader['Content-Type'] = "application/json";
      $reqHeader['X-CSRF-Token'] = $token;
      $reqHeader['Authorization'] = format_basic_auth();

      $form_params_member['field_body_text'] = $field_body_text;
      $form_params_member['field_body_format'] = $field_body_format;
      $form_params_member['field_title'] = $title;
      $form_params_member['field_notice_type'] = $field_notice_type;
      $form_params_member['field_event_date'] = $field_event_date;
      $form_params_member['field_just_date'] = $just_date;
      $form_params_member['field_just_time'] = $just_time;
      $form_params_member['field_virtual_event'] = $field_is_this_a_virtual_event;
      $form_params_member['field_new_date'] = $new_date;
      $form_params_member['field_new_time'] = $new_time;
      $form_params_member['field_new_time'] = $new_time;
      $form_params_member['field_user_email'] = $user_email;
      $form_params_member['field_pen_name'] = $pen_name;
      $form_params_member['member_announcement_only'] = true;
      var_dump( $form_params_member); die();
      $client = new GuzzleHttp\Client();

      try {
          $request = $client->post(
              $url,
              [
                  'headers' => $reqHeader,
                  //'form_params' => $form_params,
                  'body' => json_encode($form_params_member),
                  //'http_errors' => false
              ]
          );
      } catch (GuzzleHttp\Exception\ClientException $e) {
          $request =  $e->getResponse();
      }
      if ($request->getStatusCode() == 200) {
          $response  = json_decode($request->getBody());
          //$token = $response->csrf_token;
          //\Drupal::logger('grype_custom')->notice($response);
          //echo "<pre>";
          //var_dump($response);
          //die();
      }
      else{
          var_dump(json_decode($request->getBody())->message); die();
          $message = json_decode($request->getBody())->message;
      }
    }

  }
  /**
