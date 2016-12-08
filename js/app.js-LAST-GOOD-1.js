

new Vue ({
  el: '#app',
  data: {
    message:  'Vue 2.0 is Working',
    ajax:     'Posts Should Display Here',
    posts:    ''
  },
  methods: {
    selectFruit(post) {
      this.message = post;
    }
  },
  created: function() {
    // console.log('created ran');
    this.$http.get('http://dmol.local/wp-json/wp/v2/posts')
      .then(function(response){
          console.log(response.data);

          this.posts = response.data;
      });
  }
});




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