<?php
 if(isset($post['member_announcement_only']) && $post['member_announcement_only'] ){


        if(isset($post['field_just_date']) && isset($post['field_just_time']) && strlen($post['field_just_date']) >3){

          $input = $post['field_just_date']." ".$post['field_just_time'];
          $date2 = date('Y-m-d H:i:s',strtotime('+5 hour',strtotime($input)));
          $date = date('Y-m-d',strtotime($date2))."T".date('h:i:s',strtotime($date2));

        }
        else{
          $date = null;
        }

        $new_member_announcement = Node::create(['type' => 'member_announcement']);
        if(isset($post['field_announcement_image']) && $post['field_announcement_image'] !== false ){
          $img1 = str_replace('data:image/png;base64,', '', $post['field_announcement_image']);
          $img1 = str_replace(' ', '+', $img1);
          $data1 = base64_decode($img1);
          //$myuid = uniqid('image');
          $field_annunce_image_name = "public://" . uniqid('img').".".$post['field_announcement_imagemime'];

          //$data = file_get_contents($image_link);
          $file = file_save_data($data1, $field_annunce_image_name, FILE_EXISTS_REPLACE);

          $new_member_announcement->set('field_announcement_image',[
              'target_id' => $file->id(),
              'alt' => $post['field_announcement_image_alt'],
          ]);

        }
        if(isset($post['field_public_photo_url'] && $post['field_public_photo_url'] != false)){
          $new_member_announcement->set('field_person_image_url', $post['field_public_photo_url']);
        }
        if(!empty( $post['field_title'])){
          $new_member_announcement->set('title', $post['field_title']);
        }
        if(!empty( $post['field_body_text'])){
          $new_member_announcement->set('field_body', [
            'value' => $post['field_body_text'],
            'format' => 'full_html',
          ]);
        }


        //$new_member_announcement->set('field_member_email', 'df dfdsf sfs fd');
        if(!empty( $post['field_virtual_event'])){
          $new_member_announcement->set('field_this_is_a_virtual_event', (bool)$post['field_virtual_event'] );
        }
        if(!empty( $post['field_notice_type'])){
          $new_member_announcement->set('field_no', $post['field_notice_type']);
        }
        if($date !== null){
          $new_member_announcement->set('field_announcement_date', $date);
        }
        $new_member_announcement->set('field_member_email', $post['field_user_email']);
        $new_member_announcement->set('field_announcement_person', $post['field_pen_name']);
        $new_member_announcement->enforceIsNew();
        $new_member_announcement->save();

        $data = ['message' => 'Member announement updated'];
        $response = new ResourceResponse($data);
        $response->addCacheableDependency($data);
        return $response;
    }

?>
