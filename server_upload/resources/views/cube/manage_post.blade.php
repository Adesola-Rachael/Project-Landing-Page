@extends('cube.layouts.app')
  
@section('content')
  <!-- New Slides Section -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <!-- column for article creation -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">Create New Article</div>
                    <div class="card-body card-block">
                         <form action="#"  id="form" enctype="multipart/form-data"   class="">
                        	@csrf
                            <div class="form-group">
                                <div class="input-group">
                                    
                                    <input type="text" id="title" name="title" id="title" placeholder="Title of Post" class="form-control ">
                                </div>
                            </div>
                            <!-- input for content -->
                            <div class="form-group">
                              <label for="title">Content<span class="require"></span></label>
                              <textarea rows="5"  class="form-control " name="content" id="content" placeholder=" Enter Full Story"> </textarea> 
                             </div>
                             <!-- image of post -->
                             <div class="form-group">
                                <div class="input-group">
                                  <label for="description">Post Image</label>
                                  <input type="file" id="image"  id="post_image" name="post_image" class="form-control post_image">
                                </div>
                            </div>
                             <!-- input for uploader's name -->
                              <div class="form-group">
                                <div class="input-group">
                                <label for="description">Uploader Name</label>
                                    <input type="text" id="uploader_name" id="uploader_name" name="uploader_name" placeholder="Uploader's Name" class="form-control">
                                </div>
                              </div>
                               
                             <!-- image of Uploader -->
                             <div class="form-group">
                                <div class="input-group">
                                  <label for="description">Uploader's Image</label>
                                  <input type="file" id="image" id="uploader_image" name="uploader_image" class="form-control uploader_image">
                                </div>
                            </div>
                            <span class="text-danger" id="image-input-error"></span>
                  
                            <div class="form-actions form-group"><button type="submit" class="btn btn-primary btn-sm">Submit</button></div>
                        </form>
                    </div>
                </div>
                <!-- article Category -->
                <!-- End Article Category -->
                <!-- Show articles -->
                <div class="container">
  <!-- Blog Entries Column -->
  <h1 class="my-4">
    <small>All Articles</small>
  </h1>

  <!-- Blog Post -->
      
  @foreach($posts as $post)
    <?php
      $date=date("Y-m-d",strtotime($post['created_at']));
      $now=date("Y-m-d");
      //  $fivedays=date("Y-m-d",strtotime($now.'+5 days'));
        
        
      $temp = explode('-',$date);
      $day=$temp[2];
      $month=date("F", mktime(0, 0, 0,$temp[1] , 1));
      $year=$temp[0];
    ?>
    <!-- call all post -->
    <div class="card mb-4">
      <img class="card-img-top" src="#" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">{{$post['title']}} </h2>
        <p class="card-text">{{$post['content']}} </p>
        <p><span><i class="icon-eye"></i> </span>
        <span><i class="icon-comment"></i> </span></p>
        <!-- Edit Article -->
        <!-- //Edit Article -->

                         
            <!-- Delete Article -->
      <div><a class="btn btn-danger" onclick="return confirm('Are you sure you want remove this post ?')"  href="{{route('delete_post',['id'=>$post['id']
                            ])}}">Delete Article
            </a></div>
            <!-- End Delete -->
        
      </div>
      
      <div class="card-footer text-muted">
      

        
      </div>
    </div>
  @endforeach
      

</div>
    
                <!-- End Article Category -->
            </div>
             <!-- column(for article category) -->
             
              <!--  //column(for article category) -->
                       
 
        
@endsection