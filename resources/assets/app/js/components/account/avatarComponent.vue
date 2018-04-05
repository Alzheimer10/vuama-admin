<template>
	<div>
	    <croppa v-model="myCroppa" initial-image="http://vuama.local/avatars/default_avatar.png" :prevent-white-space="true" :disable-scroll-to-zoom="true" :show-remove-button="true">
	    </croppa>
	    <!-- <button @click="upload">UPLOAD</button> -->
	</div>
</template>

<script>
	import 'vue-croppa/dist/vue-croppa.css'
  	export default {
		data(){
      		return {
            	myCroppa: {},
			}
		},
	    uploadCroppedImage() {
	      this.myCroppa.generateBlob((blob) => {
	    	console.log(blob);
	        // write code to upload the cropped image file (a file is a blob)
	      }, 'image/jpeg', 0.8) // 80% compressed jpeg file
	    },
	    methods: {
		    upload() {
		      if (!this.myCroppa.hasImage()) {
		        alert('no image to upload')
		        return
		      }
		      
		      this.myCroppa.generateBlob((blob) => {
		        var fd = new FormData()
		        fd.append('file', blob)
		        fd.append('other', 'blahblahblah')
		        console.log(fd);
		        $.ajax({
		          url: 'http://www.xxx.com/api/upload',
		          data: fd,
		          type: 'POST',
		          processData: false,
		          contentType: false,
		          success: function(data) {
		            alert(data)
		          }
		        })
		      })
		    }
	    }
	}
</script>