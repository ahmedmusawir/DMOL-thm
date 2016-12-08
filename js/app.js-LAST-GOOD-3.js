
new Vue ({
  el: '#app',
  data: {
    message:  'Vue 2.0 is Working',
    ajax:     'Posts Should Display Here',    
    posts:    '',
    singlePost: '' 
  },  
  created: function() {
    this.getData();
    // this.getSingle(id);
  },
  methods: {
     getData: function() {

        var app = this;

         axios.get('http://dmol.local/wp-json/wp/v2/posts/')
          .then(function(response) {
            app.posts = response.data;
            // console.log(app.posts);

            return app.posts;
        })
         .catch(function(error){
           console.log(error);
         })
     },

     getSingle: function(id) {

        var app = this;

         axios.get('http://dmol.local/wp-json/wp/v2/posts/' + id)
          .then(function(response) {
            // app.singlePostData = response.data;

            console.log(response.data.title.rendered);
            // console.log(response.data);

            app.singlePost = {

              title:          response.data.title.rendered,
              content:        response.data.content.rendered,
              featured_full:  response.data.featured_full 
            }

            // console.log( app.singlePost );

            return app.singlePost;
        })
         .catch(function(error){
           console.log(error);
         })
     },

     // getThePost: function(id){

     //    var posts = this.posts;

     //    function filterPosts(el) {

     //       return el.id == id;
     //    }

     //    this.$set('singlePost', posts.filter(filterPosts));

     //    console.log(posts.filter(filterPosts));

     // }     
  }

});


// new Vue ({
//   el: '#app',
//   data: {
//     message:  'Vue 2.0 is Working',
//     ajax:     'Posts Should Display Here',
//     posts:    ''
//   },
//   methods: {
//     selectFruit(post) {
//       this.message = post;
//     }
//   },
//   created: function() {
//     // console.log('created ran');
//     this.$http.get('http://dmol.local/wp-json/wp/v2/posts/')
//       .then(function(response){
//           console.log(response);

//           this.posts = response.data;
//       });
//   }
// });




// new Vue ({
//   el: '#app',
//   data: {
//     message: 'Hello Vue 2.0',
//     fruits: [ 'apple', 'Microsoft', 'VMware', 'OSx' ]
//   },
//   methods: {
//     selectFruit(fruit) {
//       this.message = fruit;
//     }
//   }
// });