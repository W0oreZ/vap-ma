var vue = new Vue({
    el: '#app',
    data: {
        message:'',
        files: [],
        images: [],
        counter: 4
    },
    methods:{
        uploading: function (event) {
            event.preventDefault;
            if(vue.counter>0){
                let file = event.target.files[0];
                const formData = new FormData();
                formData.append('image', file);
                axios.post("upload", formData, {})
                .then(function(r){
                    console.log(r.data);
                    vue.images.push({index:vue.counter,path:r.data,primary:false,name:'image'+vue.counter});
                    vue.counter--;
                }).catch(function(error){
                    console.log(error)
                });
            }else{
                vue.message = 'maximum 4 photos par annonce'
            }
            
        },
        deleteimg: function(e){
            e.preventDefault;
            console.log(e);
            
        }
    }
  });