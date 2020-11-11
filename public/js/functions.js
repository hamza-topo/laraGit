
document.addEventListener("DOMContentLoaded", function(event) { 
    setBlogTile('Deploy Laravel Project On Heroku',0)
  });


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

