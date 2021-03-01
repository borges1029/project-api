<?php
    require 'models/conect.class.php';
    $api = new Api();
    $result_post = $api->post();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css"/> 

    <!-- Fontawesome -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>

    <!-- CSS posts -->
    <link rel="stylesheet" type="text/css" href="assets/css/posts.css"/> 
</head>
<body>
    <div class="container">
        <div class="row">
            
            <?php
                //foreach in post
                foreach ($result_post as $post){
            ?>
                    <div class="col-md-8">
                        <div class="media g-mb-30 media-comment">
                            <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                                <div class="actor-coment">
                                    <h5 class="h5 g-color-gray-dark-v1 mb-10"><?php echo $post->title;?></h5>
                                </div>
                                <p><?php echo $post->body;?></p>
                                <button class="btn btn-link btn-comments" onclick="Mudarestado('<?php echo $post->id;?>')"><i class="fa fa-comments" aria-hidden="true"></i> comments</button>
                            </div>
                        </div>
                        <div id="<?php echo $post->id;?>" style="display:none;">
                            <?php
                                $id_comment = $post->id;
                                $result_comment = $api->comments($id_comment);

                                //foreach in comments
                                foreach ($result_comment as $comment){
                            ?>
                                    <div class="media-body u-shadow-v18 g-bg-secondary g-co-30">
                                        <hr>
                                        <div class="actor-coment">
                                            <h5 class="h5 g-color-gray-dark-v1 mb-10"><?php echo $comment->name;?></h5>
                                        </div>
                                        <p><?php echo $comment->body;?></p>
                                    </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>

    <!-- js alter state -->
    <script src="assets/js/state.js"></script>
</body>
</html>