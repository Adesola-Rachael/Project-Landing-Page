<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bootstrap Blog - B4 Template by Bootstrap Temple</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <style>
            .require {
            color: #666;
            }
            label small {
                color: #999;
                font-weight: normal;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-md-offset-2">
                
                <h1>Create post</h1>
                
                <form action="/create" method="POST" enctype="multipart/form-data">
                @csrf
                    <!-- <div class="form-group has-error">
                        <label for="slug">Slug <span class="require">*</span> <small>(This field  use in url path.)</small></label>
                        <input type="text" class="form-control" name="slug" />
                        <span class="help-block">Field not entered!</span>
                    </div> -->
                    <!-- this is the title  -->
                    <div class="form-group">
                        <label for="title">Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    <!-- this is the content  -->
                    <div class="form-group">
                        <label for="title">Content<span class="require">*</span></label>
                        <input type="text" class="form-control" name="content" />
                    </div>
                    <!-- this is the content  --> 
                    <div class="form-group">
                        <label for="description">Uploader Image</label><!-- this is the content  -->
                        <input  type="file" class="form-control" name="uploader_image" />
                    </div>
                    <!-- this is the content  -->
                    <div class="form-group">
                        <label for="description">Uploader Name</label>
                         <input  type="text" class="form-control" name="uploader_name" />
                    </div>
                    <div class="form-group">
                        <label for="description">Post Image</label>
                         <input  type="file" class="form-control" name="post_image" />
                    </div>
                    
                    <div class="form-group">
                        <p><span class="require"></span></p>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                        <button class="btn btn-default">
                            Cancel
                        </button>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
    </body>
<html>