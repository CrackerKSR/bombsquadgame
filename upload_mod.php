<?php include_once 'inc/header.php'; ?>



<div class="main">
<small><small>  <p> * UI designing is not done yet. its initial phase. with less validation. If you have any suggestion feel free to contact us 
  <strong><a href="https://www.facebook.com/groups/bsglobal" style="text-decoration: none; color: white;" target="_blank"> BombSquad Game [Global] </a> or email : elitebombsquaders@gmail.com</strong>
  </p></small></small>
  <p>Fill all detail about mod along with mod file and image file for mod. uploaded mod will be shown in mods download page but later I will add filter </p>
  <div id="formContainer">
    <form name="form1" action="sender.php" method="post">
    
    <fieldset>
      <legend> About mode </legend>
      <input type="text" name="modname" value="" placeholder="Mode name"> <br>
      <input type="text" name="moddername" value="" placeholder="Modder name"> <br>
      <input type="text" name="uploadername" value="" placeholder="Your Name"> <br>
    </fieldset>
    <fieldset>
      <legend> Mod type </legend>
      <input type="checkbox" name="ffa"> <label> ffa</label>
      <input type="checkbox" name="team"> <label for="">team</label>
      <input type="checkbox" name="coop"> <label for="">coop</label>
    </fieldset>

    <fieldset>
      <legend> Mod file  </legend>
      <input  type="radio" name="upload_mehode_mod" value="upload_mod_file" checked="checked"> <label for="">Upload File</label>
      <input  type="radio" name="upload_mehode_mod" value="upload_mod_url">   <label for="">Paste mod URL</label>

      <div id="upload_mod_file" class="upload_mod" > 
        <input type="file" name="modfile" id="modFILE" onchange="getfile()"  >
      </div>
        <progress value="0" id="uploaderBAR" max="100">0%</progress><br><br> 
        <input type="url" name="modURL" value=""  id="modURL" placeholder="mod file url"> 



    </fieldset>

<!-- <script type="text/javascript">
function yesnoCheck() {
    if (document.getElementsByName('upload_mehode_mod')[0].checked) {
        document.getElementsByClassName('upload_mod').style.visibility = 'visible';
        
    }
    else document.getElementsByClassName('upload_mod').style.visibility = 'hidden';

}

</script> -->
    <fieldset>
      <legend>Image file </legend>
      <input type="radio" name="upload_mehode_img" value="upload_img_file"  checked="checked"><label for="">Upload Image</label>
      <input type="radio" name="upload_mehode_img" value="upload_img_url"><label for="">Paste mod URL</label>

      <div id="upload_img_file" class="upload_img" > 
        <input type="file" name="imgfile" id="imgFILE" onchange="getfile2()">
      </div>
          <progress value="0" id="uploaderBAR2" max="100">0%</progress><br><br> 
        <input type="url" name="imgURL" value="" placeholder="image file url"  id="imgURL">
      


    </fieldset>

<fieldset>
      <input type="submit" name="submit" id="submit" value="UPLOAD">
    <input type="reset" name="" value="RESET">
</fieldset>
  </form>
</div>
</div>





<!-- <form> 
<progress value="0" id="uploader" max="100">0%</progress><br><br> 
<input id="photo"class="file"type="file" name="mainimage"  value="" onchange="getfile()"><br><br> 
<input type="text" id="url" name="" value="" >
<button id="submit_link"type="submit" name="button" onclick="get()">Save</button> 
</form>  -->
<script type="text/javascript"> 

      var selectedFile; 
      function getfile() 
      { 
          var modFILE = document.getElementById("modFILE"); 
  			
           // selected file is that file which user chosen by html form 
          selectedFile = modFILE.files[0]; 
  
           // make save button disabled for few seconds that has id='submit_link' 
          document.getElementById('submit').setAttribute('disabled', 'true'); 
          myfunction(modFILE.value); // call below written function 
      } 
      function myfunction(fname) 
      { 
          // select unique name for everytime when image uploaded 
          // Date.now() is function that give current timestamp 
          var name=fname.replace(/^.*[\\\/]/, ''); 
  
          // make ref to your firebase storage and select images folder 
          var storageRef = firebase.storage().ref('/images/'+ name); 
  
          // put file to firebase  
          var uploadTask = storageRef.put(selectedFile); 
  
          // all working for progress bar that in html 
          // to indicate image uploading... report 
          uploadTask.on('state_changed', function(snapshot){ 
            var progress =  
             (snapshot.bytesTransferred / snapshot.totalBytes) * 100; 
              var uploader = document.getElementById('uploaderBAR'); 
              uploader.value=progress; 
              switch (snapshot.state) { 
                case firebase.storage.TaskState.PAUSED: 
                  console.log('Upload is paused'); 
                  break; 
                case firebase.storage.TaskState.RUNNING: 
                  console.log('Upload is running'); 
                  break; 
              } 
          }, function(error) {console.log(error); 
          }, function() { 
  
               // get the uploaded image url back 
               uploadTask.snapshot.ref.getDownloadURL().then( 
                function(downloadURL) { 
  
               // You get your url from here 
                console.log('File available at', downloadURL); 
  
              // print the image url  
              document.getElementById('submit').removeAttribute('disabled'); 
              document.getElementById('modURL').value = downloadURL; 
               

            }); 
          }); 
      }; 
 </script> 

<script type="text/javascript"> 

      var selectedFile2; 
      function getfile2() 
      { 
          var modFILE = document.getElementById("imgFILE"); 
  			
           // selected file is that file which user chosen by html form 
          selectedFile2 = modFILE.files[0]; 
  
           // make save button disabled for few seconds that has id='submit_link' 
          document.getElementById('submit').setAttribute('disabled', 'true'); 
          myfunction2(modFILE.value); // call below written function 
      } 
      function myfunction2(fname) 
      { 
          // select unique name for everytime when image uploaded 
          // Date.now() is function that give current timestamp 
          var name=fname.replace(/^.*[\\\/]/, ''); 
  
          // make ref to your firebase storage and select images folder 
          var storageRef = firebase.storage().ref('/images/'+ name); 
  
          // put file to firebase  
          var uploadTask = storageRef.put(selectedFile2); 
  
          // all working for progress bar that in html 
          // to indicate image uploading... report 
          uploadTask.on('state_changed', function(snapshot){ 
            var progress =  
             (snapshot.bytesTransferred / snapshot.totalBytes) * 100; 
              var uploader = document.getElementById('uploaderBAR2'); 
              uploader.value=progress; 
              switch (snapshot.state) { 
                case firebase.storage.TaskState.PAUSED: 
                  console.log('Upload is paused'); 
                  break; 
                case firebase.storage.TaskState.RUNNING: 
                  console.log('Upload is running'); 
                  break; 
              } 
          }, function(error) {console.log(error); 
          }, function() { 
  
               // get the uploaded image url back 
               uploadTask.snapshot.ref.getDownloadURL().then( 
                function(downloadURL) { 
  
               // You get your url from here 
                console.log('File available at', downloadURL); 
  
              // print the image url  
              document.getElementById('submit').removeAttribute('disabled'); 
              document.getElementById('imgURL').value = downloadURL; 

            }); 
          }); 
      }; 
 </script> 


<?php include 'inc/footer.php'; ?>