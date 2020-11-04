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