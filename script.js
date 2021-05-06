var app = new Vue ({
  el: '#app',
  data: {
    albums: [],
    genre: ''
  },
  methods: {
    filterGenre: function () {
      axios.get('http://localhost/php-ajax-dischi/api.php', {
        params: {
          genre: this.genre
        }
      })
      .then( (response) => {
        this.albums = response.data.response;
      });
    }
  },
  mounted: function() {
    axios.get('http://localhost/php-ajax-dischi/api.php')
    .then( (response) => {
      this.albums = response.data.response;
    });
  }
});
