function setBlogTile(title,content)
{
   getBlogContent(content);
   $('#card-header-title').html('<strong id="title">'+title+'</strong>');
}

function getBlogContent(content)
{
    $.ajax({
        url:'/get-blog-content',
        type:'GET',
        data:{content:content},
        success:function(data)
        {
             $('#content').html(data.html);
        }
    });
}

$(function(){
    $(window).on('load', function(){
      $('.img-lazy').each(function(){
        var $this = $(this),
            src = $(this).data('src');
        $this.attr('src', src);
        console.log(src);
      });
    });
  });