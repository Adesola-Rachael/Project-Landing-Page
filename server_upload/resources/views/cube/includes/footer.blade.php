 <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2021 TMGR Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Mex Tech</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <!-- script to submit form -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

<script type="text/javascript">
$(document).ready(function(){
    $("#form").on('submit',function(e){
        e.preventDefault();

        var mydata={
          
          'title':$('#title').val(),
          'content':$('#content').val(),
          'post_image':$('.post_image').val(),
          'uploader_name':$('#uploader_name').val(),
          'uploader_image':$('.uploader_image').val(),
         
        };
        const options = {
        method: 'POST',
        headers: {
        'Content-Type': 'multipart/form-data',
        },
        'Access-Control-Allow-Origin': 'http://127.0.0.1:8000/',
        body: JSON.stringify(mydata),
        // body:$('#form').serialize(),
        redirect:'follow'
        };
        // const options ={
        //     method:"POST",
        //     headers:{
        //         'Content-Type':'application/json'
        //     },
        //     body:JSON.stringify(mydata)
        // };
        fetch('http://taskapi.tmgrplatform.com/api/post', options)
        console.log(mydata);
    });
});
</script>
    <script type="text/javascript">
        //  $(document).ready(function(){
        // // student registration form submission
        //  $('#form').on('submit', function(e){
        //      e.preventDefault();
        //      let formData = new FormData(this);
        //      $('#image-input-error').text('');
        //     // console.log(formData);
        //      $.ajax({
        //         type:"POST",
        //         url:"/create_post",
        //         dataType:"json",
                // data:$('#stud_reg_form').serialize(), 
                // success:function(response){
                // console.log(response)
                // alert("data Saved");
                // },
                // error:function(error){
                //     console.log(error)
                //     alert("Data Not Saved");
                // }
                
                // data: formData,
                // contentType: false,
                // processData: false,
        //         success: (response) => {
        //             if (response) {
        //             this.reset();
        //             alert('Data has been uploaded successfully');
        //             }
        //         },
        //         error: function(response){
        //             console.log(response);
        //                 $('#image-input-error').text(response.responseJSON.errors.file);
        //         }
        //      });
            
             

              
        //  });
         
        //  $(document).on('click','.examStatus', function(e){
        //     // e.preventDefault();
        //     console.log("examActivate")
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     var status={
        //     'examStatus':$('.examStatus').val()
        // }

        //     $.ajax({
        //         type:"POST",
        //         url:"/status",
        //         // data:$('.examActivate').serialize(), 
        //         data:status,
        //         success:function(response){
        //             console.log(response)
        //             alert("data Saved");
        //             },
        //             error:function(error){
        //                 console.log(error)
        //                 alert("Data Not Saved");
        //             }
                    
        //     });console.log(status);
        //  });
    //  });
    // $(document).ready(function(){
    //   $('#form').on('submit',function(e){
    //     e.preventDefault();
    //     var data={
    //       'title':$('.title').val(),
    //       'content':$('.content').val(),
    //       'post_image':$('.post_image').val(),
    //       'uploader_name':$('.uploader_name').val(),
    //       'uploader_image':$('.uploader_image').val(),
    //     }
    //     console.log(data);
    //     $.ajaxSetup({
    //       headers: {
    //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //       }
    //     });
    //     $.ajax({
    //       type: "POST",
    //       url:"http://taskapi.tmgrplatform.com/api/post",
    //       data:$('#form').serialize(),
    //       dataType:"json",
    //       success:function(response){
    //         console.log(response)
    //         alert("data saved");
    //       },
    //       error: function(error){
    //         console.log(error)
    //         alert("data not saved");
    //       }
         

    //     });
    //   //  $response = wp_remote_post( 'http://taskapi.tmgrplatform.com/api/post', $data );
    //   });
    // });
  </script>
  <script>
    // const update = {
    // title: 'A blog post by Kingsley',
    // body: 'Brilliant post on fetch API',
    // userId: 1,
    // };
    // $(document).ready(function(){
    //   $('#form').on('submit',function(e){
    //     e.preventDefault();
    //     var mydata={
    //       'title':$('.title').val(),
    //       'content':$('.content').val(),
    //       'post_image':$('.post_image').val(),
    //       'uploader_name':$('.uploader_name').val(),
    //       'uploader_image':$('.uploader_image').val(),
    //     }
        // const options = {
        // method: 'POST',
        // headers: {
        // 'Content-Type': 'application/json',
        // },
        // body: JSON.stringify(mydata),
        // body:$('#form').serialize(),
        // redirect:'follow'
        // };
        // console.log(mydata);
      // fetch("http://taskapi.tmgrplatform.com/api/post", options)
      // .then(response=>response.text())
      // .then(result=>console.log(result))
      // .catch(error=>console.log('error',error));
      // .then(data => {
      //     if (!data.ok) {
      //       throw Error(data.status);
      //      }
      //      return data.json();
      //     }).then(mydata => {
      //     console.log(mydata);
      //     // {
      //     //
      //     'title':$('.title').val(),
      //     'content':$('.content').val(),
      //     'post_image':$('.post_image').val(),
      //     'uploader_name':$('.uploader_name').val(),
      //     'uploader_image':$('.uploader_image').val(),
      //     // };
      //     }).catch(e => {
      //     console.log(e);
      //     });
    //   });
    //  });

// const options = {
// method: 'POST',
// headers: {
// 'Content-Type': 'application/json',
// },
// body: JSON.stringify(update),
// };
// fetch('https://jsonplaceholder.typicode.com/posts', options)
//   .then(data => {
//       if (!data.ok) {
//         throw Error(data.status);
//        }
//        return data.json();
//       }).then(update => {
//       console.log(update);
//       // {
//       //
//       title: 'A blog post by Kingsley',
//       //
//       body: 'Brilliant post on fetch API',
//       //
//       userId: 1,
//       //
//       id: 101
//       // };
//       }).catch(e => {
//       console.log(e);
//       });
  </script>
<!-- //script to submit form -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset ('blog_assets/js/main.js') }}"></script>

    <!--  Chart js -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script> -->

    <!--Chartist Chart-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="/blog_assets/js/init/weather-init.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="/blog_assets/js/init/fullcalendar-init.js"></script> -->

    <!--Local Stuff-->
  
</body>
</html>