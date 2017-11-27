(function($){

  $("#quote").empty();
  $("#author").empty();   
  $("#link").empty();


  // todo api_vars.page_id 
  // modify url for get on single post page load.

  var urlEndpoint = '';
  var currentPage = '';

  if( $('.home' ).length ){
    urlEndpoint = '?filter[orderby]=rand&filter[posts_per_page]=1';
    console.log('home');
    currentPage = 'home';
  }
  else if( $('.single-post' ).length ){
    urlEndpoint = api_vars.page_id;
    console.log(api_vars.page_id);
    currentPage = 'single';
  }

    $.ajax({
    method: 'get',
    url: api_vars.root_url + 'wp/v2/posts/' + urlEndpoint
 
 }).done( function(data) {
        
        var quote, author, link, source;

        if(currentPage == 'home'){
          quote = data[0].excerpt.rendered;
          author = data[0].title.rendered;
          link = data[0]._qod_quote_source_url;
          source = data[0]._qod_quote_source;
        }
        else if (currentPage == 'single'){
          quote = data.excerpt.rendered;
          author = data.title.rendered;
          link = data._qod_quote_source_url;
          source = data._qod_quote_source;
        }
        

        author = "-" + author + ", ";
       
        $('#quote').html(quote);
        $('#author').html(author);
        
        if (link) {
        $('#link').html('<a href="' + link + '">' + source + '</a>');
        }
        else {
          $('#source').html(source);
        }
   });

   
   
  $('#new-quote-button').on('click', function(event) {
    event.preventDefault();
    $("#link").empty();
    $("#source").empty();


    $.ajax({
       method: 'get',
       url: api_vars.root_url + 'wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1'
    
    }).done( function(data) {
      
    
        
        var quote = data[0].excerpt.rendered;
        var author = data[0].title.rendered;
        var link = data[0]._qod_quote_source_url;
        var source = data[0]._qod_quote_source;
        author = "&m-;" + author + ", ";
       
        $('#quote').html(quote);
        $('#author').html(author);
        
        if (link) {
        $('#link').html('<a href="' + link + '">' + source + '</a>');
        }
        else {
          $('#source').html(source);
        }   
      });
  });


  $('.submit-quote').on('click', function (event) {
 
    event.preventDefault();
    var title = $('#quote-author').val();
    var quote = $('#quote-box').val();
    var source = $('#quote-source').val();
    var sourceUrl = $('#quote-source-url').val();

    
    $.ajax({
      method: 'post',
      url: api_vars.root_url + 'wp/v2/posts/',
      data: {
        title: title,
        content: quote,
        _qod_quote_source: source,
        _qod_quote_source_url: sourceUrl,
        status: "publish"
      },
      beforeSend: function (xhr) {
        xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
      }
    }).done(function () {
      alert('Success! made a new post');
      $("#quote-submission-form").trigger('reset');
     
    });
  }); 



})(jQuery);

