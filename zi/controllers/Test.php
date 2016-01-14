<?php

class Test_Controller
{
  public function TestRender(){
    $twig['header'] = "testrendertestrendertestrendertestrendertestrendertestrender< br/>
		testrendertestrendertestrendertestrender";
    App::render('/viewku/test',$twig);
  }

  public function TestRedirect($name){
    App::redirect('test.testRender');
  }

  public function TestUploadIt(){
    $req = App::request();
    if($req->isPost()){
      echo ROOT;
      $storage = new \Upload\Storage\FileSystem(ROOT."/data/v");
      $file = new \Upload\File('gfile', $storage);
      // Optionally you can rename the file on upload
      $new_filename = uniqid();
      $file->setName($new_filename);

      // Validate file upload
      // MimeType List => http://www.webmaster-toolkit.com/mime-types.shtml
      $file->addValidations(array(
        // Ensure file is of type "image/png"
        new \Upload\Validation\Mimetype('video/mp4'),

        // Ensure file is no larger than 5M (use "B", "K", M", or "G")
        new \Upload\Validation\Size('750M')
      ));

      // Access data about the file that has been uploaded
      $data = array(
        'name' => $file->getNameWithExtension(),
        'extension' => $file->getExtension(),
        'mime' => $file->getMimetype(),
        'size' => $file->getSize(),
        'md5' => $file->getMd5(),
        'dimensions' => $file->getDimensions()
      );

      // Try to upload file
      try {
        // Success!
        $file->upload();
      } catch (\Exception $e) {
        // Fail!
        $errors = $file->getErrors();
        var_dump($errors);
      }
      echo "just for post";
    } else {
      App::render('/viewku/formupload');
    }
  }

  public function TestGenID(){
    $req = App::request();
    var_dump(BASEURL);
    var_dump($req->getResourceUri());
    $user = User::find('all');
    var_dump($user);
    /*$user = new User();
    $user->name ="nanang suryadi";
    $user->email ="surya@kreasibaju.com";
    $user->username ="kreator";
    $user->save();*/
    $dt = new DateTime();
    var_dump($dt->getTimestamp());
  }

  public function TestChat()
  {
    $grid["folder"] = "Chat";
    App::render('/viewku/test_chat', $grid);
  }

  public function apiJson()
  {
    $comments = file_get_contents('assets/comments.json');
    $req = App::request();
    if($req->isPost()){
      $post = $req->post();
      $commentsDecoded = json_decode($comments, true);
      $commentsDecoded[] = ['author'  => $post['author'],
        'text'    => $post['text']];

      $comments = json_encode($commentsDecoded, JSON_PRETTY_PRINT);
      file_put_contents('assets/comments.json', $comments);
    }

    ZiUtil::to_json($comments);
  }
}