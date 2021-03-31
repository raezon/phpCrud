document.getElementById('selectAll').onclick = function() {

    var checkboxes = document.getElementsByName('articleId[]');
    var vals = [];
    for (var i=0, n=checkboxes.length;i<n;i++) 
    {
        
        if (checkboxes[i].checked) 
        {
            vals.push(checkboxes[i].value);
        }
        vals=vals.sort()
       
    }
    document.getElementById("deletAll").value = vals;
 
  }
  

